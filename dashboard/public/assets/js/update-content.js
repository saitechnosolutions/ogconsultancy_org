const addItemBtn = document.querySelector(".add-item");

window.addEventListener("load", function () {
    addItemBtn.click();
    clearTextAreaFields();
});

function clearTextAreaFields() {
    const textareas = document.querySelectorAll("textarea");
    if (!textareas.length) return;

    textareas.forEach((area) => {
        area.value = area.value.trim();
    });
}

const editButton = document.querySelector(".edit-button");

// editButton.addEventListener("click", function (e) {
//     e.preventDefault();
//     window.location.href = window.location.host;
//     this.submit();
// });
