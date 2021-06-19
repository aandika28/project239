<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                //menampilkan semua data
                $categories = Category::all();

                // perintah cek data
                 //dd($data);
        
                return view ('category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
         return view('category.add');
    }

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
            
        ]);
  
        category::create($request->all());
   
        return redirect()->route('category.index')
                        ->with('success','category created successfully.');
    }

    public function edit( $id)
    {
        $category = category::find($id);
        return view('category.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = category::find($id);
        $category -> update($request->all());
        return redirect()->route('category.index')
        ->with('success','Update data successfully.');
    }

    public function delete(Request $request, $id)
    {
        $category = category::find($id);
        $category -> delete($category);
        return redirect()->route('category.index')
        ->with('success','Delete data successfully.');
    }

}
