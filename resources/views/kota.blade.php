@extends('layout.main')
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
@endsection
