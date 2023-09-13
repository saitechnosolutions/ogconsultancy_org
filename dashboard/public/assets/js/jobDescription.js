const formAddBtn = document.getElementById("form_add_btn");
let onlineStatusContainer = document.querySelectorAll(
    ".online_status_attribute_container"
);
let formDeleteBtn = document.querySelectorAll(".form_delete_btn");

const attributeFormEl = document.getElementById("attrubute_form_element");

formAddBtn.addEventListener("click", (e) => {
    e.preventDefault();
    const html = `
        <div class="row mb-3 col-md-12 row d-flex align-items-center online_status_attribute_container">
            <div class="col-md-5" id="form-title-container">
                <input type="text" class="form-control" name="attribute[]" placeholder="attribute" id="banner-title"
                    required />
            </div>
            <div class="col-md-5" id="form-title-container">
                <textarea type="text" class="form-control editor_modal" name="value[]" placeholder="value" id="banner-title"
                    required ></textarea>
            </div>
            <div class="col-md-2">
                <button class="btn btn-danger btn-sm waves-effect waves-light px-3 py-2 form_delete_btn">
                    Delete
                </button>
            </div>
        </div>

        `;

    onlineStatusContainer = document.querySelectorAll(
        ".online_status_attribute_container"
    );
   
    onlineStatusContainer[onlineStatusContainer.length - 1].insertAdjacentHTML(
        "afterend",
        html
    
    );
    jobDescCkEditors()
    formDeleteBtn = document.querySelectorAll(".form_delete_btn");
    
    deleteBtnUpdate();
});

function deleteBtnUpdate() {
    formDeleteBtn.forEach((btn) => {
        btn.addEventListener("click", function (e) {
            e.preventDefault();
            this.closest(".online_status_attribute_container").remove();
        });
    });
}

deleteBtnUpdate();

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
            }, 300);
        } catch (error) {
            console.log(error);
        }
    });
});


// function initCkEditor(el) {
//     ClassicEditor.create(el, {
//         removePlugins: [
//             "CKFinderUploadAdapter",
//             "CKFinder",
//             "EasyImage",
//             "Image",
//             "ImageCaption",
//             "ImageStyle",
//             "ImageToolbar",
//             "ImageUpload",
//             "MediaEmbed",
//             "Table",
//         ],
//         heading: {
//             options: [
//                 {
//                     model: "paragraph",
//                     title: "Paragraph",
//                     class: "ck-heading_paragraph",
//                 },
//             ],
//         },
//     }).catch((error) => {
//         console.error(error);
//     });
// }

// function jobDescCkEditors() {
//     const ckEditors = document.querySelectorAll(".editor_modal");
//     ckEditors.forEach((el) => {
//         if (el.nextElementSibling?.classList.contains("ck-editor")) return;
//         initCkEditor(el);
//     });
// }

// jobDescCkEditors();

