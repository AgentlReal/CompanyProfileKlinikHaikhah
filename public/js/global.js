//Toggle Navbar
function toggleNavBar(e) {
  document.querySelector(".nav-links").classList.toggle("show");
}

document.querySelectorAll(".nav-icon").forEach(function (element) {
  element.addEventListener("click", (e) => toggleNavBar(e));
});

// Animation on Scroll
function isElementInViewport(el) {
  const rect = el.getBoundingClientRect();
  return (
    rect.top <=
      (window.innerHeight || document.documentElement.clientHeight) * 0.85 &&
    rect.bottom >= 0
  );
}

function handleScroll() {
  const elements = document.querySelectorAll(".aos");
  elements.forEach((element) => {
    if (isElementInViewport(element)) {
      element.classList.add("aos-on");
    }
  });
}

window.addEventListener("load", handleScroll);
window.addEventListener("scroll", handleScroll);

//Clear Service Card Entering Animation
const serviceCards = document.querySelectorAll(".service-card");
serviceCards.forEach(function (element) {
  element.addEventListener("mouseenter", function (e) {
    element.classList.remove("aos");
  });
});
