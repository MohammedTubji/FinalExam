<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }
    public function create()
    {
        return view('product.index');
    }
    public function store(Request $request)
    {
        $request -> validate([
            'title'=>'required',
            'description'=>'required',
            'price'=>'required',
        ]);
        $product =new Product();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();

        $products = Product::all();
        return view('product.index', compact('products'));

    }
    public function edit(Product $product)
    {
       
        $products = Product::all();
        return view('product.index',compact('product','products'));
    }
   public function update(Request $request , Product $product)
   {
        $request -> validate([
            'title'=>'required',
            'description'=>'required',
            'price'=>'required',
        ]);

        

        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;

        $product ->save();

        return redirect('/product');
   }
   public function destroy(Product $product){
        
    
    $product->delete();
   return redirect('/product');
   }
}
