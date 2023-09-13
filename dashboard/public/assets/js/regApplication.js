$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": jQuery('meta[name="csrf-token"]').attr("content"),
    },
});

$(".view_btn").on("click", function () {
    const id = this.dataset.id;
    $.ajax({
        type: "post",
        url: `/viewRegApplication/${id}`,
        success: function (response) {
            $("#view_modal_body").html(response);
        },
        error: function (response) {
            console.log(response);
        },
    });
});
//
