@extends('layout.main')
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
@endsection
