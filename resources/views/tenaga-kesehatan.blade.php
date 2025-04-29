<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/logo-klinik.png" type="image/png" />
    <title>Tenaga Kesehatan - Klinik Haikhah</title>
    <link rel="stylesheet" href="{{ asset('css/global.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/tenaga-kesehatan.css') }}" />
    <link
        rel="stylesheet"
        href="modules/fontawesome-free-6.7.2-web/css/all.min.css" />
</head>

<body>
    <!-- Header -->
    <header>
        <div class="container">
            <nav>
                <div class="logo">
                    <img src="images/logo-klinik.png" alt="Klinik Haikhah Logo" />
                </div>
                <ul class="nav-links">
                    <button class="nav-icon nav-icon-x">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="#services">Layanan</a></li>
                    <li><a href="{{ route('fasilitas') }}">Fasilitas</a></li>
                    <li><a href="#">Tenaga Kesehatan</a></li>
                    <li><a href="{{ route('tentang-kami') }}">Tentang Kami</a></li>
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
                    <h1>Tim Medis Profesional dan Berdedikasi</h1>
                    <p>
                        Klinik Pratama Haikhah didukung oleh tim tenaga kesehatan yang
                        berpengalaman, profesional, dan memiliki dedikasi tinggi untuk
                        memberikan layanan terbaik bagi setiap pasien kami.
                    </p>
                </div>
                <div class="hero-image aos aos-bottom">
                    <img src="/api/placeholder/600/400" alt="Tim Medis Klinik Haikhah" />
                </div>
            </div>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="filter-section">
        <div class="container">
            <div class="filter-container">
                <h3>Filter Tenaga Kesehatan</h3>
                <div class="filter-buttons">
                    <button class="filter-btn active" data-filter="all">Semua</button>
                    <button class="filter-btn" data-filter="doctor">Dokter</button>
                    <button class="filter-btn" data-filter="nurse">Perawat</button>
                    <button class="filter-btn" data-filter="midwife">Bidan</button>
                    <button class="filter-btn" data-filter="pharmacist">Apoteker</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Grid Section -->
    <section class="team-grid-section">
        <div class="container">
            <div class="team-grid" id="team-grid">
                <!-- Dokter -->
                <div class="team-card doctor aos aos-bottom">
                    <div class="card-flip">
                        <div class="card-front">
                            <div class="member-image">
                                <img src="/api/placeholder/400/400" alt="Dr. Anita Wijaya" />
                            </div>
                            <div class="member-tag">Dokter</div>
                            <div class="member-info">
                                <h3>Dr. Anita Wijaya</h3>
                                <span>Dokter Umum</span>
                            </div>
                        </div>
                        <div class="card-back">
                            <h3>Dr. Anita Wijaya</h3>
                            <span>Dokter Umum</span>
                            <p>
                                Berpengalaman lebih dari 12 tahun dalam praktik kedokteran
                                umum dengan spesialisasi dalam perawatan kesehatan keluarga.
                            </p>
                            <div class="qualification">
                                <i class="fas fa-graduation-cap"></i>
                                <p>Universitas Indonesia</p>
                            </div>
                            <div class="schedule">
                                <i class="fas fa-calendar-day"></i>
                                <p>Senin - Jumat: 08.00 - 16.00</p>
                            </div>
                            <div class="contact-btn">
                                <a href="#" class="contact-link">Konsultasi <i class="fas fa-arrow-right"></i></a>
                            </div>
                            <div class="social-links">
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="team-card doctor aos aos-bottom">
                    <div class="card-flip">
                        <div class="card-front">
                            <div class="member-image">
                                <img src="/api/placeholder/400/400" alt="Dr. Budi Santoso" />
                            </div>
                            <div class="member-tag">Dokter</div>
                            <div class="member-info">
                                <h3>Dr. Budi Santoso</h3>
                                <span>Dokter Spesialis Anak</span>
                            </div>
                        </div>
                        <div class="card-back">
                            <h3>Dr. Budi Santoso</h3>
                            <span>Dokter Spesialis Anak</span>
                            <p>
                                Spesialis anak berpengalaman dengan fokus pada tumbuh kembang
                                anak dan penanganan penyakit anak dengan pendekatan ramah.
                            </p>
                            <div class="qualification">
                                <i class="fas fa-graduation-cap"></i>
                                <p>Universitas Airlangga</p>
                            </div>
                            <div class="schedule">
                                <i class="fas fa-calendar-day"></i>
                                <p>Selasa & Kamis: 09.00 - 14.00</p>
                            </div>
                            <div class="contact-btn">
                                <a href="#" class="contact-link">Konsultasi <i class="fas fa-arrow-right"></i></a>
                            </div>
                            <div class="social-links">
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="team-card doctor aos aos-bottom">
                    <div class="card-flip">
                        <div class="card-front">
                            <div class="member-image">
                                <img src="/api/placeholder/400/400" alt="Dr. Citra Pertiwi" />
                            </div>
                            <div class="member-tag">Dokter</div>
                            <div class="member-info">
                                <h3>Dr. Citra Pertiwi</h3>
                                <span>Dokter Gigi</span>
                            </div>
                        </div>
                        <div class="card-back">
                            <h3>Dr. Citra Pertiwi</h3>
                            <span>Dokter Gigi</span>
                            <p>
                                Dokter gigi dengan keahlian dalam perawatan konservatif dan
                                estetika gigi dengan pendekatan yang lembut dan minim rasa
                                sakit.
                            </p>
                            <div class="qualification">
                                <i class="fas fa-graduation-cap"></i>
                                <p>Universitas Padjadjaran</p>
                            </div>
                            <div class="schedule">
                                <i class="fas fa-calendar-day"></i>
                                <p>Senin, Rabu, Jumat: 10.00 - 17.00</p>
                            </div>
                            <div class="contact-btn">
                                <a href="#" class="contact-link">Konsultasi <i class="fas fa-arrow-right"></i></a>
                            </div>
                            <div class="social-links">
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Perawat -->
                <div class="team-card nurse aos aos-bottom">
                    <div class="card-flip">
                        <div class="card-front">
                            <div class="member-image">
                                <img src="/api/placeholder/400/400" alt="Dewi Ariska" />
                            </div>
                            <div class="member-tag">Perawat</div>
                            <div class="member-info">
                                <h3>Dewi Ariska</h3>
                                <span>Kepala Perawat</span>
                            </div>
                        </div>
                        <div class="card-back">
                            <h3>Dewi Ariska</h3>
                            <span>Kepala Perawat</span>
                            <p>
                                Perawat senior dengan lebih dari 15 tahun pengalaman dalam
                                manajemen keperawatan dan perawatan pasien intensif.
                            </p>
                            <div class="qualification">
                                <i class="fas fa-graduation-cap"></i>
                                <p>Poltekkes Kemenkes Pontianak</p>
                            </div>
                            <div class="schedule">
                                <i class="fas fa-calendar-day"></i>
                                <p>Senin - Jumat: 07.00 - 15.00</p>
                            </div>
                            <div class="social-links">
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="team-card nurse aos aos-bottom">
                    <div class="card-flip">
                        <div class="card-front">
                            <div class="member-image">
                                <img src="/api/placeholder/400/400" alt="Eko Prasetyo" />
                            </div>
                            <div class="member-tag">Perawat</div>
                            <div class="member-info">
                                <h3>Eko Prasetyo</h3>
                                <span>Perawat UGD</span>
                            </div>
                        </div>
                        <div class="card-back">
                            <h3>Eko Prasetyo</h3>
                            <span>Perawat UGD</span>
                            <p>
                                Spesialis perawatan gawat darurat dengan sertifikasi BCLS dan
                                ACLS. Ahli dalam penanganan pasien kritis dan trauma.
                            </p>
                            <div class="qualification">
                                <i class="fas fa-graduation-cap"></i>
                                <p>Universitas Tanjungpura</p>
                            </div>
                            <div class="schedule">
                                <i class="fas fa-calendar-day"></i>
                                <p>Shift Bergilir 24 Jam</p>
                            </div>
                            <div class="social-links">
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bidan -->
                <div class="team-card midwife aos aos-bottom">
                    <div class="card-flip">
                        <div class="card-front">
                            <div class="member-image">
                                <img src="/api/placeholder/400/400" alt="Fani Nurhaliza" />
                            </div>
                            <div class="member-tag">Bidan</div>
                            <div class="member-info">
                                <h3>Fani Nurhaliza</h3>
                                <span>Bidan Koordinator</span>
                            </div>
                        </div>
                        <div class="card-back">
                            <h3>Fani Nurhaliza</h3>
                            <span>Bidan Koordinator</span>
                            <p>
                                Bidan berpengalaman dalam perawatan kehamilan, persalinan
                                normal, dan edukasi kesehatan reproduksi wanita.
                            </p>
                            <div class="qualification">
                                <i class="fas fa-graduation-cap"></i>
                                <p>Poltekkes Kemenkes Pontianak</p>
                            </div>
                            <div class="schedule">
                                <i class="fas fa-calendar-day"></i>
                                <p>Senin - Sabtu: 08.00 - 16.00</p>
                            </div>
                            <div class="contact-btn">
                                <a href="#" class="contact-link">Konsultasi <i class="fas fa-arrow-right"></i></a>
                            </div>
                            <div class="social-links">
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Apoteker -->
                <div class="team-card pharmacist aos aos-bottom">
                    <div class="card-flip">
                        <div class="card-front">
                            <div class="member-image">
                                <img src="/api/placeholder/400/400" alt="Gunawan Wibowo" />
                            </div>
                            <div class="member-tag">Apoteker</div>
                            <div class="member-info">
                                <h3>Gunawan Wibowo</h3>
                                <span>Apoteker Kepala</span>
                            </div>
                        </div>
                        <div class="card-back">
                            <h3>Gunawan Wibowo</h3>
                            <span>Apoteker Kepala</span>
                            <p>
                                Apoteker berpengalaman dalam pengelolaan farmasi klinik,
                                farmakologi, dan konsultasi penggunaan obat yang aman.
                            </p>
                            <div class="qualification">
                                <i class="fas fa-graduation-cap"></i>
                                <p>Institut Teknologi Bandung</p>
                            </div>
                            <div class="schedule">
                                <i class="fas fa-calendar-day"></i>
                                <p>Senin - Jumat: 08.00 - 17.00</p>
                            </div>
                            <div class="social-links">
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="team-card pharmacist aos aos-bottom">
                    <div class="card-flip">
                        <div class="card-front">
                            <div class="member-image">
                                <img src="/api/placeholder/400/400" alt="Hana Permata" />
                            </div>
                            <div class="member-tag">Apoteker</div>
                            <div class="member-info">
                                <h3>Hana Permata</h3>
                                <span>Asisten Apoteker</span>
                            </div>
                        </div>
                        <div class="card-back">
                            <h3>Hana Permata</h3>
                            <span>Asisten Apoteker</span>
                            <p>
                                Asisten apoteker yang teliti dan terampil dalam pengelolaan
                                inventaris obat dan penyiapan obat untuk pasien.
                            </p>
                            <div class="qualification">
                                <i class="fas fa-graduation-cap"></i>
                                <p>Akademi Farmasi Pontianak</p>
                            </div>
                            <div class="schedule">
                                <i class="fas fa-calendar-day"></i>
                                <p>Senin - Jumat: 08.00 - 17.00</p>
                            </div>
                            <div class="social-links">
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            </div>
                        </div>
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
                        Klinik Pratama Haikhah berkomitmen memberikan layanan kesehatan
                        yang menyeluruh dengan fokus pada kenyamanan dan kesejahteraan
                        pasien. Kami berusaha memberikan perawatan berkualitas tinggi
                        untuk individu dan keluarga.
                    </p>
                </div>
                <div class="footer-col">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="index.html#services">Layanan</a></li>
                        <li><a href="fasilitas.html">Fasilitas</a></li>
                        <li><a href="#">Tenaga Medis</a></li>
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

    <script src="js/global.js"></script>
    <script src="js/tenaga-kesehatan.js"></script>
</body>

</html>