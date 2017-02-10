<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function getIndex(){
    	$products = Product::all();
    	return view('products.index',['produits'=>$products]);
    }
    public function getShow($id){
    	$product= Product::find($id);
    	return view('products.show', ['product'=>$product]);
    }
    public function postSell($id){
    	$product = Product::find($id);
    	$product->stock--;
    	$product->save();
    	return back();
    }
    public function postRestock($id){
    	$product = Product::find($id);
    	$product->stock++;
    	$product->save();
    	return back();
    }

    public function showForm(){
        return view('products.form');
    }
    public function store (Request $request){
        $this->validate($request, [
            'name'=>'required',
            'price'=>'required',
            'description'=>'required',
            'stock'=>'required',          
            ]);
        Product::create($request->all());
        return redirect()->action('ProductController@getIndex');
    }
    Public function deleteProduct($id){
        Product::destroy($id);
        return redirect()->action('ProductController@getIndex');
    }
    Public function getEdit($id){
        $product = Product::find($id);
        return view('products.edit', ['produits'=>$product]);

    }
    Public function saveEdit(Request $request){
        $editedProduct=Product::find($request->id);
        $editedProduct->name = $request->name;
        $editedProduct->price = $request->price;
        $editedProduct->description = $request->description;
        $editedProduct->stock = $request->stock;
        $editedProduct->save();
        return redirect('/products/show/'.$editedProduct->id);
    }

}
