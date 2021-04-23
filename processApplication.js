$('.btn').click(function (e) {
    $("#application").on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'processApplication.php',
            data: new FormData(this),
            dataType: 'html',
            contentType: false,
            cache: false,
            processData: false,
            success: function () {
                alert("Successful ID Application!");
                window.location.href = "homePage.php";
            }
        });
    });
});