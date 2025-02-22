// Smooth Scroll
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
        e.preventDefault();

        const targetId = this.getAttribute("href");
        const targetElement = document.querySelector(targetId);
        const navHeight = document.querySelector("nav").offsetHeight;

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
    //console.log("ready!");

    AOS.init({
        once: true,
    });
});
