// ===============================
// 🌱 AgroAssist Global JS Script
// ===============================

document.addEventListener("DOMContentLoaded", () => {

    // ===========================
    //  Toggle Password Visibility
    // ===========================
    const togglePassword = document.querySelectorAll(".toggle-password");

    togglePassword.forEach(icon => {
        icon.addEventListener("click", () => {
            const input = document.querySelector(icon.dataset.target);
            if (input.type === "password") {
                input.type = "text";
                icon.textContent = "🙈";
            } else {
                input.type = "password";
                icon.textContent = "👁️";
            }
        });
    });

    // ===========================
    // form Validation
    // ===========================
    const forms = document.querySelectorAll("form");

    forms.forEach(form => {
        form.addEventListener("submit", (e) => {
            let valid = true;

            form.querySelectorAll("input[required], textarea[required]").forEach(input => {
                if (!input.value.trim()) {
                    valid = false;
                    input.style.border = "2px solid red";
                } else {
                    input.style.border = "1px solid #ccc";
                }
            });

            if (!valid) {
                e.preventDefault();
                showAlert("Please fill in all required fields", "error");
            }
        });
    });

    // ===========================
    // Confirm Delete Actions
    // ===========================
    const deleteButtons = document.querySelectorAll(".btn-delete");

    deleteButtons.forEach(btn => {
        btn.addEventListener("click", (e) => {
            const confirmDelete = confirm("Are you sure you want to delete this?");
            if (!confirmDelete) {
                e.preventDefault();
            }
        });
    });

    // ===========================
    // Table Search Filter
    // ===========================
    const searchInputs = document.querySelectorAll(".table-search");

    searchInputs.forEach(input => {
        input.addEventListener("keyup", () => {
            const filter = input.value.toLowerCase();
            const table = document.querySelector(input.dataset.table);
            const rows = table.querySelectorAll("tbody tr");

            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                row.style.display = text.includes(filter) ? "" : "none";
            });
        });
    });

    // ===========================
    //  Alert System
    // ===========================
    function showAlert(message, type = "success") {
        const alert = document.createElement("div");
        alert.className = `alert ${type}`;
        alert.textContent = message;

        document.body.appendChild(alert);

        setTimeout(() => {
            alert.remove();
        }, 3000);
    }

    // ===========================
    // Button Loading State
    // ===========================
    const buttons = document.querySelectorAll("button[type='submit']");

    buttons.forEach(btn => {
        btn.addEventListener("click", () => {
            btn.disabled = true;
            btn.textContent = "Processing...";
        });
    });

    // ===========================
    // Mobile Menu Toggle
    // ===========================
    const menuBtn = document.querySelector(".menu-toggle");
    const nav = document.querySelector(".nav");

    if (menuBtn && nav) {
        menuBtn.addEventListener("click", () => {
            nav.classList.toggle("active");
        });
    }

    // ===========================
    // Auto Hide Flash Messages
    // ===========================
    const flash = document.querySelectorAll(".flash");

    flash.forEach(msg => {
        setTimeout(() => {
            msg.style.display = "none";
        }, 4000);
    });

});