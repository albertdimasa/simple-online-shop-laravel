<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\PesananDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PesananController extends Controller
{
    public function index()
    {
        $data = Pesanan::all();
        $detail = PesananDetail::all();

        if (auth()->user()->role == 1) {
            return view('admin.pesanan.index', compact('data', 'detail'));
        }

        $data = $data->where('user_id', Auth::user()->id);
        return view('user.pesanan.index', compact('data', 'detail'));
    }

    public function store(Request $request)
    {
        // Get Pesanan yang masih dalam cart dan sesuai user yang login saat ini
        $data = Pesanan::where([
            ['is_cart', 1],
            ['user_id', auth()->user()->id]
        ])->first();

        // Mendapatkan produk yang dipilih
        $product_by_id = Product::find($request->item_id);

        if ($data) {

            // Jika ada maka: 
            // 1. Tambahkan pesanan detail
            // 2. Jumlahkan total

            PesananDetail::create([
                'pesanan_id'    => $data->id,
                'product_id'    => $request->item_id,
                'product_name'  => $product_by_id->title,
                'harga'         => $product_by_id->price
            ]);

            $total = PesananDetail::select('harga')->where('pesanan_id', $data->id)->sum('harga');
            $data->update([
                'total' => $total
            ]);
        } else {

            // Jika tidak ada maka buat pesanan dan detail pesanan baru
            $new = Pesanan::create([
                'user_id' => auth()->user()->id,
            ]);

            PesananDetail::create([
                'pesanan_id'    => $new->id,
                'product_id'    => $request->item_id,
                'product_name'  => $product_by_id->title,
                'harga'         => $product_by_id->price
            ]);

            $total = PesananDetail::select('harga')->where('pesanan_id', $new->id)->sum('harga');
            $new->update([
                'total' => $total
            ]);
        }

        return redirect()->back()->with('success', 'Berhasil ditambahkan ke keranjang');
    }

    public function show(Pesanan $pesanan)
    {
        //
    }

    public function update(Request $request, Pesanan $pesanan)
    {
        //
    }

    public function destroy(Pesanan $pesanan)
    {
        //
    }
}
