<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (Auth::user()->role == 1) {
                return $next($request);
            } else {
                abort(404);
            }
        });
    }

    public function index()
    {
        $category = Category::all();
        $product = Product::latest()->get();
        return view('admin.product.index', compact('product', 'category'));
    }

    public function store(Request $request)
    {
        $data = $request->except('_token', 'method');
        Product::create($data);
        return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan');
    }

    public function update(Request $request, Product $produk)
    {
        $data = $request->except('_token', 'method');
        $produk->update($data);
        return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan');
    }

    public function destroy(Product $produk)
    {
        $produk->delete();
        return redirect()->route('produk.index')->with('delete', 'Produk berhasil dihapus');
    }
}
