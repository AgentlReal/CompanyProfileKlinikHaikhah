<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Buat Janji Temu - Klinik Haikhah</title>
    <link rel="icon" href="images/logo-klinik.png" type="image/png" />
    <link rel="stylesheet" href="{{ asset('css/global.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/janji-temu.css') }}" />
    <link rel="stylesheet" href="{{ asset('modules/fontawesome-free-6.7.2-web/css/all.min.css') }}" />
</head>

<body>
    <!-- Header -->
    @include('header')

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

                    <form id="appointmentForm" method="POST" action="{{ route('janji-temu') }}">
                        @csrf
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Nama Lengkap</label>
                                <input type="text" id="name" name="nama_lengkap" required />
                            </div>

                            <div class="form-group">
                                <label for="phone">Nomor Telepon</label>
                                <input type="tel" id="phone" name="nomor_telepon" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" />
                        </div>

                        <div class="form-group">
                            <label for="service">Layanan</label>
                            <select id="service" name="layanan" required>
                                <option value="">Pilih Layanan</option>
                                <option value="Konsultasi Umum">Konsultasi Umum</option>
                                <option value="Konsultasi Spesialis">Konsultasi Spesialis</option>
                                <option value="Perawatan Gigi">Perawatan Gigi</option>
                                <option value="Kesehatan Anak">Kesehatan Anak</option>
                                <option value="Medical Check-up">Medical Check-up</option>
                            </select>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="date">Tanggal</label>
                                <input type="date" id="date" name="tanggal" required readonly />
                            </div>

                            <div class="form-group">
                                <label for="time">Waktu</label>
                                <select id="time" name="waktu" required>
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
                            <textarea id="symptoms" name="Keluhan_Gejala" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="notes">Catatan Tambahan (Opsional)</label>
                            <textarea id="notes" name="catatan_tambahan"></textarea>
                        </div>

                        <button type="submit" class="submit-btn">Kirim</button>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('footer')

    <script src="{{ asset('js/global.js') }}"></script>
    <script src="{{ asset('js/janji-temu.js') }}"></script>
</body>

</html>