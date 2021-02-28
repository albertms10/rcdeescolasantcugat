document.querySelectorAll(`a.js-scroll-trigger[href*="#"]:not([href="#"])`)
        .forEach((scrollTrigger) => {
                scrollTrigger.addEventListener("click", function () {
                    if (
                        location.pathname.replace(/^\//, "") !== this.pathname.replace(/^\//, "")
                        && location.hostname !== this.hostname
                    ) return;

                    let target = $(this.hash);
                    if (!target.length) target = $(`[name=${this.hash.slice(1)}]`);

                    const offset = $(this).data("offset");
                    const scrollAmount = target.offset().top - (offset || 110);

                    if (!target.length) return;

                    $("html, body").animate({
                        scrollTop: scrollAmount > 0 ? scrollAmount : 0
                    }, 1000, "easeInOutExpo");

                    return false;
                });
            }
        );

if (typeof BSN !== "undefined")
    new BSN.ScrollSpy(document.querySelector("body"), {
        target: ".scrollspy",
        offset: 180
    });
