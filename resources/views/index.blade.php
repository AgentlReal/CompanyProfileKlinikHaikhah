<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="{{ asset('images/logo-klinik.png') }}" type="image/png" />
  <title>Klinik Haikhah</title>
  <link
    rel="stylesheet"
    href="{{ asset('modules/fontawesome-free-6.7.2-web/css/all.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/global.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
  <!-- Header -->
  <header>
    <div class="container">
      <nav>
        <div class="logo">
          <img src="{{ asset('images/logo-klinik.png') }}" alt="" />
        </div>
        <ul class="nav-links">
          <button class="nav-icon nav-icon-x">
            <i class="fa-solid fa-xmark"></i>
          </button>
          <li><a href="#">Home</a></li>
          <li><a href="#services">Layanan</a></li>
          <li><a href="{{ route('fasilitas') }}">Fasilitas</a></li>
          <li><a href="#team">Tenaga Kesehatan</a></li>
          <li><a href="#testimonials">Tentang Kami</a></li>
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

  <!-- Hero Section -->
  <section class="hero" id="home">
    <div class="container">
      <div class="hero-content">
        <div class="hero-text aos aos-left">
          <h1>Kesehatan Prima, Layanan Unggul – Solusi Medis Terpercaya</h1>
          <p>
            Klinik Pratama Haikhah menghadirkan layanan kesehatan profesional dengan tim medis
            berkompeten dan fasilitas modern. Prioritas kami adalah kenyamanan
            pasien dalam lingkungan yang hommy, menjadikan setiap kunjungan
            Anda aman, nyaman, dan personal.
          </p>
          <a href="#appointment" class="btn">
            <p class="btn-p">Buat Janji Temu</p>
            <i class="fa-brands fa-whatsapp btn-icon"></i>
          </a>
        </div>
        <div class="hero-image aos aos-bottom">
          <img src="{{ asset('images/hero.jpg') }}" alt="Doctor with patient" />
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section class="services" id="services">
    <div class="container">
      <div class="section-title">
        <h2>Bentuk Pelayanan</h2>
      </div>
      <div class="services-grid aos aos-bottom">
        @foreach ($pelayanan as $pelayanans)
        <div class="service-card">
          <div class="service-icon">
            <i class="fa-solid fa-stethoscope"></i> <!-- Ini nanti bisa dibuat dinamis juga kalau mau -->
          </div>
          <h3>{{ $pelayanans->nama }}</h3>
          <p>
            {{ $pelayanans->deskripsi }}
          </p>
        </div>
        @endforeach
      </div>
    </div>
  </section>


  <!-- Why Us Section -->
  <section class="why-us" id="why-us">
    <div class="container">
      <div class="section-title">
        <h2>Mengapa Memilih Kami?</h2>
      </div>
      <div class="why-us-content">
        <div class="why-us-image aos aos-bottom">
          <img src="{{ asset('images/mengapa.jpg') }}" alt="Modern clinic facility" />
        </div>
        <div class="why-us-text aos aos-left">

          @foreach ($mengapa as $item)
          <div class="why-us-item">
            <div class="why-us-icon">
              <i class="fa-solid fa-star"></i> <!-- icon bisa disetting dinamis kalo mau -->
            </div>
            <div>
              <h3>{{ $item->title }}</h3>
              <p>{{ $item->deskripsi }}</p>
            </div>
          </div>
          @endforeach

        </div>
      </div>
    </div>
  </section>

  <!-- Team Section -->
  <section class="team" id="team">
    <div class="container">
      <div class="section-title">
        <h2>Meet Our Experts</h2>
      </div>
      <div class="team-grid aos aos-bottom">

        @foreach ($dokter as $item)
        <div class="team-member">
          <div class="member-image">
            <img src="{{ asset('images/' . $item->gambar) }}" alt="{{ $item->nama }}" />
          </div>
          <div class="member-info">
            <h3>{{ $item->nama }}</h3>
            <span>{{ $item->spesialis }}</span>
            <p>{{ $item->deskripsi }}</p>
            <div class="social-links">
              <a href="#"><i class="fa-brands fa-facebook"></i></a>
              <a href="#"><i class="fa-brands fa-instagram"></i></a>
              <a href="#"><i class="fa-brands fa-twitter"></i></a>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </section>


  <!-- Testimonials Section -->
  <section class="testimonials" id="testimonials">
    <div class="container">
      <div class="section-title">
        <h2>Apa Kata Mereka?</h2>
      </div>
      <div class="testimonial-slider">
        <div class="testimonial-card">
          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p class="testimonial-text">
            "The care I received at MediCare Clinic was exceptional. Dr.
            Johnson was thorough, compassionate, and took the time to explain
            everything clearly. The entire staff made me feel comfortable and
            valued. I highly recommend this clinic to anyone looking for
            quality healthcare."
          </p>
          <div class="client-info">
            <div class="client-image">
              <img src="/api/placeholder/100/100" alt="Robert Wilson" />
            </div>
            <div class="client-name">
              <h4>Robert Wilson</h4>
              <span>Patient for 3 years</span>
            </div>
          </div>
        </div>
      </div>
      <div class="testimonial-buttons">
        <button class="testimonial-btn active"></button>
        <button class="testimonial-btn"></button>
        <button class="testimonial-btn"></button>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="cta-section" id="cta">
    <div class="container">
      <div class="cta-content">
        <h2>Bergabunglah dengan Keluarga Klinik Haikhah</h2>
        <p>
          Kami berkomitmen untuk selalu memberikan layanan kesehatan terbaik
          dengan pendekatan personal. Kunjungi kami segera untuk konsultasi
          atau jadwalkan janji temu secara online.
        </p>
        <div class="cta-buttons">
          <a href="#" class="btn">
            <p class="btn-p">Buat Janji Temu</p>
            <i class="fa-brands fa-whatsapp btn-icon"></i>
          </a>
          <a href="{{ route('fasilitas') }}" class="btn-white">Lihat Fasilitas Kami</a>
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
            <li><a href="#">Home</a></li>
            <li><a href="#services">Layanan</a></li>
            <li><a href="fasilitas.html">Fasilitas</a></li>
            <li><a href="#team">Tenaga Medis</a></li>
            <li><a href="#testimonials">Tentang Kami</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h3>Partnerships</h3>
          <ul class="footer-partnerships">
            <li>
              <img src="{{ asset('images/partnership-1.png') }}" alt="" />
            </li>
            <li>
              <img src="{{ asset('images/partnership-2.png') }}" alt="" />
            </li>
            <li>
              <img src="{{ asset('images/partnership-3.png') }}" alt="" />
            </li>
          </ul>
        </div>
        <div class="footer-col">
          <h3>Contact Us</h3>
          <div class="contact-info">
            @foreach($kontak as $k)
            <div>
              <i class="fas fa-map-marker-alt"></i>
              <p>{{ $k->alamat }}</p>
            </div>
            <div>
              <i class="fas fa-phone-alt"></i>
              <p>{{ $k->NoTlpn }}</p>
            </div>
            <div>
              <i class="fas fa-envelope"></i>
              <p>{{ $k->email }}</p>
            </div>
            <div>
              <i class="fas fa-clock"></i>
              <p>
                {{ $k->Jam }}
              </p>
            </div>
            @endforeach
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
  <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>