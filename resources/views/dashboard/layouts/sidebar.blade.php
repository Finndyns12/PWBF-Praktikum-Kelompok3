<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/lapor') ? 'active' : '' }}" href="/dashboard/lapor">
              <span data-feather="edit-3"></span>
              Melaporkan Bencana
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/history') ? 'active' : '' }}" href="/dashboard/history">
              <span data-feather="clock"></span>
              Histori Pelaporan
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/daftarbencana') ? 'active' : '' }}" href="/dashboard/daftarbencana">
              <span data-feather="list"></span>
              Daftar Bencanaa
            </a>
          </li>
          <li>
          <a class="nav-link {{ Request::is('dashboard/provinsi') ? 'active' : '' }}" href="/dashboard/provinsi">
            <span data-feather="list"></span>
            Daftar Nama Provinsi
          </a>
          </li>

            <li>
              <a class="nav-link {{ Request::is('dashboard/user') ? 'active' : '' }}" href="/dashboard/user">
                <span data-feather = "list"></span>
                Daftar User
              </a>
              </li>
        
              <li>
                <a class="nav-link {{ Request::is('dashboard/role') ? 'active' : '' }}" href="/dashboard/role">
                  <span data-feather="list"></span>
                   Daftar Role 
                </a>
                </li>

                <li>
                  <a class="nav-link {{ Request::is('dashboard/kategori') ? 'active' : '' }}" href="/dashboard/kategori">
                    <span data-feather="list"></span>
                  Daftar Kategori Bencana
                  </a>
                  </li>

                  <li>
                    <a class="nav-link {{ Request::is('dashboard/Kota') ? 'active' : '' }}" href="/dashboard/Kota">
                      <span data-feather="list"></span>
                      Daftar Nama Kota
                    </a>
                    </li>
        </ul>
      </div>
    </nav>