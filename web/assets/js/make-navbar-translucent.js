const makeNavbarTranslucent = () => {
    const mainNav = document.getElementById("mainNav");
    const subNav = document.getElementById("subNav");
    const navbarLogo = document.getElementById("navbar-logo");

    if (window.scrollY > 100) {
        mainNav.classList.remove("translucent");
        subNav.style.opacity = "1";
        navbarLogo.classList.remove("translucent", "blanc");
        navbarLogo.classList.add("color");
    } else {
        mainNav.classList.add("translucent");
        subNav.style.opacity = "0";
        navbarLogo.classList.remove("color");
        navbarLogo.classList.add("translucent", "blanc");
    }
};

makeNavbarTranslucent();

window.onscroll = makeNavbarTranslucent;
