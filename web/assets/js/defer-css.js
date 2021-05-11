const deferCSS = (href) => {
    const deferredLink = document.createElement("link");
    deferredLink.rel = "stylesheet";
    deferredLink.href = href;
    deferredLink.type = "text/css";

    const firstLink = document.getElementsByTagName("link")?.[0];
    if (firstLink) {
        firstLink.parentNode.insertBefore(deferredLink, firstLink);
    } else {
        document
            .getElementsByTagName("head")?.[0]
            .insertAdjacentElement("beforeend", deferredLink);
    }
};
