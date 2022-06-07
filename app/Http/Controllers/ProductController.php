<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        // dd($products);
        return view('shop.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::FindOrFail($id);
        // dd($product);
        return view('shop.show', compact('product'));
    }
}
