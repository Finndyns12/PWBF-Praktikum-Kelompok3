<<<<<<< HEAD
{{-- @extends('layouts.main')
=======
<!-- @extends('layout.main')
>>>>>>> a20750d53f7f0cd4e236a6dfbd243cfef90aa501
@section('container')
<table border="1">
    <thead>
        <tr>
        <th>Id_prov</th>
        <th>Nama Provinsi</th>
    </tr>
    </thead>
    <tbody>
     @foreach($p as $item)
    <tr>
        <td>{{ $item->Id_prov}}</td>
        <td>{{ $item->nama_provinsi }}</td>
    </tr>
     @endforeach
    </tbody>
</table> 
<<<<<<< HEAD
@endsection --}}
@extends('dashboard\layouts\main')

@section('container')
<h1 class="h3">Daftar Nama Provinsi</h1>
<table class="table table-bordered">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
   
    <thead>
        <tr>
        <th>Id</th>
=======
@endsection -->

@extends('dashboard\layouts\main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h3">Daftar Nama Provinsi</h1>
<table class="table table-bordered">
    <thead>
        <tr>
        <th>Id </th>
>>>>>>> a20750d53f7f0cd4e236a6dfbd243cfef90aa501
        <th>Nama Provinsi</th>
        </tr>
    </thead>

    <tbody>
@foreach ($provinsis as $p)
<tr>
    <td>{{$p->id_prov}}</td>
    <td>{{$p->name}}</td>
    <td>
        <a href="/provinsi/edit/{{ $p->id_prov }}">Edit</a>
        |
        <a href="/provinsi/hapus/{{ $p->id_prov}}">Hapus</a>
    </td>
</tr>
    
@endforeach
    </tbody>
</table>
</div>

<<<<<<< HEAD
    @endsection
=======
    @endsection
>>>>>>> a20750d53f7f0cd4e236a6dfbd243cfef90aa501
