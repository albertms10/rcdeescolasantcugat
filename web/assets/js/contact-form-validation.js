window.addEventListener("load", () => {
    document.querySelectorAll("form.needs-validation")
            .forEach((form) => {
                form.addEventListener("submit", (event) => {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    } else {
                        const submitButton = form.querySelector(`button[type="submit"]`);
                        submitButton.innerHTML = `<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span> Enviant`;
                        submitButton.disabled = true;
                    }

                    form.classList.add("was-validated");
                }, false);
            });
}, false);
