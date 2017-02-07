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
    
}
