<?php

namespace App\Http\Controllers;

use App\Service;
use App\Servicephoto;
use App\Servicetype;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ServiceController extends Controller
{
    //
    public function createservice()
    {
        $types = Servicetype::all();
        return view('create.createservice',['types' => $types]);
    }

    public function storeservice(Request $request)
    {
        //
        $service = new Service();
        $service->name = $request->name;
        $service->info = $request->info;
        $service->price = $request->price;
        $service->address = $request->address;
        $service->contact = $request->contact;
        $service->type_id = $request->type_id;
        $servicetype = Servicetype::find($request->type_id);
        $service->type_name = $servicetype->name;
        $service->save();
        if(!$request->img_paths == null) {
        foreach ($request->img_paths as $index => $photo) {
            $filename = time() + random_int(random_int(-10000, 0), random_int(1000, 999999)) . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->save( 'image/photo/' . $filename );
            $photonew = new Servicephoto();
            $photonew->img_path = $filename;
            $photonew->service_id = $service->id;
            $photonew->save();
            if ($index == 0) {
                $service->img_path = $filename;
                $service->save();
            }
        }
        }
        return back();
    }

    public function showservice($id)
    {
        $service = Service::find($id);
        $photos = Servicephoto::all()->where('service_id','=',$id);
        $count = count($photos);

        return view('object.object',['object' => $service, 'photos' => $photos, 'count' => $count]);
    }

}
