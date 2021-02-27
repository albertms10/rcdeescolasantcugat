window.addEventListener("load", () => {
    const forms = document.querySelectorAll("form.needs-validation");

    Array.prototype.filter.call(forms, (form) => {
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
