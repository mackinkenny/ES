<?php

namespace App\Http\Controllers;

use App\Category;
use App\Tool;
use App\Tooltype;
use Illuminate\Http\Request;

class TooltypeController extends Controller
{
    //
    public function createbuildtooltype()
    {
        $categories = Category::all();
        return view('create.createbuildtooltype',['categories' => $categories]);
    }
    public function storebuildtooltype(Request $request)
    {
        $tooltype = new Tooltype();
        $tooltype->name = $request->name;
        $tooltype->category_id = $request->category_id;
        $tooltype->save();

        return back();
    }

    public function tooltypesort($id)
    {
        $tools = Tool::where('type_id', '=', $id)->get();

        return response()->json(['tools' => $tools]);
    }

    public function tooltypebacksort()
    {
        $tools = Tool::all();

        return response()->json(['tools' => $tools]);
    }
}
