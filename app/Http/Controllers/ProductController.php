<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Productphoto;
use App\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    //
    public function createproduct($id)
    {
        $category = Category::find($id);
        $types = Type::all()->where('parent_id','=',$id);
        return view('create.product',['types' => $types, 'category' => $category]);
    }
    
    public function storeproduct(Request $request)
    {
        $type = Type::find($request->parent_id);

        $product = new Product();
        $product->name = $request->name;
        $product->info = $request->info;
        $product->price = $request->price;
        $product->address = $request->address;
        $product->contact = $request->contact;
        $product->parent_id = $type->id;
        $product->parent_name = $type->name;
        $product->cat_id = $type->parent_id;
        $product->save();
        if(!$request->img_paths == null) {
            foreach ($request->img_paths as $index => $photo) {
                $filename = time() + random_int(random_int(-10000, 0), random_int(1000, 999999)) . '.' . $photo->getClientOriginalExtension();
                Image::make($photo)->save('image/photo/' . $filename);
                $photonew = new Productphoto();
                $photonew->img_path = $filename;
                $photonew->parent_id = $product->id;
                $photonew->save();
                if ($index == 0) {
                    $product->img_path = $filename;
                    $product->save();
                }
            }
        }

        if(Auth::user()->status == 1)
        {
            $product->our = 1;
        }
        $product->user_id = Auth::user()->id;
        $product->save();


        return back();
    }

    public function showproduct($id)
    {
        $object = Product::find($id);
        $photos = Productphoto::all()->where('parent_id','=',$id);
        $count = count($photos);

        return view('object.object',['object' => $object, 'photos' => $photos,'count' => $count]);
    }
}
