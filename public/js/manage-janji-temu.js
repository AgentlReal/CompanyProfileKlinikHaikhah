document.getElementById('logoutBtn').addEventListener('click', function () {
    document.getElementById('logoutForm').submit();
});

// Open Edit Modal with Appointment Data
function editAppointment(id) {
    fetch(`/manage-janji-temu/${id}/edit`)
        .then(response => response.json())
        .then(data => {
            // Isi field modal dengan data appointment
            document.getElementById('editName').value = data.nama_lengkap;
            document.getElementById('editDate').value = data.tanggal;
            document.getElementById('editTime').value = data.waktu;
            document.getElementById('editService').value = data.layanan;
            document.getElementById('editStatus').value = data.status;

            // Submit form saat user klik tombol Save Changes
            document.getElementById('editForm').onsubmit = function (event) {
                event.preventDefault();  // Mencegah reload halaman

                // Kirimkan data melalui PUT request
                fetch(`/manage-janji-temu/${id}`, {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        name: document.getElementById('editName').value,
                        date: document.getElementById('editDate').value,
                        time: document.getElementById('editTime').value,
                        service: document.getElementById('editService').value,
                        status: document.getElementById('editStatus').value,
                    })
                })
                    .then(response => response.json())
                    .then(result => {
                        if (result.message) {
                            alert(result.message);
                            window.location.reload();  // Reload halaman setelah berhasil update
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Gagal memperbarui janji temu.');
                    });
            };

            // Tampilkan modal edit
            document.getElementById('editModal').style.display = 'block';
        });
}


// Open Delete Modal
function deleteAppointment(id) {
    document.getElementById('deleteModal').style.display = 'block';

    document.getElementById('confirmDelete').onclick = function () {
        fetch(`/manage-janji-temu/${id}`, {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
        })
            .then(response => response.json())
            .then(result => {
                alert(result.message);
                window.location.reload();
            });
    };
}

// Close Modal Functionality
document.querySelectorAll('.close-modal').forEach(button => {
    button.addEventListener('click', () => {
        document.getElementById('editModal').style.display = 'none';
        document.getElementById('deleteModal').style.display = 'none';
    });
});