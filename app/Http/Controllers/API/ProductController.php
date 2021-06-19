<?php

namespace App\Http\Controllers\API;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class ProductController extends Controller
{
 
    public function index()
    {
        // cara 1
        //   return Product::all();

        //   cara 2
        $data = Product::all();
        return response()->json([
            'pesan' => 'data berhasil ditemukan',
            'data' => $data
        ],200);
       
   
    }

    public function store(Request $request)
    {   
               $validasi = Validator::make($request->all(), [
            "name"          => "required",
            "description"   => "required",
            "price"         => "required|integer",
            "category_id"   => "required|integer"
        ]);

        if ($validasi->passes()){
            $data = Product::create($request->all());
            return response()->json([
                'pesan' => 'Data Berhasil ditambahkan',
                'data' => $data
            ], 200);
        }
        return response()->json([
            'pesan' => 'Data Gagal disimpan',
            'data' => $validasi->errors()->all()
        ], 400);

    }



    //cara 1 pakai Product
     //public function show(Product $id)
     
    public function show( $id)
    {
        //cara 1
        //return $id;

        //cara 2
        $data = Product::where('id' , $id)->first();
        if (empty($data)){
            return response()->json([
            'pesan' => 'data tidak ditemukan',
            'data' => ''
        ],404);
        }
        return response()->json([
            'pesan' => 'data berhasil ditemukan',
            'data' => $data
        ],200);
    }

 
    public function edit($id)
    {
        //
    }

 
    public function update(Request $request, $id)
    {
        $data = Product::where('id', $id)->first();

        if (!empty($data)) {
            $validasi = Validator::make($request->all(), [
           "name"          => "required",
            "description"   => "required",
            "price"         => "required|integer",
            "category_id"   => "required|integer"
            ]);

            if ($validasi->passes()) {
                $data->update($request->all());
                return response()->json([
                    'pesan' => "Data Berhasil diupdate",
                    'data' => $data
                ]);
            } else {
                return response()->json([
                    'pesan' => 'Data Gagal di Update',
                    'data' => $validasi->errors()->all()
                ], 404);
            }
        }
        return response()->json([
                    'pesan' => "Data tidak ditemukan"]);
    }

    
    public function destroy($id)
    {
        
        $data = Product::where('id' , $id)->first();
        if (empty($data)){
            return response()->json([
            'pesan' => 'data tidak ditemukan',
            'data' => ''
        ],404);
        }

        $data->delete();
        return response()->json([
            'pesan' => 'data berhasil dihapus',
            'data' => $data
        ],200);
    }
}
