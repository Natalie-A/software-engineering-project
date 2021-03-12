$('.btn').click(function(e){
    $("#signUp").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'processregister.php',
            data: $(this).serialize(),
            success: function(){ 
                alert("successful registration");
            }
        });
    });
});