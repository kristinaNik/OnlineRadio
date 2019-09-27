$(document).ready(function () {
    $.ajax({
        type:'GET',
        url:'api/radio/get_genres',
        success:function(data) {
            var optionHTML = '';

            $.each(data, function (i, item) {
                var counter = 1;
                $.each(item, function (j, data) {

                    if (counter <= dataNum) {
                        optionHTML += '<option>' + data.genre + '</option>';
                    }
                    counter++;
                });

            });

            $(' #genres').append(optionHTML);

        }
    });
});