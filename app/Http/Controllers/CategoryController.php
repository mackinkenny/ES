<?php

namespace App\Http\Controllers;

use App\Auto;
use App\Autotype;
use App\Build;
use App\Buildmater;
use App\Buildmatertype;
use App\Buildtype;
use App\Category;
use App\Catphoto;
use App\Electro;
use App\Electrotype;
use App\Other;
use App\Othertype;
use App\Service;
use App\Servicetype;
use App\Tool;
use App\Tooltype;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{

    public function createcategory()
{
return view('create.createcategory');
}

public function storecategory(Request $request)
{
    $category = new Category();
    $category->name = $request->name;
    $category->text = $request->text;

    if ($request->hasFile('img_path')) {
        $avatar = $request->file('img_path');
        $filename = time() . '.' . $avatar->getClientOriginalExtension();
        Image::make($avatar)->save('image/category/' . $filename);

        $category->img_path = $filename;
        $category->save();
    }
    $category->save();

    return back();
}

    public function allshow($id)
    {
        $category = Category::find($id);
        switch ($category->name){
            case 'Услуги':
                $services = Service::all();
                $servicetypes = Servicetype::all()->where('category_id','=',$id);
                return view('show.serviceshow',['servicetypes' => $servicetypes, 'category' => $category, 'services' => $services]); break;

            case 'Техника':
                $autos = Auto::all();
                $autotypes = Autotype::all()->where('category_id','=',$id);
                return view('show.autoshow',['autotypes' => $autotypes, 'category' => $category, 'autos' => $autos]); break;

            case 'Недвижимость':
                $builds = Build::all();
                $buildtypes = Buildtype::all()->where('category_id','=',$id);
                return view('show.houseshow',['buildtypes' => $buildtypes, 'category' => $category, 'builds' => $builds]); break;

            case 'Строительные материалы':
                $materials = Buildmater::all();
                $materialtypes = Buildmatertype::all()->where('category_id','=',$id);
                return view('show.materialshow',['materialtypes' => $materialtypes, 'category' => $category, 'materials' => $materials]); break;

            case 'Строительные инструменты':
                $tools = Tool::all();
                $tooltypes = Tooltype::all()->where('category_id','=',$id);
                return view('show.toolshow',['tooltypes' => $tooltypes, 'category' => $category, 'tools' => $tools]); break;

            case 'Электроприборы':
                $electros = Electro::all();
                $electrotypes = Electrotype::all()->where('category_id','=',$id);
                return view('show.electroshow',['electrotypes' => $electrotypes, 'category' => $category, 'electros' => $electros]); break;

            case 'Другое':
                $others = Other::all();
                $othertypes = Othertype::all()->where('category_id','=',$id);
                return view('show.othershow',['othertypes' => $othertypes, 'category' => $category, 'others' => $others]); break;

            default: return back();
        }
    }
    public function createlist()
    {
        return view('create.createlist');
    }

}
