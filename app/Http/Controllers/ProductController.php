<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\complaint;
use App\Models\Product;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class ProductController extends Controller
{
    public function list()
    {
        $category = Category::orderBy('id')->get();
        return view ('product_category.list')->with('categories', $category);
    }
    public function edit($id){
        $category = Category::where('id', $id)->first();
        return view('update')->with('category',$category);
    }
    public function create()
    {
        return view('product_category.create');
    }
    public function keep(Request $request)
    {

        $request->validate([
            'name'=>'required',

        ]);
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect('/category/list');

    }
    public function update(Request $request){
        $category = Category::where('id',$request->id)->first();
        $category->name = $request->name;
        $category->save();
        return redirect('/category/list');
    }
    public function productStore(Request $request)
    {

        $request->validate([
            'name'=>'required',
            'image'=>'required',
        ]);
        $product = new Product();
        $product->name = $request->name;
        $img = Image::make($request->file('image'));
        $filename = $request->file('image')->getClientOriginalName();
        $img->save('storage/image/' . $filename);
        $product->image = $filename;
        $product->save();

        return redirect('/list');

    }

}
