// Category Tabs
document.addEventListener("DOMContentLoaded", function () {
    const tabs = document.querySelectorAll(".category-tab");
    const cards = document.querySelectorAll(".service-card");

    tabs.forEach((tab) => {
        tab.addEventListener("click", () => {
            // Remove active class from all tabs
            tabs.forEach((t) => t.classList.remove("active"));
            // Add active class to clicked tab
            tab.classList.add("active");

            const category = tab.dataset.category;

            // Show/hide cards based on category
            cards.forEach((card) => {
                if (category === "all" || card.dataset.category === category) {
                    card.style.display = "block";
                } else {
                    card.style.display = "none";
                }
            });
        });
    });

    // FAQ Accordion
    const faqItems = document.querySelectorAll(".faq-item");

    faqItems.forEach((item) => {
        const question = item.querySelector(".faq-question");

        question.addEventListener("click", () => {
            const isActive = item.classList.contains("active");

            // Close all FAQ items
            faqItems.forEach((faq) => faq.classList.remove("active"));

            // Open clicked item if it wasn't active
            if (!isActive) {
                item.classList.add("active");
            }
        });
    });
});
