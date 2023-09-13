const onlineStatusInput = document.getElementById("online_status_input");
const onlineStatusInputMobile = document.getElementById(
    "online_status_input_mobile"
);
const onlineStatusForm = document.getElementById("online_status_form");
const onlineStatusFormMobile = document.getElementById(
    "online_status_form_mobile"
);
const jobDescriptionInput = document.getElementById("job_description_input");
const jobDescriptionInputMobile = document.getElementById(
    "job_description_input_mobile"
);
const jobDescriptionForm = document.getElementById("job_description_form");
const jobDescriptionFormMobile = document.getElementById(
    "job_description_form_mobile"
);
const e_services_frame = document.getElementById("e_services_iframe");

onlineStatusForm.addEventListener("submit", async (e) => {
    try {
        e.preventDefault();
        const idValue = onlineStatusInput.value;
        const loader = `
       <div class="e_services-preload-logo"></div>
    `;

        e_services_frame.innerHTML = "";
        e_services_frame.innerHTML = loader;

        const res = await fetch(`online_status_check/${idValue}`, {
            method: "POST",
            headers: {
                "X-CSRF-Token":
                    document.querySelector("[name = '_token']").value,
            },
        });

        if (res.status != 200) {
            throw new Error("Something went wrong.Try Again Later");
            return;
        }

        const data = await res.text();

        setTimeout(() => {
            e_services_frame.innerHTML = "";
            e_services_frame.innerHTML = data;
        }, 1500);
    } catch (error) {
        const errorHtml = `
            <div class="alert alert-danger" style="margin: 0 auto;margin-top:25%;font-size:28px">
                ${error.message}
            </div>
        `;

        e_services_frame.innerHTML = errorHtml;
    }
});

onlineStatusFormMobile.addEventListener("submit", async (e) => {
    try {
        e.preventDefault();
        const idValue = onlineStatusInputMobile.value;
        const loader = `
       <div class="e_services-preload-logo"></div>
    `;

        e_services_frame.innerHTML = "";
        e_services_frame.innerHTML = loader;

        document.querySelector("#status_view").scrollIntoView({
            behavior: "smooth",
            block: "start",
            inline: "nearest",
        });

        const res = await fetch(`online_status_check/${idValue}`, {
            method: "POST",
            headers: {
                "X-CSRF-Token":
                    document.querySelector("[name = '_token']").value,
            },
        });

        if (res.status != 200) {
            throw new Error("Something went wrong.Try Again Later");
            return;
        }

        const data = await res.text();

        setTimeout(() => {
            e_services_frame.innerHTML = "";
            e_services_frame.innerHTML = data;
        }, 1500);
    } catch (error) {
        const errorHtml = `
        <div class="alert alert-danger" style="margin: 0 auto;margin-top:25%;font-size:28px">
            ${error.message}
        </div>
    `;

        e_services_frame.innerHTML = errorHtml;
    }
});

jobDescriptionForm.addEventListener("submit", async (e) => {
    try {
        e.preventDefault();
        const idValue = jobDescriptionInput.value;
        const loader = `
       <div class="e_services-preload-logo"></div>
    `;

        e_services_frame.innerHTML = "";

        e_services_frame.innerHTML = loader;

        const res = await fetch(`job_description/${idValue}`, {
            method: "POST",
            headers: {
                "X-CSRF-Token":
                    document.querySelector("[name = '_token']").value,
            },
        });
        if (res.status != 200) {
            throw new Error("Something went wrong.Try Again Later");
            return;
        }

        const data = await res.text();

        setTimeout(() => {
            e_services_frame.innerHTML = "";
            e_services_frame.innerHTML = data;
        }, 1500);
    } catch (error) {
        const errorHtml = `
        <div class="alert alert-danger" style="margin: 0 auto;margin-top:25%;font-size:28px">
            ${error.message}
        </div>
    `;

        e_services_frame.innerHTML = errorHtml;
    }
});

jobDescriptionFormMobile.addEventListener("submit", async (e) => {
    try {
        e.preventDefault();
        const idValue = jobDescriptionInputMobile.value;
        const loader = `
       <div class="e_services-preload-logo"></div>
    `;

        e_services_frame.innerHTML = "";
        e_services_frame.innerHTML = loader;
        document.querySelector("#status_view").scrollIntoView({
            behavior: "smooth",
            block: "start",
            inline: "nearest",
        });

        const res = await fetch(`job_description/${idValue}`, {
            method: "POST",
            headers: {
                "X-CSRF-Token":
                    document.querySelector("[name = '_token']").value,
            },
        });

        if (res.status != 200) {
            throw new Error("Something went wrong.Try Again Later");
            return;
        }

        const data = await res.text();

        setTimeout(() => {
            e_services_frame.innerHTML = "";
            e_services_frame.innerHTML = data;
        }, 1500);
    } catch (error) {
        const errorHtml = `
        <div class="alert alert-danger" style="margin: 0 auto;margin-top:25%;font-size:28px">
            ${error.message}
        </div>
    `;

        e_services_frame.innerHTML = errorHtml;
    }
});

// online_status_input_container
$("#online_status_input_container").click(function (e) {
    $(".online_status_form_mobile").slideToggle("slow");
    this.querySelector(".e_services_down_arrow").classList.toggle("active");
});

$("#job_description_input_container").click(function (e) {
    $(".job_description_form_mobile").slideToggle("slow");
    this.querySelector(".e_services_down_arrow").classList.toggle("active");
});

setTimeout(() => {
    // $("#eServicesFormModal").modal("show");

    $("input").focus(function () {
        $(this).parents(".field-container").addClass("focused");
    });

    $("input").blur(function () {
        const inputValue = $(this).val();
        if (inputValue == "") {
            $(this).parents(".field-container").removeClass("focused");
        }
    });
}, 1000);
