const footerNavLinks = document.querySelectorAll(".footer_nav_link");
const footerNavLinksMobile = document.querySelectorAll(
    ".footer_nav_link.mobile"
);

const homeContentContainers = document.querySelectorAll(
    ".home_content_container"
);

const footerNavigationListsContainer = document.querySelector(
    ".navigation_links_container_lists"
);
const footerNavigationListsContainerMobile = document.querySelector(
    ".navigation_links_container_lists.mobile"
);

const homeSection = document.getElementById("home");
const aboutSection = document.getElementById("about");
const immigrationSection = document.getElementById("immigration");
const successSection = document.getElementById("success");
const contactSection = document.getElementById("contact");
const eServicesSection = document.getElementById("e_services");

// remove all home section to display none
function clearHomeContent() {
    homeContentContainers.forEach((item) => {
        if (item.classList.contains("active")) {
            item.classList.add("not-active");
        }

        setTimeout(() => {
            const element = document.querySelectorAll(".not-active");
            if (!element) return;
            element.forEach((el) => {
                el.classList.remove("not-active");
            });
        }, 200);
        item.classList.remove("active");
    });
}

// remove all bottom lines function

function clearBottomLine() {
    footerNavLinks.forEach((item) => {
        item.classList.remove("active");
    });
}

function clearBottomLineMobile() {
    footerNavLinksMobile.forEach((item) => {
        item.classList.remove("active");
    });
}

function ogDesktop() {
    if (innerWidth > 768) {
        footerNavigationListsContainer.addEventListener("click", (e) => {
            if (
                e.target.closest(".footer_nav_link").dataset.target ==
                "prImport"  || e.target.closest(".footer_nav_link").dataset.target ==
                "careers"
            ) {
                return;
            }

            e.preventDefault();
            const target = e.target.closest(".footer_nav_link");
            const targetValue =
                e.target.closest(".footer_nav_link").dataset.target;

            switch (targetValue) {
                case "home":
                    clearHomeContent();
                    homeSection.classList.add("active");
                    clearBottomLine();
                    target.classList.add("active");
                    break;

                case "about":
                    clearHomeContent();
                    aboutSection.classList.add("active");
                    clearBottomLine();
                    target.classList.add("active");
                    break;

                case "immigration":
                    clearHomeContent();
                    immigrationSection.classList.add("active");
                    clearBottomLine();
                    target.classList.add("active");
                    break;

                case "success":
                    clearHomeContent();
                    successSection.classList.add("active");
                    clearBottomLine();
                    target.classList.add("active");
                    break;
                case "contact":
                    clearHomeContent();
                    contactSection.classList.add("active");
                    clearBottomLine();
                    target.classList.add("active");
                    break;

                case "e_services":
                    clearHomeContent();
                    eServicesSection.classList.add("active");
                    clearBottomLine();
                    target.classList.add("active");
                    break;

                default:
                    break;
            }
        });
    }
}

ogDesktop();
ogMobile();

function ogMobile() {
    if (innerWidth < 1050) {
        window.addEventListener("scroll", () => {
            if (scrollY > 200) {
                document
                    .querySelector(".footer_section_container.mobile")
                    .classList.add("active");
            } else {
                document
                    .querySelector(".footer_section_container.mobile")
                    .classList.remove("active");
            }
        });

        footerNavigationListsContainerMobile.addEventListener("click", (e) => {
            const target = e.target.closest(".footer_nav_link.mobile");
            const targetValue = e.target.closest(".footer_nav_link.mobile")
                .dataset.target;

            switch (targetValue) {
                case "home":
                    clearBottomLineMobile();
                    target.classList.add("active");
                    break;

                case "about":
                    clearBottomLineMobile();
                    target.classList.add("active");
                    break;

                case "immigration":
                    clearBottomLineMobile();
                    target.classList.add("active");
                    break;

                case "success":
                    clearBottomLineMobile();
                    target.classList.add("active");
                    break;
                case "contact":
                    clearBottomLineMobile();
                    target.classList.add("active");
                    break;

                case "e_services":
                    clearBottomLineMobile();
                    target.classList.add("active");
                    break;

                default:
                    break;
            }
        });
    }
}

window.addEventListener("resize", () => {
    if (innerWidth > 1050) {
        ogDesktop();
    }
    if (innerWidth < 1050) {
        ogMobile();
    }
});