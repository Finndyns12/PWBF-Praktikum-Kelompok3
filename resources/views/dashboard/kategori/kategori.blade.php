{{-- @extends('layouts.main')
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
@endsection --}}

@extends('dashboard\layouts\main')

@section('container')
<h1 class="h3">Kategori Bencana</h1>
<table class="table table-bordered">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
   
    <thead>
        <tr>
        <th>Id</th>
        <th>Kategori</th>
        </tr>
    </thead>

    <tbody>
@foreach ($kategori as $p)
<tr>
    <td>{{$p->id}}</td>
    <td>{{$p->name}}</td>
    <td>
        <a href="/kategori/edit/{{ $p->id }}">Edit</a>
        |
        <a href="/kategori/hapus/{{ $p->id}}">Hapus</a>
    </td>
</tr>
    
@endforeach
    </tbody>
</table>
</div>

    @endsection