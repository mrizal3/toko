<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductGaleri;
use App\Http\Requests\ProductRequest;
use illuminate\support\Str;
class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	$products = Product::all();
    	return view('product.product',compact(['products']));
    }
    public function create()
    {
    	return view('product.create');
    }
    public function store(ProductRequest $request)
    {
       $data = $request->all();
       $data['slug'] = Str::slug($request->name);

       Product::create($data);
       return redirect('product');
    }
    public function show($id)
    {
        $products = Product::find($id);
        return view('product.show',compact(['products']));
    }
    public function edit($id)
    {
    	$products = Product::find($id);
    	return view('product.edit', compact(['products']));
    }
    public function update(Request $request, $id)
    {
    	$products = Product::find($id);
    	$products->update($request->all());
    	return redirect('product');
    }
    public function destroy($id)
    {
    	$products = Product::find($id);
    	$products->delete();
    	return redirect('product');

        ProductGaleri::where('product_id', $id)->delete();
    }

    public function galeri(Request $request, $id)
    {
       $product = Product::findOrFail($id);
       $data = ProductGaleri::with('product')->where('product_id', $id)->get();

       return view('product.galeri', compact(['product','data']));
    }
}
