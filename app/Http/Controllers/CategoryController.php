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
use App\Product;
use App\Service;
use App\Servicetype;
use App\Tool;
use App\Tooltype;
use App\Type;
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
        $products = Product::all()->where('cat_id','=',$id);
        $types = Type::all()->where('parent_id','=',$id);
        return view('show.typeshow',['types' => $types, 'products' => $products, 'category' => $category]);

    }


    public function createlist()
    {
        $categories = Category::all();
        return view('create.createlist',['categories' => $categories]);
    }



}
