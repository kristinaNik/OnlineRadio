$(document).ready(function () {
    $.ajax({
        type:'GET',
        url:'api/radio/get_titles',
        success:function(data) {
            var optionHTML = '';

            $.each(data, function (i, item) {
                var counter = 1;
                $.each(item, function (j, data) {
                    dataNum = item.length;
                    if (counter <= dataNum) {
                        optionHTML += '<option value="' + data.id + '">' + data.title + '</option>';
                    }
                    counter++;
                });

            });

            $(' #titles').append(optionHTML);

        }
    });
});