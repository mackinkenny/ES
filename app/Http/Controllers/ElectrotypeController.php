<?php

namespace App\Http\Controllers;

use App\Electro;
use App\Electrotype;
use App\Category;
use App\Tooltype;
use Illuminate\Http\Request;

class ElectrotypeController extends Controller
{
    //
    public function createelectrotype()
    {
        $categories = Category::all();
        return view('create.createelectrotype',['categories' => $categories]);
    }
    public function storeelectrotype(Request $request)
    {
        $electrotype = new Electrotype();
        $electrotype->name = $request->name;
        $electrotype->category_id = $request->category_id;
        $electrotype->save();

        return back();
    }

    public function electrotypesort($id)
    {
        $electros = Electro::where('type_id', '=', $id)->get();

        return response()->json(['electros' => $electros]);
    }

    public function electrotypebacksort()
    {
        $electros = Electro::all();

        return response()->json(['electros' => $electros]);
    }
}
