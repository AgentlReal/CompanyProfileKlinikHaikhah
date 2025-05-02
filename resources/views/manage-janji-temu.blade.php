<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Manage Appointments - Klinik Haikhah</title>
    <link rel="icon" href="../images/logo-klinik.png" type="image/png" />
    <link rel="stylesheet" href="{{ asset('modules/fontawesome-free-6.7.2-web/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/global.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/manage-janji-temu.css') }}" />
</head>

<body>
    <!-- Admin Header -->
    <header class="admin-header">
        <div class="header-content">
            <div class="header-left">
                <img
                    src="../images/logo-klinik.png"
                    alt="Klinik Haikhah Logo"
                    class="admin-logo" />
                <h1>Admin Dashboard</h1>
            </div>
            <div class="header-right">
                <span class="admin-name">Admin</span>
                <button id="logoutBtn" class="logout-btn">
                    <i class="fas fa-sign-out-alt"></i>
                    Logout
                </button>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="admin-main">
        <div class="content-header">
            <h2>Manage Appointments</h2>
            <div class="header-actions">
                <div class="search-box">
                    <input
                        type="text"
                        id="searchInput"
                        placeholder="Search appointments..." />
                    <i class="fas fa-search"></i>
                </div>
                <select id="statusFilter" class="status-filter">
                    <option value="all">All Status</option>
                    <option value="pending">Pending</option>
                    <option value="confirmed">Confirmed</option>
                    <option value="completed">Completed</option>
                    <option value="cancelled">Cancelled</option>
                </select>
            </div>
        </div>

        <div class="table-container">
            <table class="appointments-table">
                <thead>
                    <tr>
                        <th>Tanggal & Waktu</th>
                        <th>Nama Pasien</th>
                        <th>Layanan</th>
                        <th>Kontak</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="appointmentsTableBody">
                    <!-- Table content will be populated by JavaScript -->
                </tbody>
            </table>
        </div>
    </main>

    <!-- Edit Appointment Modal -->
    <div id="editModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Edit Appointment</h3>
                <button class="close-modal">&times;</button>
            </div>
            <form id="editForm">
                <div class="form-group">
                    <label for="editName">Patient Name</label>
                    <input type="text" id="editName" name="name" required />
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="editDate">Date</label>
                        <input type="date" id="editDate" name="date" required />
                    </div>
                    <div class="form-group">
                        <label for="editTime">Time</label>
                        <select id="editTime" name="time" required>
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
                    <label for="editService">Service</label>
                    <select id="editService" name="service" required>
                        <option value="Konsultasi Umum">Konsultasi Umum</option>
                        <option value="Konsultasi Spesialis">Konsultasi Spesialis</option>
                        <option value="Perawatan Gigi">Perawatan Gigi</option>
                        <option value="Kesehatan Anak">Kesehatan Anak</option>
                        <option value="Medical Check-up">Medical Check-up</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="editStatus">Status</label>
                    <select id="editStatus" name="status" required>
                        <option value="pending">Pending</option>
                        <option value="confirmed">Confirmed</option>
                        <option value="completed">Completed</option>
                        <option value="cancelled">Cancelled</option>
                    </select>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn-save">Save Changes</button>
                    <button type="button" class="btn-cancel">Cancel</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id="deleteModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Confirm Deletion</h3>
                <button class="close-modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this appointment?</p>
                <p>This action cannot be undone.</p>
            </div>
            <div class="modal-footer">
                <button id="confirmDelete" class="btn-delete">Delete</button>
                <button class="btn-cancel">Cancel</button>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/manage-janji-temu.js') }}"></script>
</body>

</html>