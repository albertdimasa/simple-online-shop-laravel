<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
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
        return view('admin.category.index', compact('category'));
    }

    public function store(Request $request)
    {
        $data = $request->except('_token', 'method');
        Category::create($data);
        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil ditambahkan');
    }

    public function update(Request $request, Category $kategori)
    {
        $data = $request->except('_token', 'method');
        $kategori->update($data);
        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil ditambahkan');
    }

    public function destroy(Category $kategori)
    {
        $kategori->delete();
        return redirect()->route('kategori.index')->with('delete', 'Kategori berhasil dihapus');
    }
}
