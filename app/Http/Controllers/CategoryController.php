<?php

namespace App\Http\Controllers;

use App\Autotype;
use App\Category;
use App\Catphoto;
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
        $autotypes = Autotype::all()->where('category_id','=',$id);
        return view('show.category',['autotypes' => $autotypes, 'category' => $category]);
    }

}
