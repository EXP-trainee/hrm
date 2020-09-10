let pTitle = "";
$(document).on('focusin', '.editable', function (e) {
    pTitle = $(this).text();
});
$(document).on('focusout', '.editable', function (e) {
    let parent = $(this).parents("tr");
    let url = parent.attr("data-update-url");
    let field = $(this).attr("data-col");
    let value = $(this).text();
    let that = this;
    if (value === pTitle) return false;
    let data = {};
    data[field] = value;
    data["_token"] = $("meta[name=\"csrf-token\"]").attr("content");
    $.ajax({
        url: url,
        type: 'PUT',
        data: data
    }).done(function (res) {
        if (res.status === 1) {
            // $(that).text(res.product[field]);
            toastr.success("Update done!");
        } else {
            toastr.error("Update fail!");
        }
    });
});
