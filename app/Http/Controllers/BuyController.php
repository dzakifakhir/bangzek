<?php

namespace App\Http\Controllers;

use App\Product;
use App\Detail_transactions;
use App\Transactions;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class BuyController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function beli(Product $product)
  {
    //$product = Product::latest()->paginate(5)->appends(request()->except('page'));
    return view('beli', compact('product'));
  }

  public function beli_insert(Request $request, Transactions $Transactions)
  {

    $id = Auth::user()->id;
    //dd($id);
    $random = Str::random(40);
    $tujuan = $request->tujuan;
    $nama_produk = $request->nama_produk;
    $jumlah = $request->jumlah;
    $subtotal = $request->subtotal;
    $id_produk = $request->get('id_produk');


    Transactions::create([
  			'id_user' => $id,
  			'transaksi' => $random,
        'tujuan' => $tujuan,
        'no_transaksi' => $random,
        'nama_produk' => $nama_produk,
        'jumlah' => $jumlah,
        'subtotal' => $subtotal,
        'status' => 'ok',
  		]);

    return redirect('/')->with(['success' => 'Berhasil '. $nama_produk .' Terbeli!']);
  }

}
