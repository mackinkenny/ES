<?php

namespace App\Http\Controllers;

use App\Buildmater;
use App\Buildmatertype;
use App\Category;
use Illuminate\Http\Request;

class BuildmatertypeController extends Controller
{
    //
    public function createbuildmaterialtype()
    {
        $categories = Category::all();
        return view('create.createbuildmaterialtype',['categories' => $categories]);
    }
    public function storebuildmaterialtype(Request $request)
    {
        $buildmatertype = new Buildmatertype();
        $buildmatertype->name = $request->name;
        $buildmatertype->category_id = $request->category_id;
        $buildmatertype->save();

        return back();
    }
    public function materialtypesort($id)
    {
        $materials = Buildmater::where('type_id', '=', $id)->get();

        return response()->json(['materials' => $materials]);
    }

    public function materialtypebacksort()
    {
        $materials = Buildmater::all();

        return response()->json(['materials' => $materials]);
    }
}
