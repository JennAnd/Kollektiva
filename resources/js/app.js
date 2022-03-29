require("./bootstrap");

const toggleMenu = document.querySelector(".menu button");
const closeButton = document.querySelector(".close-button");
const menu = document.querySelector(".hamburger-card");
const openMenu = document.getElementById("open-menu");
toggleMenu.addEventListener("click", function () {
    const open = JSON.parse(toggleMenu.getAttribute("aria-expanded"));
    toggleMenu.setAttribute("aria-expanded", !open);
    menu.hidden = !menu.hidden;
    if (open) {
        openMenu.style.display = "block";
    } else {
        openMenu.style.display = "none";
    }
});
closeButton.addEventListener("click", function () {
    const open = JSON.parse(toggleMenu.getAttribute("aria-expanded"));
    toggleMenu.setAttribute("aria-expanded", !open);
    menu.hidden = !menu.hidden;
});
