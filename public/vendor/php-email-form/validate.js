/**
 * PHP Email Form Validation - v3.11
 * URL: https://bootstrapmade.com/php-email-form/
 * Author: BootstrapMade.com
 */
(function () {
    "use strict";

    let forms = document.querySelectorAll(".php-email-form");

    forms.forEach(function (form) {
        form.addEventListener("submit", function (event) {
            event.preventDefault();

            const loading = form.querySelector(".loading");
            const errorMsg = form.querySelector(".error-message");
            const sentMsg = form.querySelector(".sent-message");

            const action = form.getAttribute("action");
            const recaptcha = form.getAttribute("data-recaptcha-site-key");

            if (!action) {
                showError("URL form (action) belum disetel!");
                return;
            }

            // Tampilkan indikator loading
            loading.classList.add("d-block");
            errorMsg.classList.remove("d-block");
            sentMsg.classList.remove("d-block");

            const formData = new FormData(form);

            // Tambahkan CSRF token jika ada input _token
            const csrfToken = form.querySelector('input[name="_token"]')?.value;
            if (csrfToken) {
                formData.append("_token", csrfToken);
            }

            // Jika menggunakan reCAPTCHA
            if (recaptcha) {
                if (typeof grecaptcha !== "undefined") {
                    grecaptcha.ready(function () {
                        try {
                            grecaptcha
                                .execute(recaptcha, {
                                    action: "php_email_form_submit",
                                })
                                .then((token) => {
                                    formData.set("recaptcha-response", token);
                                    submitForm(form, action, formData);
                                });
                        } catch (error) {
                            showError(error.message || error);
                        }
                    });
                } else {
                    showError("reCaptcha tidak tersedia!");
                }
            } else {
                submitForm(form, action, formData);
            }

            function submitForm(form, action, formData) {
                fetch(action, {
                    method: "POST",
                    body: formData,
                    headers: {
                        "X-Requested-With": "XMLHttpRequest",
                    },
                })
                    .then((response) => {
                        loading.classList.remove("d-block");

                        if (response.ok) {
                            return response.text();
                        } else {
                            return response.text().then((text) => {
                                throw new Error(
                                    text || `Error ${response.status}`
                                );
                            });
                        }
                    })
                    .then((data) => {
                        if (data.trim() === "OK") {
                            sentMsg.classList.add("d-block");
                            form.reset();
                        } else {
                            showError(data);
                        }
                    })
                    .catch((error) => {
                        showError(
                            error.message ||
                                "Terjadi kesalahan saat mengirim formulir."
                        );
                    });
            }

            function showError(message) {
                loading.classList.remove("d-block");
                errorMsg.textContent = message;
                errorMsg.classList.add("d-block");
            }
        });
    });
})();
