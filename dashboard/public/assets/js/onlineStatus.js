function initCkEditor(className) {
    ClassicEditor.create(document.querySelector(className), {
        removePlugins: [
            "CKFinderUploadAdapter",
            "CKFinder",
            "EasyImage",
            "Image",
            "ImageCaption",
            "ImageStyle",
            "ImageToolbar",
            "ImageUpload",
            "MediaEmbed",
            "Table",
        ],
    }).catch((error) => {
        console.error(error);
    });
}

initCkEditor("#editor");

const addListUpdateBtn = document.getElementById("add_list_btn_update");

addListUpdateBtn && addListUpdateBtn.click();

const viewBtn = document.querySelectorAll(".view_btn");
let counter = 0;

viewBtn.forEach((btn) => {
    btn.addEventListener("click", async function (e) {
        try {
            e.preventDefault();
            const viewModalContainer =
                document.getElementById("view_modal_body");
            const html = `
                            <div class="preloader_container">
                                <div class="preload-logo">
                                    <img src="/assets/images/fav1.png"
                                        alt="loading">
                                </div>
                            </div> `;

            viewModalContainer.innerHTML = "";
            viewModalContainer.innerHTML = html;
            const id = this.dataset.id || this.closest(".view_btn").dataset.id;
            if (id == "undefined") return;

            let res = null;
            if (
                this.dataset.jobDescription ||
                this.closest(".view_btn").dataset.jobDescription
            ) {
                res = await fetch(`/job_description/${id}/show`, {
                    headers: {
                        "X-CSRF-Token":
                            document.querySelector("[name = '_token']").value,
                    },
                });
            } else {
                res = await fetch(`/online_status/${id}/show`, {
                    headers: {
                        "X-CSRF-Token":
                            document.querySelector("[name = '_token']").value,
                    },
                });
            }

            const data = await res.text();
            document.querySelectorAll(".modal2")?.forEach((item) => {
                item.remove();
            });

            setTimeout(() => {
                viewModalContainer.innerHTML = "";
                viewModalContainer.innerHTML = data;
                initCkEditor("#editor2");
            }, 300);
        } catch (error) {
            console.log(error);
        }
    });
});
