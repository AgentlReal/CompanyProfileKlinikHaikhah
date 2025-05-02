<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="images/logo-klinik.png" type="image/png" />
  <title>Klinik Haikhah</title>
  <link rel="stylesheet" href="{{ asset('modules/fontawesome-free-6.7.2-web/css/all.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/global.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/fasilitas.css') }}" />
</head>

<body>
  <!-- Header -->
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

  <!-- Page Header -->
  <section class="page-header">
    <div class="container aos aos-bottom">
      <h1>Fasilitas Kami</h1>
      <p>
        Jelajahi fasilitas modern kami yang dirancang untuk memberikan
        pelayanan kesehatan komprehensif dalam lingkungan yang nyaman dan
        terkini.
      </p>
    </div>
  </section>

  <!-- Facilities Navigation -->
  <section class="facilities-nav">
    <div class="container">
      <ul class="facilities-menu">
        <li><a href="#reception" class="active">Ruang Penerimaan</a></li>
        <li><a href="#medical-services">Ruang Pelayanan Medik</a></li>
        <li><a href="#support-services">Ruang Penunjang Medik</a></li>
        <li><a href="#non-medical">Ruang Penunjang Non Medik</a></li>
      </ul>
    </div>
  </section>

  <!-- Reception Areas -->
  <section class="facilities-section" id="reception">
    <div class="container">
      <div class="section-title aos aos-bottom">
        <span>AREA A</span>
        <h2>Ruang Penerimaan</h2>
        <p>
          Dengan area resepsionis yang hangat, kami memastikan kunjungan Anda
          terasa nyaman sejak langkah pertama.
        </p>
      </div>

      <div class="facilities-grid aos aos-bottom">
        @foreach ($ruangpenerimaan as $ruang)
        <div class="facility-card">
          <div class="facility-image">
            <img src="/api/placeholder/500/300" alt="{{ $ruang->nama }}" />
          </div>
          <div class="facility-content">
            <h3>{{ $ruang->nama }}</h3>
            <p>{{ $ruang->deskripsi }}</p>

            <ul class="facility-features">
              @foreach ($ruang->fiturs as $fitur)
              <li>
                <i class="fas fa-check-circle"></i> {{ $fitur->nama_fitur }}
              </li>
              @endforeach
            </ul>

          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- Medical Service Areas -->
  <section class="facilities-section" id="medical-services">
    <div class="container">
      <div class="section-title aos aos-bottom">
        <span>AREA B</span>
        <h2>Ruang Pelayanan Medik</h2>
        <p>
          Area layanan medis kami didesain khusus dengan teknologi canggih
          untuk memberikan perawatan yang menyeluruh
        </p>
      </div>

      <div class="facilities-grid aos aos-bottom">
        @foreach ($ruangb as $ruang)
        <div class="facility-card">
          <div class="facility-image">
            {{-- Kalau nanti ada gambar, tinggal load di sini --}}
            <img src="{{ $ruang->gambar ?? '' }}" alt="{{ $ruang->nama }}">
          </div>
          <div class="facility-content">
            <h3>{{ $ruang->nama }}</h3>
            <p>{{ $ruang->deskripsi }}</p>
            <ul class="facility-features">
              @foreach ($ruang->fiturs as $fiturb)
              <li><i class="fas fa-check-circle"></i> {{ $fiturb->nama_fitur }}</li>
              @endforeach
            </ul>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- Support Services -->
  <section class="facilities-section" id="support-services">
    <div class="container">
      <div class="section-title aos aos-bottom">
        <span>AREA C</span>
        <h2>Ruang Penunjang Medik</h2>
        <p>
          Layanan pendukung kami memanfaatkan teknologi mutakhir untuk
          mendukung diagnosis dan pengobatan yang akurat
        </p>
      </div>

      <div class="facilities-grid aos aos-bottom">
        @foreach ($areac as $area)
        <div class="facility-card">
          <div class="facility-image">
            <!-- Optional: ganti src dengan URL gambar dari DB kalau ada -->
            <img src="{{ asset('images/default.jpg') }}" alt="{{ $area->nama }}">
          </div>
          <div class="facility-content">
            <h3>{{ $area->nama }}</h3>
            <p>{{ $area->deskripsi }}</p>
            <ul class="facility-features">
              @foreach ($area->fiturs as $fitur)
              <li><i class="fas fa-check-circle"></i> {{ $fitur->nama_fitur }}</li>
              @endforeach
            </ul>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- Non-Medical Support Areas -->
  <section class="facilities-section" id="non-medical">
    <div class="container">
      <div class="section-title aos aos-bottom">
        <span>AREA D</span>
        <h2>Ruang Penunjang Non Medik</h2>
        <p>
          Fasilitas tambahan kami dirancang untuk meningkatkan kenyamanan
          pasien dan keluarga yang menunggu
        </p>
      </div>

      <div class="facilities-grid aos aos-bottom">
        @foreach ($aread as $area)
        <div class="facility-card">
          <div class="facility-image">
            <!-- Optional: ganti src dengan URL gambar dari DB kalau ada -->
            <img src="{{ asset('images/default.jpg') }}" alt="{{ $area->nama }}">
          </div>
          <div class="facility-content">
            <h3>{{ $area->nama }}</h3>
            <p>{{ $area->deskripsi }}</p>
            <ul class="facility-features">
              @foreach ($area->fiturs as $fitur)
              <li><i class="fas fa-check-circle"></i> {{ $fitur->nama_fitur }}</li>
              @endforeach
            </ul>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer id="contact">
    <div class="container">
      <div class="footer-content">
        <div class="footer-col">
          <h3>Tentang Klinik Pratama Haikhah</h3>
          <p>
            Klinik Pratama Haikhah berkomitmen memberikan layanan kesehatan yang
            menyeluruh dengan fokus pada kenyamanan dan kesejahteraan pasien.
            Kami berusaha memberikan perawatan berkualitas tinggi untuk
            individu dan keluarga.
          </p>
        </div>
        <div class="footer-col">
          <h3>Quick Links</h3>
          <ul class="footer-links">
            <li><a href="{{ route('index') }}">Home</a></li>
            <li><a href="{{ route('layanan') }}">Layanan</a></li>
            <li><a href="{{ route('fasilitas') }}">Fasilitas</a></li>
            <li><a href="{{ route('tenaga-kesehatan') }}">Tenaga Kesehatan</a></li>
            <li><a href="{{ route('tentang-kami') }}">Tentang Kami</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h3>Partnerships</h3>
          <ul class="footer-partnerships">
            <li>
              <img src="images/partnership-1.png" alt="" />
            </li>
            <li>
              <img src="images/partnership-2.png" alt="" />
            </li>
            <li>
              <img src="images/partnership-3.png" alt="" />
            </li>
          </ul>
        </div>
        <div class="footer-col">
          <h3>Kontak Kami</h3>
          <div class="contact-info">
            <div>
              <i class="fas fa-map-marker-alt"></i>
              <p>
                Jl. Pramuka Gg. Rengas Sejahtera No. 1, Sungai Rengas, Kec.
                <br />
                Sungai Kakap, Kabupaten Kubu Raya, Kalimantan Barat 78381
              </p>
            </div>
            <div>
              <i class="fas fa-phone-alt"></i>
              <p>+62 812-5650-0204</p>
            </div>
            <div>
              <i class="fas fa-envelope"></i>
              <p>klinikhaikhah@gmail.com</p>
            </div>
            <div>
              <i class="fas fa-clock"></i>
              <p>Buka 24 Jam</p>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2025 Klinik Pratama Haikhah. All Rights Reserved.</p>
      </div>
    </div>
  </footer>
  <script src="{{ asset('js/global.js') }}"></script>
  <script src="{{ asset('js/fasilitas.js') }}"></script>
</body>

</html>