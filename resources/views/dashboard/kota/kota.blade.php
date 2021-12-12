{{-- @extends('layouts.main')
@section('container')
<table border="1">
    <thead>
        <tr>
        <th>ID</th>
        <th>id_kota</th>
        <th>nama kota</th>
    </tr>
    </thead>
    <tbody>
     @foreach($p as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->id_kota }}</td>
        <td>{{ $item->nama_kota }}</td>
    </tr>
     @endforeach
    </tbody>
</table> 
@endsection --}}

@extends('dashboard\layouts\main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h3">Daftar Nama Kota</h1>
</div>

    @endsection
