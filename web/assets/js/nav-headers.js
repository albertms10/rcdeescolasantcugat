const insertSubNavHeading = (heading) => {
    const blockTags = ["section", "div"];

    document.querySelector("#subNav ul").insertAdjacentHTML(
        "beforeend",
        `<li class="nav-item">
            <a class="nav-link js-scroll-trigger py-1 px-3" href="#${
                heading.id
            }"
                ${
                    blockTags.includes(heading.tagName.toLowerCase())
                        ? ""
                        : `data-offset="170"`
                }>
                ${heading.dataset.heading || heading.innerText}
            </a>
        </li>`
    );
};

const insertSideNavSubHeadings = (sideUl, subHeadings) => {
    sideUl.classList.add("nav", "flex-column", "overflow-scroll");

    subHeadings.forEach((subHeading) => {
        sideUl.insertAdjacentHTML(
            "beforeend",
            `<li>
                <a class="nav-link js-scroll-trigger" href="#${subHeading.id}" data-offset="170">
                    ${subHeading.innerHTML}
                </a>
            </li>`
        );
    });
};

const prepareSideNavContent = (heading, sideNavContainer, subHeadings) => {
    sideNavContainer.classList.add(
        "bg-white",
        "rounded",
        "shadow-sm",
        "sticky-toc",
        "scrollspy"
    );

    sideNavContainer.insertAdjacentHTML(
        "afterbegin",
        `<div class="main-header text-secondary font-weight-bold small mx-3 mt-2 mb-1 pt-3 pb-2 d-none d-lg-block"
              role="heading">
            ${heading.innerText}
        </div>`
    );

    const sideUl = document.createElement("ul");
    insertSideNavSubHeadings(sideUl, subHeadings);
    sideNavContainer.appendChild(sideUl);
};

const prepareSideNav = (heading) => {
    const sideNavContainer = document.querySelector(
        `[data-nav-items="${heading.id}"]`
    );
    if (!sideNavContainer) return;
    const subHeadings = heading.closest("section").querySelectorAll(`h3`);
    if (!subHeadings) return;

    prepareSideNavContent(heading, sideNavContainer, subHeadings);
};

document.querySelectorAll("[data-heading]").forEach((heading) => {
    insertSubNavHeading(heading);
    prepareSideNav(heading);
});

const scrollNavHeadingIntoView = () => {
    const navItem = document.querySelector("#subNav a.active");
    if (!navItem) return;

    navItem.scrollIntoView({
        inline: "nearest",
        behavior: "smooth",
    });
};

window.addEventListener("scroll", scrollNavHeadingIntoView);
