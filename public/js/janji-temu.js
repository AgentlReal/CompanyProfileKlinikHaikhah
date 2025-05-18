const appointmentForm = document.getElementById("appointmentForm");
document.getElementById("date").value = new Date().toISOString().split("T")[0];

let availableTime = [];
for (
    let i = parseInt(new Date().toTimeString().split(" ")[0].slice(0, 2)) + 1;
    i < 24;
    i++
) {
    availableTime.push(i);
}
document.getElementById("time").innerHTML = `
    <option value="">Pilih Waktu</option>
    ${availableTime
        .map(
            (time) =>
                `<option value="${time < 10 ? `0${time}:00` : `${time}:00`}">${
                    time < 10 ? `0${time}:00` : `${time}:00`
                }</option>`
        )
        .join("")}
`;

appointmentForm.addEventListener("submit", function (e) {
    e.preventDefault();
    const formData = new FormData(appointmentForm);
    for (data of formData) {
        console.log(data);
    }
    for (data of formData) {
        if (data[0] === "nama_lengkap") {
            if (data[1].length > 90) {
                alert("Nama tidak boleh lebih dari 90 karakter");
                return;
            }
        } else if (data[0] === "nomor_telepon") {
            if (!data[1].startsWith("0")) {
                alert("Nomor Telepon harus diawali dengan 0");
                return;
            } else if (data[1].length > 15) {
                alert("Nomor Telepon tidak boleh lebih dari 15 karakter");
                return;
            }
        } else if (data[0] === "email") {
            if (data[1].length > 90) {
                alert("Email tidak boleh lebih dari 90 karakter");
                return;
            } else if (!data[1].includes("@")) {
                alert("Email harus memiliki karakter @");
                return;
            }
        } else if (data[0] === "layanan") {
            if (
                ![
                    "Konsultasi Umum",
                    "Konsultasi Spesialis",
                    "Perawatan Gigi",
                    "Kesehatan Anak",
                    "Medical Check-up",
                ].includes(data[1])
            ) {
                alert(
                    "Layanan harus salah satu dari 'Konsultasi Umum','Konsultasi Spesialis','Perawatan Gigi','Kesehatan Anak','Medical Check-up'"
                );
                return;
            }
        } else if (data[0] === "tanggal") {
            const inputDate = new Date(data[1]);
            const minDate = new Date();
            minDate.setHours(0);
            minDate.setMinutes(0);
            minDate.setSeconds(0);
            minDate.setMilliseconds(0);
            if (inputDate < minDate) {
                alert("Tanggal tidak boleh kurang dari tanggal saat ini");
                return;
            }
        } else if (data[0] === "waktu") {
            if (!availableTime.includes(parseInt(data[1].slice(0, 2)))) {
                alert("Waktu tidak valid");
                return;
            }
        } else if (data[0] === "Keluhan_Gejala") {
            if (data[1].length > 1000) {
                alert("Keluhan/Gejala tidak boleh lebih dari 1000 karakter");
                return;
            }
        } else if (data[0] === "catatan_tambahan") {
            if (data[1].length > 1000) {
                alert("Catatan tambahan tidak boleh lebih dari 1000 karakter");
                return;
            }
        }
    }
    fetch(`/janji-temu`, {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
            Accept: "application/json",
        },
        body: formData,
    })
        .then((res) => res.json())
        .then((res) => alert(res.message))
        .catch((err) => alert(err));
});
