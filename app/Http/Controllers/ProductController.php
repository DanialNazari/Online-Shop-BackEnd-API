<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        return Product::all();
    }
    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'price' => 'required'
        ]);

        return Product::create($request->all());
    }

    public function show($id){
        return Product::find($id);
    }


    public function update(Request $request,$id){
        $product = Product::find($id);
        $product->update($request->all());
        return $product;
    }
    public function destroy($id){

        return Product::destroy($id);

    }
}
