<?php

namespace App\Http\Controllers;
use App\Auto;
use App\Autophoto;
use App\Autotype;
use App\Category;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AutoController extends Controller
{
    //
    public function auto($id)
    {
        $autos = Auto::all()->where('type_id','=',$id);
        $autotypes = Autotype::all();
        $type = Autotype::find($id);

            return view('pages.auto', ['autos' => $autos, 'autotypes' => $autotypes,'type' => $type]);
    }
    public function createauto()
    {
        $types = Autotype::all();
        return view('create.createauto',['types' => $types]);
    }

    public function storeauto(Request $request)
    {
        //
        $auto = new Auto();
        $auto->name = $request->name;
        $auto->info = $request->info;
        $auto->price = $request->price;
        $auto->address = $request->address;
        $auto->contact = $request->contact;
        $auto->type_id = $request->type_id;
        $autotype = Autotype::find($request->type_id);
        $auto->type_name = $autotype->name;
        $auto->save();
        foreach ($request->img_paths as $index => $photo) {
            $filename = time() + random_int(random_int(-10000, 0), random_int(1000, 999999)) . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->save( 'image/photo/' . $filename );
            $photonew = new Autophoto();
            $photonew->img_path = $filename;
            $photonew->auto_id = $auto->id;
            $photonew->save();
            if ($index == 0) {
                $auto->img_path = $filename;
                $auto->save();
            }
        }

        return back();
    }

    public function showauto($id)
    {
        $auto = Auto::find($id);
        $photos = Autophoto::all()->where('auto_id','=',$id);
        $count = count($photos);

        return view('object.object',['object' => $auto, 'photos' => $photos,'count' => $count]);
    }
}
