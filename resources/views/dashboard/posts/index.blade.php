@extends('dashboard\layouts\main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h3">Melaporkan Bencana</h1>
</div>

<div class="col-lg-8">
<form method="post" action="/dashboard/lapor">
@csrf
  <div class="mb-6">
    <label for="category" class="form-label">Kategori</label>
    <select class="form-select" name="category_id">
    <option selected>Pilih Kategori</option>
      <option value="1">Ringan</status_idoption>
      <option value="2">Sedang</option>
      <option value="3">Berat</option>
    </select>
    </div>
    <div class="mb-3">
    <label for="nama_bencana" class="form-label">Nama Bencana</label>
    <input type="text" class="form-control @error ('nama_bencana') is-invalid @enderror" id="nama_bencana" name="nama_bencana" value="{{ old('nama_bencana') }}">
    @error('nama_bencana')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="nama_kecamatan" class="form-label">Masukkan Nama Kecamatan</label>
    <input type="text" class="form-control @error ('nama_kecamatan') is-invalid @enderror" id="nama_kecamatan" name="nama_kecamatan" value="{{ old('nama_kecamatan') }}">
    @error('nama_kecamatan')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="waktu" class="form-label">Masukkan Waktu Bencana</label>
    <input type="date" class="form-control @error ('waktu') is-invalid @enderror" id="waktu" name="waktu" value="{{ old('waktu') }}">
    @error('waktu')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="status" class="form-label">Masukkan Status Bencana</label>
    <select class="form-select" name="">
    <option selected>Pilih Status</option>
      <option value="1">Normal</option>
      <option value="2">Siaga</option>
      <option value="3">Waspada</option>
      <option value="4">Awas</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

    @endsection