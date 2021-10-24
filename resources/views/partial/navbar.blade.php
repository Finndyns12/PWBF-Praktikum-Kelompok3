<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/home')}}">Pelaporan Bencana</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($active === "Home" ) ? 'active' : '' }}" href="{{ url('/home')}}">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "About" ) ? 'active' : '' }}" href="{{ url('/about')}}">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "News" ) ? 'active' : '' }}"  href="{{ url('/news')}}">NEWS</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a href="/login" class="nav-link {{ ($active === "Login" ) ? 'active' : '' }}">
          <i class="bi bi-box-arrow-in-right"></i>Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
