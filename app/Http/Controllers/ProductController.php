<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {

        return view("products.index", [
            'products' => Product::all(),
        ]);
    }

    public function create() {
        return view('products.create'); 
    }

    public function store(Request $request){
        
        $product = new Product;
        
        $product->name = $request->name;
        $product->description = $request->description;
        $product->size = $request->size;

        $product->save();

        return redirect()->route('products.index');
    }
}
