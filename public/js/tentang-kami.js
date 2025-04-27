// Mobile Navigation Toggle
const navLinks = document.querySelector(".nav-links");
const navIconBars = document.querySelector(".nav-icon-bars");
const navIconX = document.querySelector(".nav-icon-x");

navIconBars.addEventListener("click", () => {
    navLinks.classList.add("show");
});

navIconX.addEventListener("click", () => {
    navLinks.classList.remove("show");
});

// Smooth Scrolling for Anchor Links
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
        e.preventDefault();

        const targetId = this.getAttribute("href");
        if (targetId === "#") return;

        const targetElement = document.querySelector(targetId);
        if (targetElement) {
            window.scrollTo({
                top: targetElement.offsetTop - 80,
                behavior: "smooth",
            });

            // Close mobile menu if open
            navLinks.classList.remove("show");
        }
    });
});

// Timeline Animation
document.addEventListener("DOMContentLoaded", () => {
    setTimeout(() => {
        const timelineItems = document.querySelectorAll(".timeline-item");
        timelineItems.forEach((item, index) => {
            setTimeout(() => {
                item.querySelector(".timeline-content").classList.add("aos-on");
            }, index * 200);
        });
    }, 500);
});

// Newsletter Form Submission
const subscribeForm = document.querySelector(".subscribe-form");
if (subscribeForm) {
    subscribeForm.addEventListener("submit", function (e) {
        e.preventDefault();
        const emailInput = this.querySelector('input[type="email"]');
        if (emailInput.value) {
            alert(
                "Terima kasih! Anda telah berhasil berlangganan newsletter kami."
            );
            emailInput.value = "";
        } else {
            alert("Silakan masukkan alamat email Anda.");
        }
    });
}

// Achievements Counter Animation
function animateCounter(element, target, duration) {
    let start = 0;
    const increment = target > 100 ? 50 : 1;
    const stepTime = Math.abs(Math.floor(duration / (target / increment)));

    const timer = setInterval(() => {
        start += increment;
        element.textContent =
            start.toLocaleString() +
            (element.classList.contains("percent-value") ? "%" : "+");
        if (start >= target) {
            element.textContent =
                target.toLocaleString() +
                (element.classList.contains("percent-value") ? "%" : "+");
            clearInterval(timer);
        }
    }, stepTime);
}

function startCountersWhenVisible() {
    const achievementCards = document.querySelectorAll(".achievement-card");

    achievementCards.forEach((card) => {
        const rect = card.getBoundingClientRect();
        if (rect.top <= window.innerHeight && !card.dataset.counted) {
            card.dataset.counted = true;
            const counter = card.querySelector("h3");
            const target = parseInt(counter.textContent);
            counter.textContent = "0";
            animateCounter(counter, target, 2000);
        }
    });
}

window.addEventListener("scroll", startCountersWhenVisible);
window.addEventListener("load", startCountersWhenVisible);

// Image Gallery Hover Effect
const teamMembers = document.querySelectorAll(".team-member");
teamMembers.forEach((member) => {
    member.addEventListener("mouseenter", () => {
        member.querySelector(".member-image img").style.transform =
            "scale(1.1)";
    });

    member.addEventListener("mouseleave", () => {
        member.querySelector(".member-image img").style.transform = "scale(1)";
    });
});

// Add active class to current nav link
function setActiveNavLink() {
    const navLinks = document.querySelectorAll(".nav-links a");
    const currentPage = window.location.pathname.split("/").pop();

    navLinks.forEach((link) => {
        const linkHref = link.getAttribute("href");
        if (linkHref === currentPage || linkHref === `/${currentPage}`) {
            link.classList.add("active");
        } else if (
            currentPage === "about-us.html" &&
            link.getAttribute("href").includes("#testimonials")
        ) {
            link.classList.add("active");
        }
    });
}

document.addEventListener("DOMContentLoaded", setActiveNavLink);

//placeholder for images
const historyImageElements = document.querySelectorAll(".history-image img");
historyImageElements.forEach(function (element) {
    if (!element.getAttribute("src"))
        element.setAttribute("src", "https://placehold.co/600x400/png");
});
const memberImageElements = document.querySelectorAll(".member-image img");
memberImageElements.forEach(function (element) {
    if (!element.getAttribute("src"))
        element.setAttribute("src", "https://placehold.co/400x400/png");
});
