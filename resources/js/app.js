require("./bootstrap");

const toggleMenu = document.querySelector(".menu button");
const closeButton = document.querySelector(".close-button");
const menu = document.querySelector(".hamburger-card");
toggleMenu.addEventListener("click", function () {
    const open = JSON.parse(toggleMenu.getAttribute("aria-expanded"));
    toggleMenu.setAttribute("aria-expanded", !open);
    menu.hidden = !menu.hidden;
});
closeButton.addEventListener("click", function () {
    const open = JSON.parse(toggleMenu.getAttribute("aria-expanded"));
    toggleMenu.setAttribute("aria-expanded", !open);
    menu.hidden = !menu.hidden;
});
