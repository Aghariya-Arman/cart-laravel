<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index1()
    {
        $products = Product::all();
        return view('show', compact('products'));
    }

    public function cart()
    {
        return view('cart');
    }
    public function addtocart(Product $product)
    {

        $cart = session()->get('cart');

        if (!$cart) {
            $cart = [
                $product->id => [
                    'name' => $product->name,
                    'quantity' => 1,
                    'price' => $product->price,
                    'image' => $product->image,
                ]
            ];
            session()->put('cart', $cart);
            return redirect()->route('cart');
        }

        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->route('cart');
        }

        $cart[$product->id] = [
            'name' => $product->name,
            'quantity' => 1,
            'price' => $product->price,
            'image' => $product->image,
        ];
        session()->put('cart', $cart);
        return redirect()->route('cart');
    }
    public function removeFromcart($id)
    {

        $cart = session()->get('cart');
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        return redirect()->back();
    }
}
