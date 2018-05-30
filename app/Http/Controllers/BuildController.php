<?php

namespace App\Http\Controllers;

use App\Build;
use App\Buildphoto;
use App\Buildtype;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class BuildController extends Controller
{
    //
    public function createbuild()
    {
        $types = Buildtype::all();
        return view('create.createbuild',['types' => $types]);
    }

    public function storebuild(Request $request)
    {
        //
        $build = new Build();
        $build->name = $request->name;
        $build->info = $request->info;
        $build->price = $request->price;
        $build->address = $request->address;
        $build->contact = $request->contact;
        $build->type_id = $request->type_id;
        $buildtype = Buildtype::find($request->type_id);
        $build->type_name = $buildtype->name;
        $build->save();
        if(!$request->img_paths == null) {
            foreach ($request->img_paths as $index => $photo) {
                $filename = time() + random_int(random_int(-10000, 0), random_int(1000, 999999)) . '.' . $photo->getClientOriginalExtension();
                Image::make($photo)->save('image/photo/' . $filename);
                $photonew = new Buildphoto();
                $photonew->img_path = $filename;
                $photonew->build_id = $build->id;
                $photonew->save();
                if ($index == 0) {
                    $build->img_path = $filename;
                    $build->save();
                }
            }
        }
        return back();
    }

    public function showbuild($id)
    {
        $build = Build::find($id);
        $photos = Buildphoto::all()->where('build_id','=',$id);
        $count = count($photos);

        return view('object.object',['object' => $build, 'photos' => $photos, 'count' => $count]);
    }
}
