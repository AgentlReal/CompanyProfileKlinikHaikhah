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
    @include('header')

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
    @include('footer')

    <script src="{{ asset('js/global.js') }}"></script>
</body>

</html>