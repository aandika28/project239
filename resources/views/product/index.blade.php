  
  
@extends('template')

@section('content')


  
  <div class="container">
  @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
    @endif  
    <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
      <h2>Data <b>Product</b></h2>
     </div>

     <div class="col-sm-6">
      <a href="{{ route('product.add') }}" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add Product</span></a>
     
     </div>
                </div>
   </div>

        <table class="table table-hover" >
        <thead class="">
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Kategori</th>
            <th scope="col">Harga</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
            <tr>
            <td scope="row">{{$loop->iteration}}</td>
            <td scope="row">{{$product->name}}</td>
            <td scope="row">{{$product->description}}</td>
            <td scope="row">{{$product->category->name}}</td>
            <td scope="row">{{$product->price}}</td>
            <td scope="row"> 
                <form action="">
                  <a class="btn btn-warning " href="/product/{{$product->id}}/edit">Edit</a>

                  <a class="btn btn-danger" href="/product/{{$product->id}}/delete" onclick="return confirm('Yakin ingin mengapus data ini?')" >Delete</a>
                </form>
            </td>
            </tr>
        @endforeach
        </tbody>
        </table>


  </div>

      

@endsection