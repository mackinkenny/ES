<?php

namespace App\Http\Controllers;

use App\Auto;
use App\Autotype;
use App\Category;
use Illuminate\Http\Request;

class AutotypeController extends Controller
{
    //
    public function createautotype()
    {
        $categories = Category::all();
        return view('create.createautotype',['categories' => $categories]);
    }

    public function storeautotype(Request $request)
    {
        $autotype = new Autotype();
        $autotype->name = $request->name;
        $autotype->category_id = $request->category_id;
        $autotype->save();

        return back();
    }

    public function autotypesort($id)
    {
        $autos = Auto::where('type_id', '=', $id)->get();


        return response()->json(['autos' => $autos]);
    }

    public function autotypebacksort()
    {
        $autos = Auto::all();

        return response()->json(['autos' => $autos]);
    }
}
