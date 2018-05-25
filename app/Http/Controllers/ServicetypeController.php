<?php

namespace App\Http\Controllers;

use App\Category;
use App\Service;
use App\Servicetype;
use Illuminate\Http\Request;

class ServicetypeController extends Controller
{
    //
    public function createservicetype()
    {
        $categories = Category::all();
        return view('create.createservicetype',['categories' => $categories]);
    }
    public function storeservicetype(Request $request)
    {
        $servicetype = new Servicetype();
        $servicetype->name = $request->name;
        $servicetype->category_id = $request->category_id;
        $servicetype->save();

        return back();
    }
    public function servicetypesort($id)
    {
        $services = Service::where('type_id', '=', $id)->get();

        return response()->json(['services' => $services]);
    }

    public function servicetypebacksort()
    {
        $services = Service::all();

        return response()->json(['services' => $services]);
    }
}
