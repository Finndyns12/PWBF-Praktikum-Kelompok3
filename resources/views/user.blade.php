@extends('layout.main')
@section('container')
<table border="1">
    <thead>
        <tr>
        <th>Id_user</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Tgl_lahir</th>
        <th>Password</th>
    </tr>
    </thead>
    <tbody>
     @foreach($p as $item)
    <tr>
        <td>{{ $item->Id_user }}</td>
        <td>{{ $item->Nama }}</td>
        <td>{{ $item->Email}}</td>
        <td>{{ $item->Tgl_lahir }}</td>
        <td>{{ $item->Password }}</td>
    </tr>
     @endforeach
    </tbody>
</table> 
@endsection