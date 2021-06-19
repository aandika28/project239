<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Midsemester;
class UtsController extends Controller
{
    
  public function index()
    {
               //menampilkan semua data
             $midsemesters = midsemester::all();

               // perintah cek data
                // dd($data);
       
               return view ('midsemester.index', compact('midsemesters'));
    }


    public function add()
    {
        return view('midsemester.add');
    }


    public function save(Request $request)
    {
        $request->validate([
            'kolom_nim' => 'required',
            'kolom_nama' => 'required',
            'kolom_umur' => 'required',
            'kolom_alamat' => 'required',
        ]);
  
        midsemester::create($request->all());
   
        return redirect()->route('midsemester.index')
                        ->with('success',' create data successfully.');
    }


    public function edit($id_239)
    {
        $midsemester = midsemester::find($id_239);
        
        // cek data
        //dd($midsemester);

        return view('midsemester.edit', ['midsemester' => $midsemester]);
    }


    public function update(Request $request, $id_239)
    {
        $midsemester = midsemester::find($id_239);
        $midsemester -> update($request->all());
        return redirect()->route('midsemester.index')
        ->with('success','Update data successfully.');
    }

    public function delete(Request $request, $id_239)
    {
        $midsemester = midsemester::find($id_239);
        $midsemester -> delete($midsemester);
        return redirect()->route('midsemester.index')
        ->with('success','Delete data successfully.');
    }

}

