@extends('template')

@section('content')

<div class="container">
  
<div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
      <h2>Edit Data <b>Ujian</b></h2>
     </div>
     </div>
     </div>

    <form action=" /product/{{$product->id}}/update " method="post">

        @csrf

        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{$product -> name}}">
        </div>
        

        <div class="form-group">
            <label>Description</label>
            <input type="text" name="description" class="form-control"value="{{$product -> description}}">
        </div>
        

        <div class="form-group">
            <label>Price</label>
            <input type="number" name="price" class="form-control"value="{{$product -> price}}">
        </div>
        

        <div class="form-group">
            <label>Id Category</label>
            <select  name="category_id" class="form-control" value="{{$product -> category_id}}">
                <option value="1">Laptop</option>
                <option value="2">Handphone</option>
                
            </select>    
        </div>
    

        <input type="submit"  value="Save Update" class="btn btn-success">
        <a class="btn btn-secondary" href="{{ route('product.index') }}">Cancel</a>

    </form>



  </div>


@endsection