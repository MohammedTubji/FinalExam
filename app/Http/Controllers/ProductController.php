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
            'producttitle'=>'required',
            'productdescription'=>'required',
            'productprice'=>'required',
        ]);
        $product =new Prouct();
        $product->title = $request->producttitle;
        $product->description = $request->productdescription;
        $product->price = $request->productprice;
        $product ->save();

        return redirect()->back();

    }
    public function edit(Product $product)
    {
       
        return view('product.index',compact('product'));
    }
   public function update(Request $request , Product $product)
   {
        $request -> validate([
            'producttitle'=>'required',
            'productdescription'=>'required',
            'productprice'=>'required',
        ]);

        

        $product->title = $request->producttitle;
        $product->description = $request->productdescription;
        $product->price = $request->productprice;

        $product ->save();

        return redirect('/product');
   }
   public function destroy(Product $product){
        
    
    $product->delete();
   return redirect('/product');
   }
}
