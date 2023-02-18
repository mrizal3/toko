<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Product;
class ProductApiController extends Controller
{
    public function index()
    {
    	$products = Product::all();
    	return response()->json(['message' => "Data Success" , "data" => $products]);
    }

    public function show($id)
    {
    	$product = Product::find($id);
    	return response()->json(['message' => "Success Data", "Data" => $product]);
    }
    public function store(Request $req)
    {
    	$product = Product::create($req->all());
    	return response()->json(['message' => "Data Success", "Data Now" => $product]);
    }
    public function update(Request $req, $id)
    {
    	$product = Product::find($id);
    	$product->update($req->all());
    	return response()->json(['message' => "Data Success", "Update Data" => $product]);
    }
    public function destroy($id)
    {
    	$product = Product::find($id);
    	$product->delete();
    	return response()->json(['message' => "Delete Succes", "Has Been Data" => null]);
    }
}
