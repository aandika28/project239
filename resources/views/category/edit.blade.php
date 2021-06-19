@extends('template')

@section('content')

<div class="container">
  
<div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
      <h2>Edit Data <b>Category</b></h2>
     </div>
     </div>
     </div>

    <form action=" /category/{{$category->id}}/update " method="post">

        @csrf

        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{$category -> name}}">
        </div>
        

        <input type="submit"  value="Save Update" class="btn btn-warning">
        <a class="btn btn-secondary" href="{{ route('category.index') }}">Cancel</a>

    </form>



  </div>


@endsection