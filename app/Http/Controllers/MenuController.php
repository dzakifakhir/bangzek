<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class MenuController extends Controller
{
  public function index()
  {
    $product = Product::latest()->paginate(5)->appends(request()->except('page'));
    return view('index', compact('product'));
  }
}
