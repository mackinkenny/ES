<?php

namespace App\Http\Controllers;

use App\Auto;
use App\Autotype;
use App\Build;
use App\Buildmater;
use App\Category;
use App\Electro;
use App\Service;
use App\Tool;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();
        $autotypes = Autotype::all();
        $autos = Auto::all();
        $services = Service::all();
        $builds = Build::all();
        $materials = Buildmater::all();
        $tools = Tool::all();
        $electros = Electro::all();
//
//        $objects = ($autos + $services + $builds + $materials + $tools + $electros);

        return view('pages.main',
            ['autotypes' => $autotypes,
                'categories' => $categories,
                'autos' => $autos,
                'services' => $services,
                'builds' => $builds,
                'materials' => $materials,
                'tools' => $tools,
                'electros' => $electros]);
    }
}
