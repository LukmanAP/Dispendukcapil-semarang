 

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
      <nav id="navbar" class="navbar  container d-flex align-items-center justify-content-between">
        <div class="logo d-flex justify-content-start">
          <img src="/assets/img/logo-2.png" class="img-fluid" alt="logo">
        </div>
      
        <div class="order-last order-lg-0">
          <ul>
            <li><a class="nav-link scrollto" href="/">Home</a></li>
            <li class="dropdown"><a href="#"><span class="me-2">Antrian Online</span> <i class="bi bi-chevron-down me-3"></i></a>
              <ul>
                <li><a href="/antrian">Ambil Antrian</a></li>
                <li><a href="/daftar-antrian">Cek Antrian</a></li>
              </ul>
            </li>
            <!-- <li><a class="nav-link scrollto me-3" href="/contact">Contact</a></li> -->
          </ul>
          <i class="bi bi-list mobile-nav-toggle me-3"></i>
        </div>
      </nav>      

      @auth
        <button class="btn btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Hallo, {{ auth()->user()->name }}
        </button>
        <ul class="dropdown-menu">
              @if (auth()->user()->roles === 'admin')
                  <li><a class="dropdown-item" href="/dashboard">Dashboard </a></li>
              @else
                  <li><a class="dropdown-item" href="/antrian/detail">Antrian Saya </a></li>
              @endif    
              
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item">
                    <span class="align-middle">Keluar</span>
                  </button>
                </form>
        </ul>

      @else
        <a href="/login" class="get-started-btn scrollto">Login</a>
      @endauth


    </div>
  </header><!-- End Header -->