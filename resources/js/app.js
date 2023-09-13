import "./bootstrap";


import "nice-select2";

const footerNavLinks = document.querySelectorAll(".ooter_nav_link");

const mainSection = document.querySelector(".main_content_section_container");

footerNavLinks.forEach((link) => {
    link.addEventListener("mouseover", () => {
        mainSection.style.background = "#fff";
    });
});
