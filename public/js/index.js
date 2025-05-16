//Testimonials
document.addEventListener("DOMContentLoaded", function () {
    const testimonials = [
        {
            rating: 5,
            text: "Waktu anak saya demam tinggi malem Minggu, saya panik karena klinik lain tutup. Alhamdulillah Klinik Haikhah buka 24 jam! Dokternya langsung tanggap dan anak saya cepat ditangani. Terima kasih tim!",
            name: "Putri",
            title: "Orang Tua Pasien",
        },
        {
            rating: 5,
            text: "Awalnya coba-coba ke Klinik Haikhah karena dekat rumah, tapi sekarang malah betah! Dokternya sabar banget jelasin keluhan saya, nggak buru-buru. Ruangannya bersih dan nyaman. Recommended deh!",
            name: "Sinta",
            title: "Pasien",
        },
        {
            rating: 5,
            text: "Setahun lalu saya sering sakit gigi parah sampai nggak bisa makan. Setelah konsul di Klinik Haikhah, dr. Niha kasih solusi yang jelas dan tindakannya nggak sakit banget (seriusan!). Sekarang gigi saya sehat, nggak takut ke dokter lagi!",
            name: "Rudi",
            title: "Pasien",
        },
    ];

    const testimonialCard = document.querySelector(".testimonial-card");
    const buttons = document.querySelectorAll(".testimonial-btn");
    let currentIndex = 0;
    buttons.forEach((button, index) => {
        button.addEventListener("click", () => {
            if (index < testimonials.length) {
                currentIndex = index;
                updateTestimonial(currentIndex);
                setActiveButton(currentIndex);
            }
        });
    });

    setInterval(() => {
        currentIndex = (currentIndex + 1) % testimonials.length;
        updateTestimonial(currentIndex);
        setActiveButton(currentIndex);
    }, 3000);

    function updateTestimonial(index) {
        const testimonial = testimonials[index];

        // Update stars if rating is not 5
        let stars = "";
        for (let i = 0; i < testimonial.rating; i++) {
            stars += '<i class="fas fa-star"></i>';
        }

        testimonialCard.innerHTML = `
            <div class="rating">
                ${stars}
            </div>
            <p class="testimonial-text">"${testimonial.text}"</p>
            <div class="client-info">
                <div class="client-name">
                    <h4>${testimonial.name}</h4>
                    <span>${testimonial.title}</span>
                </div>
            </div>
        `;
    }

    function setActiveButton(activeIndex) {
        buttons.forEach((button, index) => {
            if (index === activeIndex) {
                button.classList.add("active");
            } else {
                button.classList.remove("active");
            }
        });
    }

    updateTestimonial(currentIndex);
});

//Clear Service Card Entering Animation
const serviceCards = document.querySelectorAll(".service-card");
serviceCards.forEach(function (element) {
    element.addEventListener("mouseenter", function (e) {
        element.classList.remove("aos");
    });
});
