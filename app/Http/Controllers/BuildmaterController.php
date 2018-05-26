<?php

namespace App\Http\Controllers;

use App\Buildmater;
use App\Buildmaterphoto;
use App\Buildmatertype;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class BuildmaterController extends Controller
{
    //
    public function createbuildmater()
    {
        $types = Buildmatertype::all();
        return view('create.createbuildmaterial',['types' => $types]);
    }

    public function storebuildmater(Request $request)
    {
        //
        $buildmater = new Buildmater();
        $buildmater->name = $request->name;
        $buildmater->info = $request->info;
        $buildmater->price = $request->price;
        $buildmater->address = $request->address;
        $buildmater->contact = $request->contact;
        $buildmater->type_id = $request->type_id;
        $buildmatertype = Buildmatertype::find($request->type_id);
        $buildmater->type_name = $buildmatertype->name;
        $buildmater->save();
        foreach ($request->img_paths as $index => $photo) {
            $filename = time() + random_int(random_int(-10000, 0), random_int(1000, 999999)) . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->save( 'image/photo/' . $filename );
            $photonew = new Buildmaterphoto();
            $photonew->img_path = $filename;
            $photonew->buildmater_id = $buildmater->id;
            $photonew->save();
            if ($index == 0) {
                $buildmater->img_path = $filename;
                $buildmater->save();
            }
        }

        return back();
    }

    public function showmaterial($id)
    {
        $material = Buildmater::find($id);
        $photos = Buildmaterphoto::all()->where('buildmater_id','=',$id);
        $count = count($photos);

        return view('object.object',['object' => $material, 'photos' => $photos, 'count' => $count]);
    }
}
