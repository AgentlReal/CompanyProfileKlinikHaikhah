<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/logo-klinik.png" type="image/png" />
    <title>Klinik Haikhah</title>
    <link rel="stylesheet" href="{{ asset('modules/fontawesome-free-6.7.2-web/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/global.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/tentang-kami.css') }}" />
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

    <!-- Hero Section -->
    <section class="hero">
        <div class="container aos aos-bottom">
            <h1>Tentang Klinik Haikhah</h1>
            <p>
                Mengenal lebih dekat dengan klinik kesehatan terpercaya yang telah
                melayani masyarakat selama lebih dari dua dekade dengan komitmen pada
                kualitas layanan dan kenyamanan pasien.
            </p>
        </div>
    </section>

    <!-- History Section -->
    <section class="section history" id="history">
        <div class="container">
            <div class="section-title">
                <h2>Sejarah Perjalanan Kami</h2>
            </div>
            <div class="history-content">
                <div class="history-text aos aos-left">
                    <p>
                        Klinik Pratama Haikhah didirikan pada tahun 2001 oleh Muhammad
                        Khairun Anwar dan Dr. Nihayatus Solikhah dengan visi sederhana:
                        memberikan layanan kesehatan berkualitas tinggi yang terjangkau
                        bagi masyarakat. Dimulai sebagai klinik kecil dengan tiga ruang
                        perawatan, Klinik Haikhah telah berkembang pesat menjadi pusat
                        layanan kesehatan komprehensif yang kini memiliki fasilitas
                        modern.
                    </p>
                    <p>
                        Selama dua dekade perjalanannya, Klinik Haikhah telah mengalami
                        berbagai transformasi signifikan dengan perluasan area layanan,
                        penambahan staf medis profesional, dan peningkatan teknologi
                        kesehatan. Pada tahun 2012, klinik kami melakukan renovasi besar
                        pertama dan menambahkan layanan rawat inap terbatas.
                    </p>
                    <p>
                        Tahun 2019 menandai ekspansi besar kedua dengan penambahan
                        departemen khusus untuk anak-anak, lansia, dan unit gigi modern
                        yang dilengkapi peralatan terkini. Kini, setelah lebih dari 20
                        tahun memberikan pelayanan, Klinik Haikhah terus berkomitmen untuk
                        berinovasi dalam layanan kesehatan sambil mempertahankan
                        nilai-nilai keramahtamahan dan perhatian personal yang menjadi
                        landasan awal berdirinya klinik ini.
                    </p>
                </div>
                <div class="history-image aos aos-bottom">
                    <img src="images/sejarah.jpg" alt="Sejarah Klinik Haikhah" />
                </div>
            </div>
        </div>
    </section>

    <!-- Mission and Values Section -->
    <section class="section mission-values" id="mission-values">
        <div class="container">
            <div class="section-title">
                <h2>Misi & Nilai Kami</h2>
            </div>
            <div class="mission-values-grid">
                @foreach ($misinilai as $misi)
                <div class="mission-box aos aos-bottom">
                    <h3><i class="fas fa-bullseye"></i>{{ $misi->judul }}</h3>
                    <div class="values-list">
                        @foreach($misi->fiturs as $fitur)
                        <div class="values-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                {{ $fitur->List_item }}
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Achievements Section -->
    <section class="section achievements" id="achievements">
        <div class="container">
            <div class="section-title">
                <h2>Pencapaian Kami</h2>
            </div>
            <div class="achievements-grid">
                @foreach ($pencapaian as $item)
                <div class="achievement-card aos aos-bottom">
                    <div class="achievement-icon">
                        <i class="{{ $item->icon }}"></i>
                    </div>
                    <h3>{{ $item->value }}{{ $item->unit }}</h3>
                    <p>{{ $item->tipe }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- Timeline Section -->
    <section class="timeline-section" id="timeline">
        <div class="container">
            <div class="section-title">
                <h2>Perjalanan Kami</h2>
            </div>
            <div class="timeline">
                @foreach ($perjalanan as $item)
                <div class="timeline-item">
                    <div class="timeline-marker"></div>
                    <div class="timeline-content aos aos-bottom">
                        <span class="timeline-date">{{ $item->tahun }}</span>
                        <h3>{{ $item->judul }}</h3>
                        <p>{{ $item->deskripsi }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- Team Section -->
    <section class="team-section" id="leadership">
        <div class="container">
            <div class="section-title">
                <h2>Tim Manajemen</h2>
            </div>
            <div class="management-team">
                @foreach($timmanajemen as $anggota)
                <div class="team-member aos aos-bottom">
                    <div class="member-image">
                        <img src="{{ asset('path-ke-foto-default.jpg') }}" alt="{{ $anggota->nama }}" />
                    </div>
                    <div class="member-info">
                        <h3>{{ $anggota->nama }}</h3>
                        <span>{{ $anggota->spesialis }}</span>
                        <p>{{ $anggota->deskripsi }}</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </div>
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
    <script src="{{ asset('js/tentang-kami.js') }}"></script>
</body>

</html>