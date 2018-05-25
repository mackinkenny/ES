<?php

namespace App\Http\Controllers;

use App\Build;
use App\Buildtype;
use App\Category;
use Illuminate\Http\Request;

class BuildtypeController extends Controller
{
    //
    public function createbuildtype()
    {
        $categories = Category::all();
        return view('create.createbuildtype',['categories' => $categories]);
    }
    public function storebuildtype(Request $request)
    {
        $buildtype = new Buildtype();
        $buildtype->name = $request->name;
        $buildtype->category_id = $request->category_id;
        $buildtype->save();

        return back();
    }

    public function buildtypesort($id)
    {
        $builds = Build::where('type_id', '=', $id)->get();

        return response()->json(['builds' => $builds]);
    }

    public function buildtypebacksort()
    {
        $builds = Build::all();

        return response()->json(['builds' => $builds]);
    }
}
