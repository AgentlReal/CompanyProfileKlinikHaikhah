  <header>
      <div class="container">
          <nav>
              <div class="logo">
                  <img src="images/logo-klinik.png" alt="" />
              </div>
              <ul class="nav-links">
                  <button class="nav-icon nav-icon-x">
                      <i class="fa-solid fa-xmark"></i>
                  </button>
                  <li><a href="{{ route('index') }}">Home</a></li>
                  <li><a href="{{ route('layanan') }}">Layanan</a></li>
                  <li><a href="{{ route('fasilitas') }}">Fasilitas</a></li>
                  <li><a href="{{ route('tenaga-kesehatan') }}">Tenaga Kesehatan</a></li>
                  <li><a href="{{ route('tentang-kami') }}">Tentang Kami</a></li>
              </ul>
              <div class="nav-right">
                  <a href="{{ route('janji-temu') }}" class="btn">
                      <p class="btn-p">Buat Janji Temu</p>
                      <i class="fa-solid fa-pen-to-square btn-icon"></i>
                  </a>
                  <button class="nav-icon nav-icon-bars">
                      <i class="fa-solid fa-bars"></i>
                  </button>
              </div>
          </nav>
      </div>
  </header>