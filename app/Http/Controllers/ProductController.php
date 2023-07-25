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

    public function store(Request $request)
    {

        $product = new Product();

        $product = new Product();
        $product->name_product = $request->name_product;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $product->category = $request->category;
        $product->value = $request->value;

        if ($request->hasFile('image_product') && $request->file('image_product')->isValid()) {

            $requestImage = $request->image_product;

            $extension = $requestImage->extension();

            $imageName = sha1($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/products'), $imageName);

            $product->image = $imageName;
        }

        $product->save();

        return redirect('/')->with('msg', 'Produto cadastrado com sucesso!');
    }
}
