@extends('layout\main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
          <form action="/register" method="post">
          @csrf
            <div class="form-floating">
              <input type="text" name="name" class="form-control rounded-top" id="name" placeholder="Name">
              <label for="name">Name</label>
            </div>
            <div class="form-floating">
              <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
              <label for="email">Email address</label>
            </div>
            <div class="form-floating">
              <input type="date" name="Tanggal Lahir" class="form-control" id="tgl_lahir" placeholder="25/10/2021">
              <label for="tgl_lahir">Tanggal Lahir</label>
            </div>
            <div class="form-floating">
              <input type="password" name="password" class="form-control" id="password" placeholder="Password">
              <label for="password">Password</label>
            </div>
            <div class="form-floating">
              <input type="id" name="id kecamatan" class="form-control rounded-bottom" id="id_kecamatan" placeholder="1">
              <label for="id_kecamatan">ID Kecamatan</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-3">Already registered?<a href="/login">Login</a></small>

        </main>
    </div>
</div>

@endsection