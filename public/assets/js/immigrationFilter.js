const filterMenus = document.getElementById("select_country");

filterMenus.addEventListener("mouseover", function (e) {
    const filterMenusEl = e.target.closest(".filter_menus");
    if (!filterMenusEl) return;
    const allCountriesMenu = document.querySelectorAll(".filter_menus");
    const allCountriesEl = document.querySelectorAll(".countries_container");
    const currentContainer = document.getElementById(
        filterMenusEl.dataset.country
    );
    $(allCountriesEl).hide();
    $(currentContainer).show();
    $(allCountriesMenu).removeClass("active");
    $(filterMenusEl).addClass("active");
});


