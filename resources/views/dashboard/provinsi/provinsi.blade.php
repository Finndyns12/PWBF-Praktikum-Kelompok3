<!-- @extends('layout.main')
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
@endsection -->

@extends('dashboard\layouts\main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h3">Daftar Nama Provinsi</h1>
</div>

    @endsection
