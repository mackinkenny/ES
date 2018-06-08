<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    //
    public function typesort($id)
    {
        $products = Product::where('parent_id', '=', $id)->get();


        return response()->json(['products' => $products]);
    }
    public function typebacksort()
    {
        $products = Product::all();

        return response()->json(['products' => $products]);
    }

    public function createtype()
    {
        $categories = Category::all();
        return view('create.type',['categories' => $categories]);
    }

    public function storetype(Request $request)
    {
        $type = new Type();
        $type->name = $request->name;
        $type->parent_id = $request->parent_id;
        $type->save();

        return back();
    }
}
