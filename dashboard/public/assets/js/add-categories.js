const addFilesBtn = document.querySelector(".add-files-btn");
const modalEl = document.querySelector(".modal");

addFilesBtn.addEventListener("click", () => {
    modalEl.classList.add("show");
});

modalEl.addEventListener("click", (e) => {
    const btnIsAvailable = e.target.closest("[data-dismiss]");
    if (!btnIsAvailable) return;

    modalEl.classList.remove("show");
});

const fileUploadInputEl = document.querySelector(".form-file-input");

fileUploadInputEl.addEventListener("change", (e) => {
    fileValidation(e.target);
});

const successMessage = ` <strong class="alert alert-primary padding-fix">Image Added successfully.Please click upload.</strong>`;
const errorMessage = ` <strong class="alert alert-danger">Only images are allowed</strong>`;

function fileValidation(target) {
    const fileInput = target;

    const fileNames = [];

    for (let i = 0; i < target.files.length; i++) {
        fileNames.push(target.files[i].name);
    }

    // Allowing file type
    const allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif|\.webp)$/i;

    const validation = [];

    fileNames.forEach((file) => {
        if (!allowedExtensions.exec(file)) {
            validation.push(file);
        }
    });

    if (validation.length > 0) {
        document.querySelector(".modal-upload-message").innerHTML =
            errorMessage;
        fileInput.value = "";
    } else {
        document.querySelector(".modal-upload-message").innerHTML =
            successMessage;
    }
}
