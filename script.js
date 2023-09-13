
document.addEventListener("DOMContentLoaded", function () {
    const toggleBtn = document.querySelector(".toggle-btn");
    const navLinks = document.querySelector(".nav-links");
    const list = document.querySelectorAll(".list a");

toggleBtn.addEventListener("click", function () {
    // Toggle the 'active' class on the navbar to show/hide it
    navLinks.classList.toggle("active");
});

list.forEach(function (link) {
    link.addEventListener("click", function (event) {
        // Prevent the default link behavior (page reload)
        event.preventDefault();

        // Get the target section ID from the link's href attribute
        const targetId = link.getAttribute("href").slice(1);

        // Collapse the menu (remove 'active' class)
        navLinks.classList.remove("active");

        // Scroll to the target section
        const targetSection = document.getElementById(targetId);
        if (targetSection) {
            targetSection.scrollIntoView({ behavior: "smooth" });
        }
    });
});
});

const navbar = document.querySelector(".navbar");
const navbarHeight = navbar.offsetHeight;
document.documentElement.style.setProperty(
    "--scroll-padding",
    navbarHeight + "px"
);
