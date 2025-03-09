function clearActiveNav() {
    document.querySelectorAll("nav ul li a").forEach((navItem) => {
        navItem.classList.remove("active");
    });
}

// Anchor smooth scroll
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
        e.preventDefault();

        const targetId = this.getAttribute("href");
        const targetElement = document.querySelector(targetId);
        const navHeight = document.querySelector("nav").offsetHeight;

        // Don't trigger on mobile menu toggle
        if (targetId !== "#mobile-menu") {
            clearActiveNav();
            this.classList.add("active");
        }

        // Hide mobile menu when nav item clicked
        if (window.innerWidth <= 991 && targetId !== "#top") {
            document
                .querySelector("nav ul")
                .classList.toggle("mobile-menu-display");
        }

        if (targetElement) {
            // Calculate the position to scroll to
            const targetPosition =
                targetElement.getBoundingClientRect().top +
                window.scrollY -
                navHeight;

            // Smooth scroll to the target position
            window.scrollTo({
                top: targetPosition,
                behavior: "smooth",
            });
        }
    });
});

// Document Ready
document.addEventListener("DOMContentLoaded", function () {
    // Nav mobile toggle
    mobileToggle = document.getElementById("mobile-toggle");
    mobileToggle.addEventListener("click", function () {
        mobileToggle.classList.toggle("open");
        document
            .querySelector("nav ul")
            .classList.toggle("mobile-menu-display");
    });

    // Scroll to top
    document.addEventListener("scroll", function () {
        let scrollToTop = document.getElementById("scroll-to-top");
        if (scrollY >= 50) {
            scrollToTop.classList.remove("hide");
        } else {
            scrollToTop.classList.add("hide");
        }
    });

    // AOS init
    if (window.innerWidth <= 991) {
        AOS.init({ disable: true });
    } else {
        AOS.init({
            once: true,
        });
    }
});
