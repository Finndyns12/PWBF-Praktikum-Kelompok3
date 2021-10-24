@extends('layout.main')
@section('container')
<table border="1">
    <thead>
        <tr>
        <th>ID</th>
        <th>role</th>
    </tr>
    </thead>
    <tbody>
     @foreach($p as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->role }}</td>
    </tr>
     @endforeach
    </tbody>
</table> 
@endsection