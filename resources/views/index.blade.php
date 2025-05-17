<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('images/logo-klinik.png') }}" type="image/png" />
    <title>Klinik Haikhah</title>
    <link rel="stylesheet" href="{{ asset('modules/fontawesome-free-6.7.2-web/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/global.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
    <!-- Header -->
    @include('header')

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
                    <a href="{{ route('janji-temu') }}" class="btn">
                        <p class="btn-p">Buat Janji Temu</p>
                        <i class="fa-solid fa-pen-to-square btn-icon"></i>
                    </a>
                </div>
                <div class="hero-image aos aos-bottom">
                    <img src="{{ asset('images/hero.jpg') }}" alt="Doctor with patient" />
                </div>
            </div>
        </div>
    </section>

    <section class="services" id="services">
        <div class="container">
            <div class="section-title">
                <h2>Bentuk Pelayanan</h2>
            </div>
            <div class="services-grid aos aos-bottom">
                @foreach ($pelayanan as $pelayanans)
                <div class="service-card">
                    <div class="service-icon">
                        <i class="{{ $pelayanans->icon }}" style="font-size: 40px; color: #2b7a78;"></i>
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
                            <i class="{{ $item->icon }}"></i> <!-- icon bisa disetting dinamis kalo mau -->
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
                        "Waktu anak saya demam tinggi malem Minggu, saya panik karena klinik lain tutup. Alhamdulillah
                        Klinik Haikhah buka 24 jam! Dokternya langsung tanggap dan anak saya cepat ditangani. Terima
                        kasih tim!"
                    </p>
                    <div class="client-info">
                        <div class="client-name">
                            <h4>Putri</h4>
                            <span>Orang Tua Pasien</span>
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
                    <a href="{{ route('janji-temu') }}" class="btn-jt">
                        <p class="btn-p">Buat Janji Temu</p>
                        <i class="fa-solid fa-pen-to-square btn-icon"></i>
                    </a>
                    <a href="{{ route('fasilitas') }}" class="btn-white">Lihat Fasilitas Kami</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('footer')
    <script src="{{ asset('js/global.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>