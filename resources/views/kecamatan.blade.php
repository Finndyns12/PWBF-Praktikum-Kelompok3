@extends('layout.main')
@section('container')
<table border="1">
    <thead>
        <tr>
        <th>id_kota</th>
        <th>id_kecamatan</th>
        <th>nama_kecamatan</th>
    </tr>
    </thead>
    <tbody>
     @foreach($p as $item)
    <tr>
        <td>{{ $item->id_kota }}</td>
        <td>{{ $item->id_kecamatan }}</td>
        <td>{{ $item->nama_kecamatan }}</td>
    </tr>
     @endforeach
    </tbody>
</table> 
@endsection
