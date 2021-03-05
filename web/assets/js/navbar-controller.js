const toggleNavbarButton = () => {
    const navbarToggler = document.querySelector(
        "#mainNav button.navbar-toggler"
    );

    if (navbarToggler.classList.contains("collapsed")) {
        navbarToggler.firstElementChild.classList.add("fa-chevron-down");
        navbarToggler.firstElementChild.classList.remove("fa-chevron-up");
    } else {
        navbarToggler.firstElementChild.classList.remove("fa-chevron-down");
        navbarToggler.firstElementChild.classList.add("fa-chevron-up");
    }
};

document
    .querySelector("#mainNav button.navbar-toggler")
    .addEventListener("click", toggleNavbarButton);

document
    .querySelector(".navbar-collapse")
    .addEventListener("hide.bs.collapse", toggleNavbarButton);
