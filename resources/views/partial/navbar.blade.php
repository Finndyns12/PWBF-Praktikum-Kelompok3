<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand"  href="{{ url('/home')}}">|Pelaporan Bencana|</a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Home" ) ? 'active' : '' }}" href="{{ url('/home')}}">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "About" ) ? 'active' : '' }}" href="{{ url('/about')}}">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "News" ) ? 'active' : '' }}"  href="{{ url('/news')}}">NEWS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Login" ) ? 'active' : '' }}" href="{{ url('/login')}}">LOGIN</a>
        </li>
<<<<<<< HEAD
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Registrasi" ) ? 'active' : '' }}"  href="{{ url('/registrasi')}}">REGISTRASI</a>
        </li>
=======
>>>>>>> 96c294b1d62dd033bd0b477699a109ed9cb2eae6
      </ul>
    </div>
  </div>
</nav>
