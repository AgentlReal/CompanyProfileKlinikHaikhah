document.addEventListener("DOMContentLoaded", function () {
    const loginForm = document.getElementById("loginForm");
    const errorMessage = document.getElementById("errorMessage");
    const togglePassword = document.querySelector(".toggle-password");
    const passwordInput = document.getElementById("password");

    // Toggle password visibility
    togglePassword.addEventListener("click", function () {
        const type =
            passwordInput.getAttribute("type") === "password"
                ? "text"
                : "password";
        passwordInput.setAttribute("type", type);

        // Toggle eye icon
        const icon = this.querySelector("i");
        icon.classList.toggle("fa-eye");
        icon.classList.toggle("fa-eye-slash");
    });

    // Handle form submission
    loginForm.addEventListener("submit", function (e) {
        e.preventDefault();

        const username = document.getElementById("username").value;
        const password = document.getElementById("password").value;
        const remember = document.getElementById("remember").checked;

        // Simple validation
        if (!username || !password) {
            showError("Please fill in all fields");
            return;
        }

        // Here you would typically make an API call to verify credentials
        // For demo purposes, we'll use a simple check
        if (username === "admin" && password === "admin123") {
            // Store remember me preference
            if (remember) {
                localStorage.setItem("adminUsername", username);
            } else {
                localStorage.removeItem("adminUsername");
            }

            // Redirect to admin dashboard
            window.location.href = "dashboard.html";
        } else {
            showError("Invalid username or password");
        }
    });

    // Show error message
    function showError(message) {
        errorMessage.textContent = message;
        errorMessage.style.opacity = "1";

        // Hide error after 3 seconds
        setTimeout(() => {
            errorMessage.style.opacity = "0";
        }, 3000);
    }

    // Check for remembered username
    const rememberedUsername = localStorage.getItem("adminUsername");
    if (rememberedUsername) {
        document.getElementById("username").value = rememberedUsername;
        document.getElementById("remember").checked = true;
    }
});
