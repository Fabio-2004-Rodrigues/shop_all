<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::All();

        return view('index', ['product' => $product]);
    }

    public function create()
    {
        return view('events.create-product');
    }
}
