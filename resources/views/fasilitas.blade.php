<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="images/logo-klinik.png" type="image/png" />
  <title>Klinik Haikhah</title>
  <link
    rel="stylesheet"
    href="modules/fontawesome-free-6.7.2-web/css/all.min.css" />
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
          <li><a href="#services">Layanan</a></li>
          <li><a href="#">Fasilitas</a></li>
          <li><a href="#team">Tenaga Kesehatan</a></li>
          <li><a href="tentang-kami.html">Tentang Kami</a></li>
        </ul>
        <div class="nav-right">
          <a href="#appointment" class="btn">
            <p class="btn-p">Buat Janji Temu</p>
            <i class="fa-brands fa-whatsapp btn-icon"></i>
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
        <div class="facility-card">
          <div class="facility-image">
            <img src="" alt="Administration Room" />
          </div>
          <div class="facility-content">
            <h3>Ruang Administrasi</h3>
            <p>
              Area administrasi terpusat kami menangani seluruh proses
              pendaftaran pasien, pembayaran, pengelolaan rekam medis, hingga
              operasional kantor umum.
            </p>
            <ul class="facility-features">
              <li>
                <i class="fas fa-check-circle"></i> Sistem pendaftaran digital
              </li>
              <li>
                <i class="fas fa-check-circle"></i> Pengelolaan rekam medis
                elektronik yang aman
              </li>
              <li>
                <i class="fas fa-check-circle"></i> Beragam metode pembayaran
              </li>
              <li>
                <i class="fas fa-check-circle"></i> Booth konsultasi pribadi
              </li>
            </ul>
          </div>
        </div>
        <div class="facility-card">
          <div class="facility-image">
            <img src="" alt="Waiting Room" />
          </div>
          <div class="facility-content">
            <h3>Ruang Tunggu</h3>
            <p>
              Ruang tunggu kami didesain luas dan nyaman untuk membuat
              pengalaman menunggu lebih menyenangkan, dengan tetap menjaga
              jarak yang aman.
            </p>
            <ul class="facility-features">
              <li>
                <i class="fas fa-check-circle"></i> Tempat duduk yang nyaman
                dan tertata
              </li>
              <li>
                <i class="fas fa-check-circle"></i> Materi edukasi kesehatan
              </li>
              <li>
                <i class="fas fa-check-circle"></i> Layar informasi digital
              </li>
              <li><i class="fas fa-check-circle"></i> Akses Wi-Fi gratis</li>
            </ul>
          </div>
        </div>
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
        <div class="facility-card">
          <div class="facility-image">
            <img
              src=""
              alt="General Examination Room" />
          </div>
          <div class="facility-content">
            <h3>Ruang Pemeriksaan Umum</h3>
            <p>
              Ruang privat untuk pemeriksaan umum, konsultasi, dan asesmen
              diagnostik, tempat dokter bertemu pasien untuk membahas keluhan
              kesehatan.
            </p>
            <ul class="facility-features">
              <li>
                <i class="fas fa-check-circle"></i> Peralatan diagnostik
                canggih
              </li>
              <li>
                <i class="fas fa-check-circle"></i>Ruang konsultasi kedap
                suara
              </li>
              <li>
                <i class="fas fa-check-circle"></i> Tempat periksa yang
                ergonomis
              </li>
              <li>
                <i class="fas fa-check-circle"></i> Komputer kerja untuk
                dokter
              </li>
            </ul>
          </div>
        </div>
        <div class="facility-card">
          <div class="facility-image">
            <img
              src=""
              alt="Medical Procedure Room" />
          </div>
          <div class="facility-content">
            <h3>Ruang Tindakan Medis</h3>
            <p>
              Ruang khusus untuk tindakan medis ringan seperti injeksi,
              perawatan luka, dan prosedur lain yang membutuhkan lingkungan
              steril.
            </p>
            <ul class="facility-features">
              <li>
                <i class="fas fa-check-circle"></i> Area prosedur steril
              </li>
              <li>
                <i class="fas fa-check-circle"></i> Peralatan medis khusus
              </li>
              <li>
                <i class="fas fa-check-circle"></i> Sistem pencahayaan
                mutakhir
              </li>
              <li>
                <i class="fas fa-check-circle"></i> Fasilitas respons darurat
              </li>
            </ul>
          </div>
        </div>
        <div class="facility-card">
          <div class="facility-image">
            <img src="" alt="Emergency Room" />
          </div>
          <div class="facility-content">
            <h3>Ruang Gawat Darurat</h3>
            <p>
              Ruang gawat darurat kami siap menangani situasi kritis dengan
              perlengkapan lengkap dan respons cepat, tersedia 24 jam.
            </p>
            <ul class="facility-features">
              <li>
                <i class="fas fa-check-circle"></i> Layanan darurat 24/7
              </li>
              <li>
                <i class="fas fa-check-circle"></i> Peralatan penunjang hidup
                lanjutan
              </li>
              <li>
                <i class="fas fa-check-circle"></i> Fasilitas penanganan
                trauma
              </li>
              <li>
                <i class="fas fa-check-circle"></i> Akses langsung ke unit
                diagnostik
              </li>
            </ul>
          </div>
        </div>
        <div class="facility-card">
          <div class="facility-image">
            <img src="" alt="Inpatient Room" />
          </div>
          <div class="facility-content">
            <h3>Ruang Rawat Inap</h3>
            <p>
              Ruang inap yang nyaman dan diawasi ketat untuk pasien yang
              membutuhkan perawatan lebih lanjut atau observasi medis jangka
              pendek.
            </p>
            <ul class="facility-features">
              <li>
                <i class="fas fa-check-circle"></i> Tempat tidur rumah sakit
                yang dapat diatur
              </li>
              <li>
                <i class="fas fa-check-circle"></i> Sistem monitoring pasien
              </li>
              <li><i class="fas fa-check-circle"></i> Kamar mandi pribadi</li>
              <li>
                <i class="fas fa-check-circle"></i> Fasilitas untuk keluarga
              </li>
            </ul>
          </div>
        </div>
        <div class="facility-card">
          <div class="facility-image">
            <img src="" alt="Dental Care Room" />
          </div>
          <div class="facility-content">
            <h3>Ruang Perawatan Gigi</h3>
            <p>
              Suite perawatan gigi modern yang mendukung layanan kesehatan
              mulut menyeluruh, mulai dari pencegahan hingga kosmetik.
            </p>
            <ul class="facility-features">
              <li>
                <i class="fas fa-check-circle"></i> Kursi gigi modern dan
                nyaman
              </li>
              <li>
                <i class="fas fa-check-circle"></i> Peralatan x-ray digital
              </li>
              <li>
                <i class="fas fa-check-circle"></i> Area sterilisasi alat
              </li>
              <li>
                <i class="fas fa-check-circle"></i> Alat prosedur gigi lengkap
              </li>
            </ul>
          </div>
        </div>
        <div class="facility-card">
          <div class="facility-image">
            <img src="" alt="Delivery Room" />
          </div>
          <div class="facility-content">
            <h3>Ruang Persalinan</h3>
            <p>
              Suite persalinan yang aman dan nyaman untuk proses melahirkan,
              dengan akses cepat ke layanan darurat jika diperlukan.
            </p>
            <ul class="facility-features">
              <li>
                <i class="fas fa-check-circle"></i> Tempat tidur dan
                perlengkapan persalinan
              </li>
              <li>
                <i class="fas fa-check-circle"></i> Sistem monitoring janin
              </li>
              <li>
                <i class="fas fa-check-circle"></i> Area pemeriksaan bayi baru
                lahir
              </li>
              <li>
                <i class="fas fa-check-circle"></i> Dukungan fasilitas operasi
                darurat
              </li>
            </ul>
          </div>
        </div>
        <div class="facility-card">
          <div class="facility-image">
            <img src="" alt="Maternity Ward" />
          </div>
          <div class="facility-content">
            <h3>Ruang Nifas</h3>
            <p>
              Ruang rawat inap pascapersalinan yang nyaman, mendukung proses
              pemulihan ibu serta ikatan awal antara ibu dan bayi.
            </p>
            <ul class="facility-features">
              <li>
                <i class="fas fa-check-circle"></i> Kamar bersama ibu dan bayi
              </li>
              <li>
                <i class="fas fa-check-circle"></i> Area dukungan menyusui
              </li>
              <li>
                <i class="fas fa-check-circle"></i> Fasilitas perawatan bayi
                baru lahir
              </li>
              <li>
                <i class="fas fa-check-circle"></i> Ruang kunjungan keluarga
              </li>
            </ul>
          </div>
        </div>
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
        <div class="facility-card">
          <div class="facility-image">
            <img src="" alt="Pharmacy" />
          </div>
          <div class="facility-content">
            <h3>Apotek</h3>
            <p>
              Apotek internal kami menyediakan obat resep, produk kesehatan
              umum, serta layanan konsultasi obat bagi pasien.
            </p>
            <ul class="facility-features">
              <li>
                <i class="fas fa-check-circle"></i> Stok obat yang lengkap
              </li>
              <li>
                <i class="fas fa-check-circle"></i> Sistem verifikasi resep
              </li>
              <li>
                <i class="fas fa-check-circle"></i> Area konsultasi obat
              </li>
              <li>
                <i class="fas fa-check-circle"></i> Penyimpanan suhu
                terkontrol
              </li>
            </ul>
          </div>
        </div>
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
        <div class="facility-card">
          <div class="facility-image">
            <img src="" alt="Restrooms" />
          </div>
          <div class="facility-content">
            <h3>Toilet Umum</h3>
            <p>
              Fasilitas toilet bersih dan mudah diakses yang tersedia di
              berbagai area klinik, termasuk fasilitas ramah pengguna kursi
              roda.
            </p>
            <ul class="facility-features">
              <li><i class="fas fa-check-circle"></i> Akses kursi roda</li>
              <li>
                <i class="fas fa-check-circle"></i> Tempat ganti popok bayi
              </li>
              <li>
                <i class="fas fa-check-circle"></i> Perlengkapan kebersihan
                tersedia
              </li>
              <li>
                <i class="fas fa-check-circle"></i> Jadwal pembersihan rutin
              </li>
            </ul>
          </div>
        </div>
        <div class="facility-card">
          <div class="facility-image">
            <img src="" alt="Staff Room" />
          </div>
          <div class="facility-content">
            <h3>Ruang Staff</h3>
            <p>
              Ruang khusus bagi tenaga medis dan staff untuk beristirahat,
              berkoordinasi, dan mempersiapkan diri sebelum bertugas.
            </p>
            <ul class="facility-features">
              <li>
                <i class="fas fa-check-circle"></i> Area istirahat dengan
                tempat duduk
              </li>
              <li><i class="fas fa-check-circle"></i> Dapur kecil</li>
              <li>
                <i class="fas fa-check-circle"></i> Loker untuk barang pribadi
              </li>
              <li>
                <i class="fas fa-check-circle"></i> Papan informasi staf
              </li>
            </ul>
          </div>
        </div>
        <div class="facility-card">
          <div class="facility-image">
            <img src="" alt="Parking Lot" />
          </div>
          <div class="facility-content">
            <h3>Tempat Parkir Kendaraan</h3>
            <p>
              Area parkir yang luas dan aman untuk kendaraan roda dua maupun
              roda empat, tersedia bagi pasien, pengunjung, dan staf, dengan
              akses yang mudah ke seluruh fasilitas klinik.
            </p>
            <ul class="facility-features">
              <li>
                <i class="fas fa-check-circle"></i> Kapasitas memadai untuk
                mobil dan motor
              </li>
              <li>
                <i class="fas fa-check-circle"></i> Sistem keamanan 24 jam
                (CCTV & petugas keamanan)
              </li>
              <li>
                <i class="fas fa-check-circle"></i> Akses langsung ke pintu
                masuk klinik
              </li>
              <li>
                <i class="fas fa-check-circle"></i> Area parkir khusus untuk
                difabel
              </li>
            </ul>
          </div>
        </div>
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
            <li><a href="index.html">Home</a></li>
            <li><a href="#services">Layanan</a></li>
            <li><a href="#">Fasilitas</a></li>
            <li><a href="#team">Tenaga Medis</a></li>
            <li><a href="tentang-kami.html">Tentang Kami</a></li>
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
        <div class="footer-col">
          <h3>Newsletter</h3>
          <p>
            Subscribe to our newsletter for health tips and clinic updates.
          </p>
          <form class="subscribe-form">
            <input type="email" placeholder="Enter your email" />
            <button type="submit">
              <i class="fas fa-paper-plane"></i>
            </button>
          </form>
          <div class="social-links" style="margin-top: 20px">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
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