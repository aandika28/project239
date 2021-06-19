@extends('template')

@section('content')

<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Add Data <b>midsemester</b></h2>
                </div>
            </div>
        </div>

        <form action="{{ route('midsemester.save') }}" method="post">

            @csrf

            <div class="form-group">
                <label>Nim</label>
                <input type="text" name="kolom_nim" class="form-control">
            </div>


            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="kolom_nama" class="form-control">
            </div>



            <div class="form-group">
                <label>Umur</label>
                <input type="number" name="kolom_umur" class="form-control">
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="kolom_alamat" class="form-control">
            </div>

            <input type="submit" name="submit" value="Save Data" class="btn btn-success">
            <a class="btn btn-secondary" href="{{ route('midsemester.index') }}">Cancel</a>

        </form>



    </div>


    @endsection
