<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class HomeController extends Controller
{


    function showBeranda()
    {
        return view('admin.beranda');
    }

    function showProduk()
    {
        return view('admin.produk');
    }

    function showKategori()
    {
        return view('admin.kategori');
    }

    function showPromo()
    {
        return view('admin.promo');
    }

    function showPelanggan()
    {
        return view('admin.pelanggan');
    }

    function showSupplier()
    {
        return view('admin.supplier');
    }

    public function testCollection()
    {
        $list_bike = ['Honda', 'Yamaha', 'Kawasaki', 'suzuki', 'vespa', 'BMW', 'KTM'];
        $list_bike = collect($list_bike);
        $list_produk = Produk::all();

        // Sorting
        // Sort By Harga Terendah
        // dd($list_produk->sortBy('harga'));
        // Sort By Harga Tertinggi
        // dd($list_produk->sortByDesc('harga'));

        // Map
        // foreach ($list_produk as $item) {
        //     echo "$item->nama<br>";
        // }
        // $list_produk->each(function ($item) {
        //     echo "$item->nama<br>";
        // });

        // filter
        // $filtered = $list_produk->filter(function ($item) {
        //     return $item->harga > 200000;
        // });

        // dd($filtered);

        // $sum = $list_produk->avg('harga');
        // dd($sum);

        $data['list'] = $list_produk;
        return view('test-collection', $data);
    }
}
