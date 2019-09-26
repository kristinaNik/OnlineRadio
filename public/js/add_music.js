$(document).ready(function(e) {
    $("#radioForm").on('submit', function (e) {
        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: 'api/radio/create',
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {

               $('#message').html('Imported successfully');
            }
        });

    });
});