document.addEventListener("DOMContentLoaded", function () {
    // Check if user is logged in
    //   if (!localStorage.getItem("adminUsername")) {
    //     window.location.href = "login.html";
    //     return;
    //   }

    // Sample appointments data (in real app, this would come from a database)
    let appointments = [
        {
            id: 1,
            date: "2025-03-20",
            time: "09:00",
            name: "John Doe",
            service: "Konsultasi Umum",
            phone: "+62812345678",
            email: "john@example.com",
            status: "pending",
        },
        {
            id: 2,
            date: "2025-03-21",
            time: "10:00",
            name: "Jane Smith",
            service: "Perawatan Gigi",
            phone: "+62876543210",
            email: "jane@example.com",
            status: "confirmed",
        },
    ];

    // DOM Elements
    const tableBody = document.getElementById("appointmentsTableBody");
    const searchInput = document.getElementById("searchInput");
    const statusFilter = document.getElementById("statusFilter");
    const editModal = document.getElementById("editModal");
    const deleteModal = document.getElementById("deleteModal");
    const editForm = document.getElementById("editForm");
    const logoutBtn = document.getElementById("logoutBtn");

    // Initialize table
    function renderTable(data) {
        tableBody.innerHTML = "";
        data.forEach((appointment) => {
            const row = document.createElement("tr");
            row.innerHTML = `
                  <td>${appointment.date} ${appointment.time}</td>
                  <td>${appointment.name}</td>
                  <td>${appointment.service}</td>
                  <td>
                      <div>${appointment.phone}</div>
                      <div style="font-size: 12px; color: #666;">${appointment.email}</div>
                  </td>
                  <td><span class="status-badge status-${appointment.status}">${appointment.status}</span></td>
                  <td>
                      <div class="action-buttons">
                          <button class="btn-edit" onclick="editAppointment(${appointment.id})">
                              <i class="fas fa-edit"></i>
                              Edit
                          </button>
                          <button class="btn-delete" onclick="deleteAppointment(${appointment.id})">
                              <i class="fas fa-trash-alt"></i>
                              Delete
                          </button>
                      </div>
                  </td>
              `;
            tableBody.appendChild(row);
        });
    }

    // Search functionality
    searchInput.addEventListener("input", function () {
        const searchTerm = this.value.toLowerCase();
        const filteredData = appointments.filter((appointment) => {
            return (
                appointment.name.toLowerCase().includes(searchTerm) ||
                appointment.service.toLowerCase().includes(searchTerm) ||
                appointment.phone.includes(searchTerm) ||
                appointment.email.toLowerCase().includes(searchTerm)
            );
        });
        renderTable(filteredData);
    });

    // Status filter
    statusFilter.addEventListener("change", function () {
        const status = this.value;
        const filteredData =
            status === "all"
                ? appointments
                : appointments.filter(
                      (appointment) => appointment.status === status
                  );
        renderTable(filteredData);
    });

    // Edit appointment
    window.editAppointment = function (id) {
        const appointment = appointments.find((a) => a.id === id);
        if (!appointment) return;

        // Populate form
        document.getElementById("editName").value = appointment.name;
        document.getElementById("editDate").value = appointment.date;
        document.getElementById("editTime").value = appointment.time;
        document.getElementById("editService").value = appointment.service;
        document.getElementById("editStatus").value = appointment.status;

        // Store appointment ID for form submission
        editForm.dataset.appointmentId = id;

        // Show modal
        editModal.classList.add("show");
    };

    // Handle edit form submission
    editForm.addEventListener("submit", function (e) {
        e.preventDefault();

        const id = parseInt(this.dataset.appointmentId);
        const appointmentIndex = appointments.findIndex((a) => a.id === id);

        if (appointmentIndex === -1) return;

        // Update appointment data
        appointments[appointmentIndex] = {
            ...appointments[appointmentIndex],
            name: document.getElementById("editName").value,
            date: document.getElementById("editDate").value,
            time: document.getElementById("editTime").value,
            service: document.getElementById("editService").value,
            status: document.getElementById("editStatus").value,
        };

        // Close modal and refresh table
        editModal.classList.remove("show");
        renderTable(appointments);
    });

    // Delete appointment
    window.deleteAppointment = function (id) {
        deleteModal.classList.add("show");
        deleteModal.dataset.appointmentId = id;
    };

    // Handle delete confirmation
    document
        .getElementById("confirmDelete")
        .addEventListener("click", function () {
            const id = parseInt(deleteModal.dataset.appointmentId);
            appointments = appointments.filter((a) => a.id !== id);
            deleteModal.classList.remove("show");
            renderTable(appointments);
        });

    // Close modals
    document.querySelectorAll(".close-modal, .btn-cancel").forEach((button) => {
        button.addEventListener("click", function () {
            editModal.classList.remove("show");
            deleteModal.classList.remove("show");
        });
    });

    // Handle logout
    logoutBtn.addEventListener("click", function () {
        localStorage.removeItem("adminUsername");
        window.location.href = "login.html";
    });

    // Initial render
    renderTable(appointments);
});
