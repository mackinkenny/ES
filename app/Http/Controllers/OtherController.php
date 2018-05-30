<?php

namespace App\Http\Controllers;

use App\Other;
use App\Otherphoto;
use App\Othertype;
use Illuminate\Http\Request;

class OtherController extends Controller
{
    //
    public function createother()
    {
        $types = Othertype::all();
        return view('create.createother',['types' => $types]);
    }

    public function storeother(Request $request)
    {
        //
        $other = new Other();
        $other->name = $request->name;
        $other->info = $request->info;
        $other->price = $request->price;
        $other->address = $request->address;
        $other->contact = $request->contact;
        $other->type_id = $request->type_id;
        $othertype = Othertype::find($request->type_id);
        $other->type_name = $othertype->name;
        $other->save();
        if(!$request->img_paths == null) {
            foreach ($request->img_paths as $index => $photo) {
                $filename = time() + random_int(random_int(-10000, 0), random_int(1000, 999999)) . '.' . $photo->getClientOriginalExtension();
                Image::make($photo)->save('image/photo/' . $filename);
                $photonew = new Otherphoto();
                $photonew->img_path = $filename;
                $photonew->other_id = $other->id;
                $photonew->save();
                if ($index == 0) {
                    $other->img_path = $filename;
                    $other->save();
                }
            }
        }

        return back();
    }

    public function showother($id)
    {
        $other = Other::find($id);
        $photos = Otherphoto::all()->where('other_id','=',$id);
        $count = count($photos);

        return view('object.object',['object' => $other, 'photos' => $photos, 'count' => $count]);
    }
}
