//Toggle Navbar
function toggleNavBar(e) {
    document.querySelector(".nav-links").classList.toggle("show");
}

document.querySelectorAll(".nav-icon").forEach(function (element) {
    element.addEventListener("click", (e) => toggleNavBar(e));
});

//Entering  Animation
const animatedOnScrollElements = document.querySelectorAll(".aos");

function runAnimationOnSroll() {
    animatedOnScrollElements.forEach(function (element) {
        if (element.getBoundingClientRect().top < window.innerHeight * 0.9) {
            element.classList.add("aos-on");
        }
    });
}

runAnimationOnSroll();
window.addEventListener("scroll", () => runAnimationOnSroll());
