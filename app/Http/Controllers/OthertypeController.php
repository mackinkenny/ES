<?php

namespace App\Http\Controllers;

use App\Category;
use App\Other;
use App\Othertype;
use Illuminate\Http\Request;

class OthertypeController extends Controller
{
    //
    public function createothertype()
    {
        $categories = Category::all();
        return view('create.createothertype',['categories' => $categories]);
    }
    public function storeothertype(Request $request)
    {
        $other = new Othertype();
        $other->name = $request->name;
        $other->category_id = $request->category_id;
        $other->save();

        return back();
    }
    public function othertypesort($id)
    {
        $others = Other::where('type_id', '=', $id)->get();

        return response()->json(['others' => $others]);
    }

    public function othertypebacksort()
    {
        $others = Other::all();

        return response()->json(['others' => $others]);
    }
}
