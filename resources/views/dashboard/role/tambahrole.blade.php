{{-- @section('container')
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
</div> --}}

 {{-- <!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 

	<h3>Data Role</h3>
 
	<a href="/role"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="role/store" method="post">
		{{ csrf_field() }}
		 <input type="text" name="nama" required="required"> <br/>
		Id <input type="number" name="id" required="required"> <br/>
		Role_name <textarea name="role" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>
 --}}


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

    <div class="content mt-3">

        <div class = "animated fadeIn">
    
            <div class="card">
                <div class="card-header">
                    <div class="pull-left">
                        <strong>Tambah Daftar Role</strong>
                    </div>
                
                </div>
            </div>
            <div class="pull-right">
                <a href="{{ url('/role') }}" class="btn btn-success btn-sm">
                    <i class="fa fa-undo"></i> Kembali
                </a>
            </div>
        <div class="card-body ">
            <div class="row">
                <div class ="col-lg-8">
                    <form action="">
                                <div class ="form-group">
                                    <table> id_role </table>
                                    <input type ="number" name="id_role" class ="form-control" autofocus required>
                                </div>
                             <div class ="form-group">
                                <table> Role </table>
                                <input type="text" name="name" class ="form-control" autofocus required>
                            </div>
                    </form>   
                    <input type = 'submit' class = 'btn btn-primary' value = "Tambahkan"/> 
                </div>
            </div>
        </div>
    </div>
       
 
    @endsection

    