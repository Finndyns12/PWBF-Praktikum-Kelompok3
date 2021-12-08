{{-- @extends('layout.main')
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
@endsection --}}
@extends('dashboard\layouts\main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       
    <h1 class="h3">Daftar User Name</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
              <th>id_user</th>
                <th>Daftar User</th>
                <th>Email </th>
                </tr>
            </thead>
      
            <tbody>
        @foreach ($user as $p)
        <tr>
            <td>{{$p->id_user}}</td>
            <td>{{$p->name}}</td>
            <td>{{$p->email}}</td>
            <td>
                <a href="/user/edit/{{ $p->id_user}}">Edit</a>
                |
                <a href="/user/hapus/{{ $p->id_user}}">Hapus</a>
            </td>
        </tr>
        @endforeach
            </tbody>
        </table> 
    </div>


    @endsection