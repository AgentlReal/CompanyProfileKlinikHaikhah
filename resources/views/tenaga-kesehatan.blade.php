<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/logo-klinik.png" type="image/png" />
    <title>Tenaga Kesehatan - Klinik Haikhah</title>
    <link rel="stylesheet" href="{{ asset('css/global.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/tenaga-kesehatan.css') }}" />
    <link rel="stylesheet" href="{{ asset('modules/fontawesome-free-6.7.2-web/css/all.min.css') }}" />
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
                    <li><a href="{{ route('layanan') }}">Layanan</a></li>
                    <li><a href="{{ route('fasilitas') }}">Fasilitas</a></li>
                    <li><a href="#">Tenaga Kesehatan</a></li>
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

    <!-- Hero Section -->
    <section class="team-hero">
        <div class="container">
            <div class="hero-content">
                <h1>Tenaga Kesehatan Kami</h1>
                <p>
                    Dipimpin oleh tenaga kesehatan berpengalaman yang berkomitmen
                    memberikan pelayanan terbaik untuk kesehatan Anda
                </p>
            </div>
        </div>
    </section>

    <!-- Team Stats -->
    <section class="team-stats">
        <div class="container">
            <div class="stats-content">
                <h2>Komposisi Tim Medis</h2>
                <p>
                    Klinik Pratama Haikhah didukung oleh tim medis profesional yang
                    terdiri dari:
                </p>
                <div class="stats-grid">
                    <div class="stat-item">
                        <i class="fas fa-user-md"></i>
                        <h3>Dokter Umum</h3>
                        <p>2 orang</p>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-tooth"></i>
                        <h3>Dokter Gigi</h3>
                        <p>1 orang</p>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-pills"></i>
                        <h3>Apoteker</h3>
                        <p>1 orang</p>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-user-nurse"></i>
                        <h3>Bidan</h3>
                        <p>4 orang</p>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-teeth"></i>
                        <h3>Perawat Gigi</h3>
                        <p>1 orang</p>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-laptop-medical"></i>
                        <h3>Adminkes</h3>
                        <p>1 orang</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Members -->
    <section class="team-members">
        <div class="container">
            <div class="section-title">
                <h2>Kenali Tim Kami</h2>
                <p>Berkomitmen memberikan pelayanan kesehatan terbaik untuk Anda</p>
            </div>

            <div class="team-grid">
                <div class="team-member">
                    <div class="member-image">
                        <img src="{{ asset('images/tenaga-kesehatan.jpg') }}" alt="Tenkes" />
                    </div>
                    <div class="member-info">
                        <p>
                            Klinik Pratama Haikhah didukung oleh tenaga kesehatan
                            profesional yang siap memberikan pelayanan terbaik kepada
                            masyarakat. Terdapat dua orang dokter umum yang bertugas
                            memberikan layanan kesehatan dasar, diagnosis awal, serta
                            penanganan berbagai keluhan medis secara menyeluruh. Dengan
                            kehadiran dua dokter, pelayanan dapat diberikan secara lebih
                            optimal, cepat, dan efisien. Selain itu, tersedia satu orang
                            dokter gigi yang menangani pemeriksaan, perawatan, serta
                            tindakan medis terkait kesehatan gigi dan mulut. Dokter gigi
                            bekerja sama dengan satu orang perawat gigi untuk memastikan
                            tindakan dilakukan dengan aman dan sesuai standar pelayanan
                            kesehatan gigi. Untuk kebutuhan farmasi, klinik juga memiliki
                            satu orang apoteker yang bertanggung jawab atas pengelolaan
                            obat, pemberian informasi obat kepada pasien, serta memastikan
                            obat-obatan yang diberikan sesuai dengan resep dokter dan aman
                            digunakan. Dalam pelayanan kebidanan, Klinik Pratama Haikhah
                            diperkuat oleh empat orang bidan yang memiliki peran penting
                            dalam memberikan layanan kesehatan ibu dan anak, mulai dari
                            pemeriksaan kehamilan, persalinan, hingga edukasi pasca
                            persalinan. Keberadaan bidan yang cukup memungkinkan pelayanan
                            dilakukan secara bergantian dan menyeluruh. Keseluruhan kegiatan
                            administrasi medis di klinik ini dikelola oleh satu orang
                            adminkes (administrasi kesehatan) yang bertugas mencatat data
                            pasien, mengatur jadwal pelayanan, dan memastikan seluruh proses
                            administratif berjalan dengan tertib dan sistematis. Dengan
                            formasi tenaga kesehatan yang lengkap dan kompeten, Klinik
                            Pratama Haikhah berkomitmen untuk menjadi fasilitas kesehatan
                            yang terpercaya dan mampu memenuhi kebutuhan layanan medis
                            masyarakat secara profesional.
                        </p>
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
</body>

</html>