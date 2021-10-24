@extends('layout.main')
@section('container')
<table border="1">
    <thead>
        <tr>
        <th>ID_KB</th>
        <th>Kategori_bencana</th>
    </tr>
    </thead>
    <tbody>
     @foreach($p as $item)
    <tr>
        <td>{{ $item->ID_KB}}</td>
        <td>{{ $item->Kategori_bencana }}</td>
    </tr>
     @endforeach
    </tbody>
</table> 
@endsection