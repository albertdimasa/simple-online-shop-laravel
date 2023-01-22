<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function welcome()
    {
        $product = Product::all();
        $category = Category::all();
        $cart = Cart::count();
        return view('pages.welcome', compact('product', 'category', 'cart'));
    }

    public function about()
    {
        $cart = Cart::count();
        return view('pages.about', compact('cart'));
    }

    public function contact()
    {
        $cart = Cart::count();
        return view('pages.contact', compact('cart'));
    }
}
