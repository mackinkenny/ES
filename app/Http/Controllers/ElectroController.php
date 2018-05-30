<?php

namespace App\Http\Controllers;

use App\Electro;
use App\Electrophoto;
use App\Electrotype;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ElectroController extends Controller
{
    //
    public function createelectro()
    {
        $types = Electrotype::all();
        return view('create.createelectro',['types' => $types]);
    }

    public function storeelectro(Request $request)
    {
        //
        $electro = new Electro();
        $electro->name = $request->name;
        $electro->info = $request->info;
        $electro->price = $request->price;
        $electro->address = $request->address;
        $electro->contact = $request->contact;
        $electro->type_id = $request->type_id;
        $electrotype = Electrotype::find($request->type_id);
        $electro->type_name = $electrotype->name;
        $electro->save();
        if(!$request->img_paths == null) {
            foreach ($request->img_paths as $index => $photo) {
                $filename = time() + random_int(random_int(-10000, 0), random_int(1000, 999999)) . '.' . $photo->getClientOriginalExtension();
                Image::make($photo)->save('image/photo/' . $filename);
                $photonew = new Electrophoto();
                $photonew->img_path = $filename;
                $photonew->electro_id = $electro->id;
                $photonew->save();
                if ($index == 0) {
                    $electro->img_path = $filename;
                    $electro->save();
                }
            }
        }

        return back();
    }

    public function showelectro($id)
    {
        $electro = Electro::find($id);
        $photos = Electrophoto::all()->where('electro_id','=',$id);
        $count = count($photos);

        return view('object.object',['object' => $electro, 'photos' => $photos, 'count' => $count]);
    }
}
