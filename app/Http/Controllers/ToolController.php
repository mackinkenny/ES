<?php

namespace App\Http\Controllers;

use App\Buildtoolphoto;
use App\Tool;
use App\Tooltype;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ToolController extends Controller
{
    //
    public function createbuildtool()
    {
        $types = Tooltype::all();
        return view('create.createbuildtool',['types' => $types]);
    }

    public function storebuildtool(Request $request)
    {
        //
        $tool = new Tool();
        $tool->name = $request->name;
        $tool->info = $request->info;
        $tool->price = $request->price;
        $tool->address = $request->address;
        $tool->contact = $request->contact;
        $tool->type_id = $request->type_id;
        $tooltype = Tooltype::find($request->type_id);
        $tool->type_name = $tooltype->name;
        $tool->save();
        if(!$request->img_paths == null) {
            foreach ($request->img_paths as $index => $photo) {
                $filename = time() + random_int(random_int(-10000, 0), random_int(1000, 999999)) . '.' . $photo->getClientOriginalExtension();
                Image::make($photo)->save('image/photo/' . $filename);
                $photonew = new Buildtoolphoto();
                $photonew->img_path = $filename;
                $photonew->buildtool_id = $tool->id;
                $photonew->save();
                if ($index == 0) {
                    $tool->img_path = $filename;
                    $tool->save();
                }
            }
        }

        return back();
    }

    public function showtool($id)
    {
        $tool = Tool::find($id);
        $photos = Buildtoolphoto::all()->where('buildtool_id','=',$id);
        $count = count($photos);

        return view('object.object',['object' => $tool, 'photos' => $photos, 'count' => $count]);
    }


}
