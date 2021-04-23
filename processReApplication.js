$('.btn').click(function (e) {
    $("#reApplication").on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'processReApplication.php',
            data: new FormData(this),
            dataType: 'html',
            contentType: false,
            cache: false,
            processData: false,
            success: function () {
                alert("Successful ID Re-Application!");
                window.location.href = "homePage.php";
            }
        });
    });
});