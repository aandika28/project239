<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //menampilkan data produk 
            //$products = Product::all();

           //menampilkan data yg sudah berelasi
           $products = Product::with('category')->get();

        // perintah cek data
         //dd($data);

        return view ('product.index', compact('products'));
    }


    public function add()
    {
         return view('product.add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        // cek data submit
        // dd($request->all());


        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
  
        Product::create($request->all());
   
        return redirect()->route('product.index')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        // return view('product.show',compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $product = Product::find($id);
        return view('product.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = product::find($id);
        $product -> update($request->all());
        return redirect()->route('product.index')
        ->with('success','Update data successfully.');
    }

    public function delete(Request $request, $id)
    {
        $product = product::find($id);
        $product -> delete($product);
        return redirect()->route('product.index')
        ->with('success','Delete data successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    
}
