$(document).ready(function (e) {
    window.wow = new WOW({}).init();
});

$(document).on("submit", "form[data-parsley-validate]", function (e) {
    e.preventDefault();

    var data = new FormData($(this)[0]);
    $.ajax({
        url: $(this).attr("action"),
        data: data,
        contentType: false,
        processData: false,
        type: $(this).attr("method"),
        success: function (response) {
            var result = JSON.parse(response);
            if (result.success) {
                window.location.href = result.url;
            } else {
                $.notify(result.message, {
                    type: result.type || "error",
                    allow_dismiss: true,
                    showProgressbar: false,
                    placement: {
                        from: "bottom",
                        align: "right"
                    }
                });
            }
        }
    });
});