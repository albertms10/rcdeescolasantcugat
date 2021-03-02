document.querySelectorAll("[data-heading]")
        .forEach((heading) => {
            const blockTags = ["section", "div"];

            document.querySelector("#subNav ul").insertAdjacentHTML(
                "beforeend",
                `<li class="nav-item">
                    <a class="nav-link js-scroll-trigger py-1 px-3" href="#${heading.id}"
                        ${blockTags.includes(heading.tagName.toLowerCase()) ? "" : `data-offset="170"`}>
                        ${heading.dataset.heading || heading.innerText}
                    </a>
                </li>`
            );

            const navContainer = document.querySelector(`[data-nav-items="${heading.id}"]`);
            if (!navContainer) return;
            const subHeadings = heading.closest("section").querySelectorAll(`h3`);
            if (!subHeadings) return;

            navContainer.classList.add("bg-white", "rounded", "shadow-sm", "sticky-toc", "pt-2", "scrollspy");
            const nav = document.createElement("nav");
            nav.classList.add("nav", "flex-column", "overflow-scroll");

            navContainer.insertAdjacentHTML(
                "afterbegin",
                `<div class="main-header text-secondary small mx-3 mt-2 mb-1 pb-2 font-weight-bold">
                    ${heading.innerText}
                </div>`
            );

            subHeadings.forEach(subHeading => {
                nav.insertAdjacentHTML(
                    "beforeend",
                    `<a class="nav-link js-scroll-trigger" href="#${subHeading.id}" data-offset="170">
                        ${subHeading.innerHTML}
                    </a>`
                );
            });

            navContainer.appendChild(nav);
        });
