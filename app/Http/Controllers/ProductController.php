<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ProductController extends Controller
{
    public function index()
    {
      $products = Product::all();
      return view('products.index', compact('products'));
    }

    public function create()
    {
      return view('products.create');
    }
    public function show(Product $product)
    {
    return view('products.show', compact('product'));
    }
    public function store()
    {
      $product = new Product;

      $product->title = request('title');
      $product->description = request('description');
      $product->price = request('price');

      $product->save();

      return redirect()->home();
    }
public function edit(Product $product)
{
   return view('products.edit', compact('product'));
}

public function update(Request $request, Product $product)
{
    $product->title = $request->title;
    $product->description = $request->description;
    $product->price = $request->price;

    $product->update();


    return redirect()->home()->with('success', 'Se ha actualizado el producto');
}
public function delete(Product $product)
{
  $product->delete();

  return redirect()->home()->with('success', 'Se ha eliminado el producto');
}
}
