{{-- @extends('layout.main')
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
        <td>{{ $item->id_role}}</td>
        <td>{{ $item->name}}</td>
    </tr>
     @endforeach
    </tbody>
</table> 
@endsection --}}

@extends('dashboard\layouts\main')

@section('container')
<h1 class="h3">Daftar Role</h1>
<table class="table table-bordered">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

    <div class="card">
        <div class="card-header">
            <div class="pull-left">
                <strong>Data Role</strong>
            </div>
        </div>
    </div>
    
    <div class="pull-right">
        <a href="{{ url('role/tambah') }}" class="btn btn-success btn-sm">
            <i class="fa fa-plus"></i>tambah
        </a>
    </div>

    <div class="card-body table-responsive">
        <table class="table table-bordered">
            <thead>
                <th>id</th>
                <th>Role</th>
            </thead>
      
            <tbody>
        @foreach ($role as $p)
        <tr>
            <td>{{$p->id_role}}</td>
            <td>{{$p->name}}</td>
        </tr>
        @endforeach
            </tbody>
        </table> 
    </div>


    @endsection

    