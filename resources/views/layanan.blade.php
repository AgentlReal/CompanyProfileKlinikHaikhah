<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/logo-klinik.png" type="image/png" />
    <title>Layanan - Klinik Haikhah</title>
    <link rel="stylesheet" href="{{ asset('css/global.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/layanan.css') }}" />
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
                    <li><a href="#">Layanan</a></li>
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
    <section class="layanan-hero">
        <div class="container">
            <div class="layanan-hero-content">
                <h1 class="aos aos-left">Layanan Kesehatan Komprehensif</h1>
                <p class="aos aos-left delay-200">
                    Klinik Pratama Haikhah menyediakan berbagai layanan medis
                    berkualitas, didukung oleh tim profesional dan fasilitas modern
                    untuk menjaga kesehatan Anda dan keluarga.
                </p>
            </div>
        </div>
    </section>

    <!-- Service Categories -->
    <section class="service-categories" id="categories">
        <div class="container">
            <div class="section-title">
                <h2>Kategori Layanan</h2>
                <p>
                    Temukan berbagai pelayanan kesehatan yang kami sediakan sesuai
                    dengan kebutuhan Anda
                </p>
            </div>

            <div class="category-tabs aos aos-bottom">
                <button class="category-tab active" data-category="all">
                    Semua Layanan
                </button>
                <button class="category-tab" data-category="umum">
                    Kesehatan Umum
                </button>
                <button class="category-tab" data-category="spesialis">
                    Spesialis
                </button>
                <button class="category-tab" data-category="gigi">
                    Kesehatan Gigi
                </button>
                <button class="category-tab" data-category="anak">
                    Kesehatan Anak
                </button>
            </div>

            <div class="services-grid">
                <!-- Umum -->
                <div class="service-card aos aos-bottom delay-300" data-category="umum">
                    <div class="service-icon">
                        <i class="fa-solid fa-user-doctor"></i>
                    </div>
                    <h3>Dokter Umum</h3>
                    <p>
                        Pemeriksaan dan konsultasi kesehatan dasar untuk segala usia,
                        serta penanganan awal berbagai penyakit.
                    </p>
                    <a href="#detail-umum" class="service-link">
                        Selengkapnya <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                <div class="service-card aos aos-bottom delay-300" data-category="umum">
                    <div class="service-icon">
                        <i class="fa-solid fa-venus-mars"></i>
                    </div>
                    <h3>Keluarga Berencana (KB)</h3>
                    <p>
                        Konsultasi dan layanan alat kontrasepsi untuk perencanaan keluarga
                        dan kesehatan reproduksi.
                    </p>
                    <a href="#detail-umum" class="service-link">
                        Selengkapnya <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                <div class="service-card aos aos-bottom delay-300" data-category="umum">
                    <div class="service-icon">
                        <i class="fa-solid fa-vials"></i>
                    </div>
                    <h3>Laboratorium / Jejaring</h3>
                    <p>
                        Pemeriksaan laboratorium untuk mendukung diagnosis dan pengobatan
                        secara tepat dan akurat.
                    </p>
                    <a href="#detail-umum" class="service-link">
                        Selengkapnya <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                <div class="service-card aos aos-bottom delay-300" data-category="umum">
                    <div class="service-icon">
                        <i class="fa-solid fa-prescription-bottle-medical"></i>
                    </div>
                    <h3>Apotek</h3>
                    <p>
                        Penyediaan obat-obatan sesuai resep dokter serta konsultasi
                        penggunaan obat yang tepat.
                    </p>
                    <a href="#detail-umum" class="service-link">
                        Selengkapnya <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Spesialis -->
                <div class="service-card aos aos-bottom delay-300" data-category="spesialis">
                    <div class="service-icon">
                        <i class="fa-solid fa-bed-pulse"></i>
                    </div>
                    <h3>Rawat Inap Persalinan 24 Jam</h3>
                    <p>
                        Layanan rawat inap khusus persalinan yang tersedia 24 jam dengan
                        dukungan tenaga medis profesional.
                    </p>
                    <a href="#detail-spesialis" class="service-link">
                        Selengkapnya <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                <div class="service-card aos aos-bottom delay-300" data-category="spesialis">
                    <div class="service-icon">
                        <i class="fa-solid fa-baby"></i>
                    </div>
                    <h3>Pemeriksaan Kehamilan dengan USG</h3>
                    <p>
                        Pemeriksaan kehamilan menggunakan teknologi ultrasonografi (USG)
                        untuk memantau kesehatan ibu dan janin.
                    </p>
                    <a href="#detail-spesialis" class="service-link">
                        Selengkapnya <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                <div class="service-card aos aos-bottom delay-300" data-category="spesialis">
                    <div class="service-icon">
                        <i class="fa-solid fa-microscope"></i>
                    </div>
                    <h3>Deteksi Dini Kanker Leher Rahim (IVA)</h3>
                    <p>
                        Pemeriksaan IVA untuk mendeteksi secara dini risiko kanker serviks
                        pada wanita.
                    </p>
                    <a href="#detail-spesialis" class="service-link">
                        Selengkapnya <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                <div class="service-card aos aos-bottom delay-300" data-category="spesialis">
                    <div class="service-icon">
                        <i class="fa-solid fa-person-walking"></i>
                    </div>
                    <h3>Fisioterapi</h3>
                    <p>
                        Terapi fisik untuk pemulihan cedera, gangguan otot dan tulang,
                        serta peningkatan mobilitas.
                    </p>
                    <a href="#detail-spesialis" class="service-link">
                        Selengkapnya <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                <div class="service-card aos aos-bottom delay-300" data-category="spesialis">
                    <div class="service-icon">
                        <i class="fa-solid fa-wave-square"></i>
                    </div>
                    <h3>EKG (Elektrokardiogram)</h3>
                    <p>
                        Pemeriksaan rekam jantung untuk mendeteksi gangguan irama atau
                        kelainan jantung lainnya.
                    </p>
                    <a href="#detail-spesialis" class="service-link">
                        Selengkapnya <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Gigi -->
                <div class="service-card aos aos-bottom delay-300" data-category="gigi">
                    <div class="service-icon">
                        <i class="fa-solid fa-tooth"></i>
                    </div>
                    <h3>Dokter Gigi</h3>
                    <p>
                        Layanan perawatan dan pengobatan kesehatan gigi dan mulut oleh
                        tenaga profesional.
                    </p>
                    <a href="#detail-gigi" class="service-link">
                        Selengkapnya <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Anak -->
                <div class="service-card aos aos-bottom delay-300" data-category="anak">
                    <div class="service-icon">
                        <i class="fa-solid fa-syringe"></i>
                    </div>
                    <h3>Imunisasi Bayi dan Catin</h3>
                    <p>
                        Layanan imunisasi untuk bayi dan calon pengantin untuk mencegah
                        penyakit menular dan menjaga kesehatan.
                    </p>
                    <a href="#detail-anak" class="service-link">
                        Selengkapnya <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                <div class="service-card aos aos-bottom delay-300" data-category="anak">
                    <div class="service-icon">
                        <i class="fa-solid fa-scissors"></i>
                    </div>
                    <h3>Khitan / Sunat</h3>
                    <p>
                        Layanan khitan atau sunat untuk anak-anak dan dewasa, dengan
                        metode medis yang aman dan nyaman.
                    </p>
                    <a href="#detail-anak" class="service-link">
                        Selengkapnya <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Details -->
    <section class="service-details" id="detail-umum">
        <div class="container">
            <div class="section-title">
                <h2>Layanan Kesehatan Umum</h2>
                <p>
                    Layanan dasar untuk menjaga kesehatan dan menangani berbagai keluhan
                    umum
                </p>
            </div>

            <div class="detail-content">
                <div class="detail-image aos aos-left">
                    <img src="images/layanan-umum.jpg" alt="Layanan Kesehatan Umum" />
                </div>
                <div class="detail-text aos aos-right">
                    <h3>Konsultasi Kesehatan Umum</h3>
                    <p>
                        Tim dokter umum kami siap memberikan konsultasi medis untuk
                        berbagai keluhan kesehatan dasar. Layanan ini mencakup:
                    </p>
                    <ul>
                        <li>Pemeriksaan fisik menyeluruh</li>
                        <li>Diagnosis dan penanganan penyakit umum</li>
                        <li>Penulisan resep dan rekomendasi pengobatan</li>
                        <li>Rujukan ke spesialis jika diperlukan</li>
                    </ul>
                    <p>
                        Dokter kami akan memberikan waktu yang cukup untuk mendengarkan
                        keluhan Anda dan memberikan penjelasan yang jelas tentang kondisi
                        kesehatan Anda.
                    </p>

                    <div class="service-meta">
                        <div class="meta-item">
                            <i class="fas fa-calendar-check"></i>
                            <span>Tersedia: Setiap hari</span>
                        </div>
                    </div>

                    <a href="#appointment" class="btn-service">Buat Janji Temu</a>
                </div>
            </div>
        </div>
    </section>

    <section class="service-details bg-light" id="detail-spesialis">
        <div class="container">
            <div class="section-title">
                <h2>Layanan Spesialis</h2>
                <p>
                    Penanganan medis khusus untuk kondisi yang memerlukan keahlian
                    spesifik
                </p>
            </div>
            <div class="detail-content">
                <div class="detail-image aos aos-left">
                    <img src="images/layanan-spesialis.jpg" alt="Layanan Spesialis" />
                </div>
                <div class="detail-text aos aos-right">
                    <h3>Konsultasi Layanan Spesialis</h3>
                    <p>
                        Kami menyediakan konsultasi dengan dokter spesialis berpengalaman
                        untuk menangani keluhan yang lebih kompleks. Layanan ini meliputi:
                    </p>
                    <ul>
                        <li>Kardiologi (jantung)</li>
                        <li>Obstetri dan Ginekologi (kandungan dan kehamilan)</li>
                        <li>Neurologi (saraf)</li>
                        <li>Rehabilitasi Medis dan Fisioterapi</li>
                    </ul>
                    <p>
                        Pasien akan mendapatkan pemeriksaan lanjutan sesuai keluhan serta
                        penanganan medis yang lebih mendalam.
                    </p>

                    <div class="service-meta">
                        <div class="meta-item">
                            <i class="fas fa-calendar-check"></i>
                            <span>Tersedia: Setiap hari</span>
                        </div>
                    </div>

                    <a href="#appointment" class="btn-service">Buat Janji Temu</a>
                </div>
            </div>
        </div>
    </section>

    <section class="service-details bg-light" id="detail-gigi">
        <div class="container">
            <div class="section-title">
                <h2>Layanan Kesehatan Gigi</h2>
                <p>
                    Perawatan dan pencegahan masalah gigi dan mulut untuk semua usia
                    dengan pendekatan profesional dan ramah
                </p>
            </div>
            <div class="detail-content">
                <div class="detail-image aos aos-left">
                    <img src="images/layanan-gigi.jpg" alt="Layanan Kesehatan Gigi" />
                </div>
                <div class="detail-text aos aos-right">
                    <h3>Layanan Kesehatan Gigi</h3>
                    <p>
                        Layanan dokter gigi kami mencakup perawatan rutin hingga
                        penanganan keluhan gigi dan mulut secara profesional. Fasilitas
                        yang tersedia antara lain:
                    </p>
                    <ul>
                        <li>Pembersihan karang gigi (scaling)</li>
                        <li>Penambalan dan pencabutan gigi</li>
                        <li>Perawatan gigi berlubang</li>
                        <li>Konsultasi dan edukasi kebersihan gigi</li>
                    </ul>
                    <p>
                        Proses dilakukan dengan alat modern dan steril, serta pendekatan
                        ramah pasien.
                    </p>

                    <div class="service-meta">
                        <div class="meta-item">
                            <i class="fas fa-calendar-check"></i>
                            <span>Tersedia: Setiap hari</span>
                        </div>
                    </div>

                    <a href="#appointment" class="btn-service">Buat Janji Temu</a>
                </div>
            </div>
        </div>
    </section>

    <section class="service-details bg-light" id="detail-anak">
        <div class="container">
            <div class="section-title">
                <h2>Layanan Kesehatan Anak</h2>
                <p>
                    Pemeriksaan dan pemantauan tumbuh kembang anak secara menyeluruh
                    untuk memastikan kesehatan optimal sejak dini
                </p>
            </div>
            <div class="detail-content">
                <div class="detail-image aos aos-left">
                    <img src="images/layanan-anak.jpg" alt="Layanan Kesehatan Anak" />
                </div>
                <div class="detail-text aos aos-right">
                    <h3>Layanan Kesehatan Anak</h3>
                    <p>
                        Kami memahami pentingnya kesehatan anak sejak dini. Layanan ini
                        khusus dirancang untuk bayi dan anak-anak, mencakup:
                    </p>
                    <ul>
                        <li>Imunisasi dasar dan lanjutan</li>
                        <li>Pemeriksaan tumbuh kembang anak</li>
                        <li>Deteksi dini gangguan kesehatan anak</li>
                        <li>Konsultasi gizi dan nutrisi</li>
                    </ul>
                    <p>
                        Tim kami terdiri dari tenaga kesehatan yang ramah anak dan
                        berpengalaman dalam menangani kebutuhan medis anak-anak.
                    </p>

                    <div class="service-meta">
                        <div class="meta-item">
                            <i class="fas fa-calendar-check"></i>
                            <span>Tersedia: Setiap hari</span>
                        </div>
                    </div>

                    <a href="#appointment" class="btn-service">Buat Janji Temu</a>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="how-it-works" id="process">
        <div class="container">
            <div class="section-title">
                <h2>Bagaimana Prosesnya</h2>
                <p>
                    Pengalaman berobat yang aman, nyaman, dan efisien di Klinik Pratama
                    Haikhah
                </p>
            </div>

            <div class="process-timeline">
                <div class="timeline-item aos aos-bottom">
                    <div class="timeline-icon">
                        <i class="fas fa-calendar-plus"></i>
                    </div>
                    <div class="timeline-content">
                        <h3>Buat Janji Temu</h3>
                        <p>
                            Jadwalkan kunjungan Anda melalui website, WhatsApp, telepon,
                            atau langsung ke klinik. Tim kami akan membantu menemukan jadwal
                            yang sesuai dengan kebutuhan Anda.
                        </p>
                    </div>
                </div>

                <div class="timeline-item aos aos-bottom delay-200">
                    <div class="timeline-icon">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                    <div class="timeline-content">
                        <h3>Registrasi & Pendaftaran</h3>
                        <p>
                            Setibanya di klinik, lengkapi formulir pendaftaran dan berikan
                            informasi medis dasar. Untuk pasien baru, proses ini memakan
                            waktu sekitar 10-15 menit.
                        </p>
                    </div>
                </div>

                <div class="timeline-item aos aos-bottom delay-300">
                    <div class="timeline-icon">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <div class="timeline-content">
                        <h3>Konsultasi dengan Dokter</h3>
                        <p>
                            Bertemu dengan dokter untuk pemeriksaan dan konsultasi
                            menyeluruh. Dokter kami akan meluangkan waktu untuk mendengarkan
                            keluhan dan menjawab pertanyaan Anda.
                        </p>
                    </div>
                </div>

                <div class="timeline-item aos aos-bottom delay-400">
                    <div class="timeline-icon">
                        <i class="fas fa-file-medical"></i>
                    </div>
                    <div class="timeline-content">
                        <h3>Rencana Perawatan</h3>
                        <p>
                            Dokter akan membuat rencana perawatan spesifik untuk Anda,
                            termasuk obat-obatan, tes tambahan jika diperlukan, dan
                            rekomendasi tindak lanjut.
                        </p>
                    </div>
                </div>

                <div class="timeline-item aos aos-bottom delay-500">
                    <div class="timeline-icon">
                        <i class="fas fa-pills"></i>
                    </div>
                    <div class="timeline-content">
                        <h3>Pengambilan Obat & Pembayaran</h3>
                        <p>
                            Ambil obat yang diresepkan di apotek klinik kami dan selesaikan
                            proses pembayaran. Kami menerima berbagai metode pembayaran
                            untuk kenyamanan Anda.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Insurance & Payment -->
    <section class="insurance-payment bg-light" id="payment">
        <div class="container">
            <div class="section-title">
                <h2>Asuransi & Pembayaran</h2>
                <p>
                    Informasi mengenai metode pembayaran dan kerjasama asuransi
                    kesehatan
                </p>
            </div>

            <div class="payment-content">
                <div class="payment-methods aos aos-left">
                    <h3>Metode Pembayaran</h3>
                    <p>
                        Klinik Pratama Haikhah menerima berbagai metode pembayaran untuk
                        kenyamanan Anda:
                    </p>
                    <ul class="payment-list">
                        <li><i class="fas fa-money-bill-wave"></i> Tunai</li>
                        <li><i class="fas fa-credit-card"></i> Kartu Debit/Kredit</li>
                        <li>
                            <i class="fas fa-mobile-alt"></i> QRIS (GoPay, OVO, Dana,
                            LinkAja)
                        </li>
                        <li><i class="fas fa-university"></i> Transfer Bank</li>
                    </ul>
                </div>

                <div class="insurance-partners aos aos-right">
                    <h3>Kerjasama Asuransi</h3>
                    <p>
                        Kami bekerja sama dengan berbagai penyedia asuransi kesehatan
                        untuk memudahkan akses layanan medis:
                    </p>
                    <div class="insurance-logos">
                        <div class="insurance-logo">
                            <img src="images/partnership-1.png" alt="Asuransi Partner 1" />
                        </div>
                    </div>
                    <p class="insurance-note">
                        Silakan konfirmasi kepada pihak klinik tentang cakupan asuransi
                        Anda sebelum melakukan kunjungan. Tim kami siap membantu proses
                        klaim asuransi Anda.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section" id="faq">
        <div class="container">
            <div class="section-title">
                <h2>Pertanyaan Umum</h2>
                <p>
                    Jawaban untuk pertanyaan yang sering diajukan tentang layanan kami
                </p>
            </div>

            <div class="faq-container">
                <div class="faq-item aos aos-bottom">
                    <div class="faq-question">
                        <h3>Apakah perlu membuat janji temu sebelum datang ke klinik?</h3>
                        <span class="faq-toggle"><i class="fas fa-plus"></i></span>
                    </div>
                    <div class="faq-answer">
                        <p>
                            Meskipun kami menerima kunjungan langsung, sangat disarankan
                            untuk membuat janji temu terlebih dahulu untuk menghindari waktu
                            tunggu yang lama. Janji temu dapat dibuat melalui WhatsApp,
                            telepon, atau langsung ke klinik kami.
                        </p>
                    </div>
                </div>

                <div class="faq-item aos aos-bottom delay-100">
                    <div class="faq-question">
                        <h3>Berapa lama waktu konsultasi dengan dokter?</h3>
                        <span class="faq-toggle"><i class="fas fa-plus"></i></span>
                    </div>
                    <div class="faq-answer">
                        <p>
                            Durasi konsultasi bervariasi tergantung pada jenis layanan.
                            Konsultasi umum biasanya berlangsung 30-45 menit, sementara
                            konsultasi spesialis dapat memakan waktu 45-60 menit untuk
                            memastikan semua keluhan Anda ditangani dengan baik.
                        </p>
                    </div>
                </div>

                <div class="faq-item aos aos-bottom delay-200">
                    <div class="faq-question">
                        <h3>Apakah Klinik Haikhah menyediakan layanan darurat?</h3>
                        <span class="faq-toggle"><i class="fas fa-plus"></i></span>
                    </div>
                    <div class="faq-answer">
                        <p>
                            Ya, Klinik Pratama Haikhah beroperasi 24 jam dan menyediakan
                            layanan darurat untuk kondisi yang membutuhkan penanganan
                            segera. Untuk kasus yang sangat serius atau mengancam jiwa, kami
                            akan memberikan pertolongan pertama dan membantu proses rujukan
                            ke rumah sakit.
                        </p>
                    </div>
                </div>

                <div class="faq-item aos aos-bottom delay-300">
                    <div class="faq-question">
                        <h3>
                            Bagaimana cara mendapatkan hasil pemeriksaan laboratorium?
                        </h3>
                        <span class="faq-toggle"><i class="fas fa-plus"></i></span>
                    </div>
                    <div class="faq-answer">
                        <p>
                            Hasil pemeriksaan laboratorium dapat diambil langsung di klinik
                            sesuai dengan estimasi waktu yang diberikan. Kami juga
                            menawarkan layanan pengiriman hasil melalui email atau WhatsApp
                            dengan persetujuan pasien untuk mempermudah akses terhadap hasil
                            pemeriksaan.
                        </p>
                    </div>
                </div>

                <div class="faq-item aos aos-bottom delay-400">
                    <div class="faq-question">
                        <h3>Apakah tersedia layanan konsultasi online?</h3>
                        <span class="faq-toggle"><i class="fas fa-plus"></i></span>
                    </div>
                    <div class="faq-answer">
                        <p>
                            Ya, kami menyediakan layanan konsultasi online melalui video
                            call untuk pasien yang tidak dapat datang langsung ke klinik.
                            Layanan ini cocok untuk konsultasi lanjutan, pemeriksaan hasil
                            tes, atau keluhan ringan. Silakan hubungi kami untuk informasi
                            lebih lanjut.
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
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">Layanan</a></li>
                        <li><a href="fasilitas.html">Fasilitas</a></li>
                        <li><a href="index.html#team">Tenaga Medis</a></li>
                        <li><a href="tentang-kami.html">Tentang Kami</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Partnerships</h3>
                    <ul class="footer-partnerships">
                        <li>
                            <img src="images/partnership-1.png" alt="" />
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
    <script src="{{ asset('js/layanan.js') }}"></script>
</body>

</html>