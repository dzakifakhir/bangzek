@extends('layouts.app')

@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  .card img {
    height: 100px;
    width: 100%;
    object-fit: cover;
    position: relative;
    overflow: hidden;
  }
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <div class="container">
    @if(session('success'))
        <div class="alert alert-primary">
          {!! session('success') !!}
        </div>
    @endif
    <div class="card-group">
    <!-- loop -->
    @foreach($product as $p)
    <div class="card">
      <img src="/images/produk/test.jpg" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">{{ $p->nama }}</h5>
        <p class="card-text"><i class="fa fa-dollar"></i> {{ $p->harga_satuan }}</p>
        <p class="card-text"><i class="fa fa-history"></i> {{ $p->stock }}</p>
        <p class="card-text"><small class="text-muted"></small></p>
      </div>
      <div class="card-footer">
        <a href="{{ route('buy', $p->id) }}"><button type="button" class="btn btn-primary">Beli</button></a>
      </div>
    </div>
    <p></p>
    <!-- End -->
    @endforeach
    <div style="display:flex;justify-content:center;margin-top:25px;">

    </div>
  </div>
  @endsection
