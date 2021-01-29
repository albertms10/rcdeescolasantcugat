document.querySelectorAll("[data-nav-items]")
        .forEach((navContainer) => {
            navContainer.className = "bg-white rounded shadow-sm sticky-toc pt-2 scrollspy";

            const navId = navContainer.getAttribute("data-nav-items");
            const headers = document.querySelectorAll(`#${navId} h3`);

            if (headers.length === 0) return;

            const nav = document.createElement("nav");
            nav.className = "nav flex-column overflow-scroll";

            const mainHeader = document.querySelector(`#${navId} h2`);

            if (mainHeader) navContainer.insertAdjacentHTML("afterbegin", `<div class="text-secondary small mx-3 mt-2 mb-1 pb-2 font-weight-bold" style="text-transform:uppercase; letter-spacing:1px; border-bottom: 1px solid rgba(0,0,0,.125);">
                    ${mainHeader.innerText}
                </div>`);

            headers.forEach(header => {
                nav.insertAdjacentHTML("beforeend", `<a class="nav-link js-scroll-trigger" href="#${header.id}" data-offset="170">${header.textContent}</a>`);
            });

            navContainer.appendChild(nav);
        });
