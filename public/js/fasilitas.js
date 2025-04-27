//placeholder for images 500x300
const imageElements = document.querySelectorAll(".facility-image img");
imageElements.forEach(function (element) {
  element.setAttribute("src", "https://placehold.co/500x300/png");
});

//set facilities navbar to active when clicked
const facilitiesNavItems = document.querySelectorAll(".facilities-menu li a");
facilitiesNavItems.forEach(function (facilitiesNavItem) {
  facilitiesNavItem.addEventListener("click", function (e) {
    facilitiesNavItems.forEach(function (element) {
      element.classList.remove("active");
    });
    this.classList.add("active");
  });
});
