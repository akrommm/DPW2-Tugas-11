<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class ClientController extends Controller
{

  function filter()
  {
    $nama = request('nama');
    $data['nama'] = $nama;
    $data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();

    return view('frontview.shop', $data);
  }

  function filter2()
  {
    $data['harga_min'] = $harga_min = request('harga_min');
    $data['harga_max'] = $harga_max = request('harga_max');
    $data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->get();

    return view('frontview.shop', $data);
  }

  function showHome()
  {
    $data['list_produk'] = Produk::all();
    return view('frontview.home', $data);
  }

  function showCart()
  {
    return view('frontview.cart');
  }

  function showShop()
  {
    $data['list_produk'] = Produk::all();

    $data['list_produk'] = Produk::paginate(8);

    return view('frontview.shop', $data);
  }

  function showProduct(Produk $produk)
  {
    $data['produk'] = $produk;
    return view('frontview.product', $data);
  }

  function sortBy()
  {
    $list_produk = Produk::all();
    $list_produk = $list_produk->sortBy('harga');
    $data['list'] = $list_produk;

    return view('frontview.shop', $data);
  }
}
