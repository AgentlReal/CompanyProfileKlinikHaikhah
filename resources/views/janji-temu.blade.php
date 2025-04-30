<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Buat Janji Temu - Klinik Haikhah</title>
    <link rel="icon" href="images/logo-klinik.png" type="image/png" />
    <link rel="stylesheet" href="{{ asset('css/global.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/janji-temu.css') }}" />
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
                    <li><a href="index.html">Home</a></li>
                    <li><a href="layanan.html">Layanan</a></li>
                    <li><a href="fasilitas.html">Fasilitas</a></li>
                    <li><a href="index.html#team">Tenaga Kesehatan</a></li>
                    <li><a href="tentang-kami.html">Tentang Kami</a></li>
                </ul>
                <div class="nav-right">
                    <a href="#" class="btn active">
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

    <!-- Appointment Section -->
    <section class="appointment-section">
        <div class="container">
            <div class="appointment-container">
                <div class="appointment-info">
                    <h1>Buat Janji Temu dengan Dokter Kami</h1>
                    <p>
                        Isi formulir di bawah ini untuk membuat janji temu. Tim kami akan
                        menghubungi Anda untuk konfirmasi jadwal.
                    </p>

                    <div class="info-cards">
                        <div class="info-card">
                            <i class="fas fa-clock"></i>
                            <div>
                                <h3>Jam Operasional</h3>
                                <p>Buka 24 Jam</p>
                            </div>
                        </div>

                        <div class="info-card">
                            <i class="fas fa-phone-alt"></i>
                            <div>
                                <h3>Kontak Darurat</h3>
                                <p>+62 812-5650-0204</p>
                            </div>
                        </div>

                        <div class="info-card">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <h3>Lokasi</h3>
                                <p>Jl. Pramuka Gg. Rengas Sejahtera No. 1</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="appointment-form">
                    <form id="appointmentForm">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Nama Lengkap</label>
                                <input type="text" id="name" name="name" required />
                            </div>

                            <div class="form-group">
                                <label for="phone">Nomor Telepon</label>
                                <input type="tel" id="phone" name="phone" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required />
                        </div>

                        <div class="form-group">
                            <label for="service">Layanan</label>
                            <select id="service" name="service" required>
                                <option value="">Pilih Layanan</option>
                                <option value="Konsultasi Umum">Konsultasi Umum</option>
                                <option value="Konsultasi Spesialis">
                                    Konsultasi Spesialis
                                </option>
                                <option value="Perawatan Gigi">Perawatan Gigi</option>
                                <option value="Kesehatan Anak">Kesehatan Anak</option>
                                <option value="Medical Check-up">Medical Check-up</option>
                            </select>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="date">Tanggal</label>
                                <input type="date" id="date" name="date" required />
                            </div>

                            <div class="form-group">
                                <label for="time">Waktu</label>
                                <select id="time" name="time" required>
                                    <option value="">Pilih Waktu</option>
                                    <option value="09:00">09:00</option>
                                    <option value="10:00">10:00</option>
                                    <option value="11:00">11:00</option>
                                    <option value="13:00">13:00</option>
                                    <option value="14:00">14:00</option>
                                    <option value="15:00">15:00</option>
                                    <option value="16:00">16:00</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="symptoms">Keluhan/Gejala</label>
                            <textarea id="symptoms" name="symptoms" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="notes">Catatan Tambahan (Opsional)</label>
                            <textarea id="notes" name="notes"></textarea>
                        </div>

                        <button type="submit" class="submit-btn">Kirim</button>
                    </form>
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
                        <li><a href="layanan.html">Layanan</a></li>
                        <li><a href="fasilitas.html">Fasilitas</a></li>
                        <li><a href="index.html#team">Tenaga Medis</a></li>
                        <li><a href="tentang-kami.html">Tentang Kami</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Partnerships</h3>
                    <ul class="footer-partnerships">
                        <li><img src="images/partnership-1.png" alt="" /></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Kontak Kami</h3>
                    <div class="contact-info">
                        <div>
                            <i class="fas fa-map-marker-alt"></i>
                            <p>
                                Jl. Pramuka Gg. Rengas Sejahtera No. 1, Sungai Rengas, Kec.
                                <br />Sungai Kakap, Kabupaten Kubu Raya, Kalimantan Barat
                                78381
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
                        <button type="submit"><i class="fas fa-paper-plane"></i></button>
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
    <script src="{{ asset('js/janji-temu.js') }}"></script>
</body>

</html>