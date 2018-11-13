<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', ['products' => $products]);
        // return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'product_name'=> 'required|string|min:1|max:50',
            'product_brand'=> 'required|string',
            'product_qty'=> 'required|numeric',
            'product_unit'=>'required|string',
            'product_cost'=>'required|numeric'
        ]);

        $product = new Product;
        $product->product_name = $request->product_name;
        $product->product_brand = $request->product_brand;
        $product->product_model = $request->product_model;
        $product->product_qty = $request->product_qty;
        $product->product_unit = $request->product_unit;
        $product->product_cost = $request->product_cost;
        $product->product_size = $request->product_size;
        $product->product_color = $request->product_color;
        $product->product_image = $request->product_image;
        $product->save();
        return redirect()->route('products.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->product_name = $request->product_name;
        $product->product_brand = $request->product_brand;
        $product->product_model = $request->product_model;
        $product->product_qty = $request->product_qty;
        $product->product_unit = $request->product_unit;
        $product->product_cost = $request->product_cost;
        $product->product_size = $request->product_size;
        $product->product_color = $request->product_color;
        $product->product_image = $request->product_image;
        $product->save();
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index');
    }

    public function display()
    {
        return view('products.view');
    }
}
