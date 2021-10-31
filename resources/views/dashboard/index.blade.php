@extends('dashboard\layouts\main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <main>
  <div class="container py-4">
    <header class="pb-3 mb-4 border-bottom">
      <a href="" class="d-flex align-items-center text-dark text-decoration-none">
        <img src="img/sipb-bnw-nobg.png" alt="SIPB" width="100">
        <span class="fs-4">Selamat Datang di SI Pelaporan Bencana</span>
      </a>
    </header>

    <div class="p-6 mb-5 bg-light rounded-4">
      <div class="container-fluid py-6">
        <h2 class="display-7 fw-bold">Gambaran Sistem</h2>
        <p class="col-md-9 fs-5">Aplikasi yang berfungsi untuk melaporkan terjadinya suatu bencana yang terjadi di suatu daerah</p>
      </div>
    </div>

    <div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 text-white bg-dark rounded-3">
          <h2>Pelaporan Bencana Alam</h2>
          <p>Masyarakat dapat melaporkan bencana alam yang terjadi di daerahnya.</p>
          
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-100 p-5 text-white bg-dark rounded-3">
          <h2>Bencana Alam</h2>
          <p>adalah bencana yang diakibatkan oleh peristiwa atau serangkaian peristiwa yang disebabkan oleh alam antara lain berupa gempa bumi, tsunami, gunung meletus, banjir, kekeringan, angin topan, dan tanah longsor.</p>
        </div>
      </div>
    </div>

    <footer class="pt-3 mt-4 text-muted border-top">
      &copy; 2021
    </footer>
  </div>
</main>





</div>
@endsection