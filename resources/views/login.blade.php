@extends('layout.main')

@section('container')
    <v1>Registrasi User</v1>
    <h3>{{ $nama }}</h3>
    <h3>{{ $email }}</h3>
    <h3>{{ $tgl_lahir }}</h3>
    <h3>{{ $password }}</h3>
    <h3>{{ $id_kecamatan }}</h3>
@endsection