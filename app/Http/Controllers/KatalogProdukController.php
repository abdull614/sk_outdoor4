<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class KatalogProdukController extends Controller
{
    public function katalogProduk ()
    {
        $produk = Produk::with('Kategori')->get();

        $produkGrouped = $produk->groupBy(function($item) {
            return $item->Kategori->nama_kategori;
        });

        return view('katalogProduk', [
            'produk' => $produkGrouped
        ]);
    }
}
