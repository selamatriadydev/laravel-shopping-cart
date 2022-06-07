<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart()
    {
        // dd( session('cartItems') );
        return view('cart.index');
    }

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
        $cartItems = session()->get('cartItems', []);
        // cek ready cart 
        if(isset($cartItems[$id])){
            $cartItems[$id]['quanlity']++;
        }else{
            $cartItems[$id] =[
                "image_path" => $product->image_path,
                "name" => $product->name,
                "brand" => $product->brand,
                "details" => $product->details,
                "price" => $product->price,
                "quanlity" => 1,
            ];
        }

        session()->put('cartItems', $cartItems);
        return redirect()->back()->with('success', 'Product add to cart!');
    }

    public function deleteFromCart(Request $request)
    {
        if($request->id){
            $cartItems = session()->get('cartItems');
            if(isset($cartItems[$request->id])){
                unset($cartItems[$request->id]);
                session()->put('cartItems', $cartItems);
            }
            return redirect()->back()->with('success', 'Product delete from cart successfully'); 
        }
    }
}
