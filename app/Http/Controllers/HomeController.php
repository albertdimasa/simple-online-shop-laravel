<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Pesanan;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->role == 0) {
            // Return to user panel
            return view('user.home');
        }

        return view('admin.home');
    }

    public function welcome()
    {
        $product = Product::limit(8)->get();
        $category = Category::all();
        return view('pages.welcome', compact('product', 'category'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function shop()
    {
        $product    = Product::all();
        $count      = Product::count();
        $category   = Category::all();
        return view('pages.shop', compact('product', 'count', 'category'));
    }
}
