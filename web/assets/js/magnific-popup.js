$("#portfolio").magnificPopup({
    delegate: "a",
    type: "image",
    tLoading: "S’està carregant la imatge #%curr%...",
    mainClass: "mfp-img-mobile",
    gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0, 1],
    },
    image: {
        tError: `La <a href="%url%">imatge #%curr%</a> no s’ha pogut carregar.`,
    },
});
