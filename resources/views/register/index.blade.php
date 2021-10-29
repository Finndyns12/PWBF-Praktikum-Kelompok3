@extends('layouts\main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
          <form action="/register" method="post">
          @csrf
            <div class="form-floating">
              <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" 
              placeholder="Name" required value="{{old('nama')}}">
              <label for="name">Name</label>
              @error('name')
                <div class="invalid-feedback">
                 {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{old('email')}}">
              <label for="email">Email address</label>
              @error('email')
                <div class="invalid-feedback">
                 {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="date" name="tgl_lahir" class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" placeholder="25/10/2021" required value="{{old('tgl_lahir')}}">
              <label for="tgl_lahir">Tanggal Lahir</label>
              @error('tgl_lahir')
                <div class="invalid-feedback">
                 {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
              <label for="password">Password</label>
              @error('password')
                <div class="invalid-feedback">
                 {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="string" name="id_kecamatan" class="form-control @error('id_kecamatan') is-invalid @enderror" id="id_kecamatan" placeholder="12345" required value="{{old('id_kecamatan')}}">
              <label for="id_kecamatan">ID Kecamatan</label>
              @error('id_kecamatan')
                <div class="invalid-feedback">
                 {{ $message }}
                </div>
              @enderror
            </div>
            <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-3">Already registered?<a href="/login">Login</a></small>

        </main>
    </div>
</div>

@endsection