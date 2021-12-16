@extends('layouts.app')

@section('content')

<div class="container">
  <h2>Beli {{ $product->nama }}</h2>
  <form action="{{ route('buy.insert') }}" method="post">
    @csrf
    @method('POST')
    <input type="hidden" id="custId" name="id_produk" value="{{ $product->id }}">
    <div class="form-group">
      <label for="exampleInputEmail1">Nama Produk</label>
      <input type="text" name="nama_produk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $product->nama }}">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Tujuan</label>
      <input type="text" name="tujuan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Jumlah</label>
      <input type="number" name="jumlah" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Subtotal</label>
      <input type="number" name="subtotal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $product->harga_satuan }}" readonly>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection
