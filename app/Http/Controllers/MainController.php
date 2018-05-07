<?php

namespace App\Http\Controllers;

use App\Autotype;
use App\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();
        $autotypes = Autotype::all();

        return view('pages.main',['autotypes' => $autotypes,'categories' => $categories]);
    }
}
