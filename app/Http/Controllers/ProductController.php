<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function produk()
  {
    $product = Product::latest()->paginate(5)->appends(request()->except('page'));
    return view('admin.produk.index', compact('product'));
  }

  public function produk_form()
  {
    $product = Product::latest()->paginate(5)->appends(request()->except('page'));
    return view('admin.produk.insert', compact('product'));
  }

  public function produk_insert(Request $request)
  {
    $validatedData = $request->validate
    ([
      'nama' => 'required|min:5|max:55',
      'harga_satuan' => 'required',
      'stock' => 'required',
    ]);

    $nama = $request->nama;
    $harga_satuan = $request->harga_satuan;
    $stock = $request->stock;

    Product::create
    ([
      'nama' => $request->nama,
      'harga_satuan' => $harga_satuan,
      'stock' => $stock,
    ]);

    return back()->with('success', 'Sukses!');
  }

  public function produk_edit($id)
  {
    $product = Product::find($id);
    return view('admin.produk.edit', compact('product'));
  }

  public function update(Request $request, $id)
  {
    //dd(1);
    $validatedData = $request->validate
    ([
      'nama' => 'required|min:5|max:55',
      'harga_satuan' => 'required',
      'stock' => 'required',
		]);

		$product = Product::findOrFail($id);
    $nama = $request->nama;
		$harga_satuan = $request->harga_satuan;
    $stock = $request->stock;

		$product->update([
			'nama' => $request->nama,
			'harga_satuan' => $harga_satuan,
      'stock' => $request->stock,
		]);

		return redirect()->route('produk.post')->with('success', 'edited!');
  }

  public function produk_delete($id)
  {
    $delete = Product::findOrFail($id);
    $delete->delete();

    return redirect()->back()->with(['success.down' => 'Feed: '.$delete->nama.' Deleted!']);
  }

}
