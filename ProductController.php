<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        return view('CRUD.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('CRUD.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        try {
        $product = new Product();
        $product->product_name = $req->pname;
        $product->product_price = $req->pprice;
        $product->product_quantity = $req->pquantity;
        $product->save();

        return "Successful";
        } catch (\Exception $e) {
            return "Error: " . $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('CRUD.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('CRUD.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, Product $product)
    {
        try {
        $product =  Product::find($req->id);
        $product->product_name = $req->pname;
        $product->product_price = $req->pprice;
        $product->product_quantity = $req->pquantity;
        $product->save();

        return "Successful";
        } catch (\Exception $e) {
            return "Error: " . $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        Product::destroy($product->id);
        return redirect()->route('product.index');
    }
}
