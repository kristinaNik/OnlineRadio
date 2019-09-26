$(document).ready(function () {
    $.ajax({
        type:'GET',
        url:'api/radio',
        dataType: 'json',
        success:function(data) {
            var trHTML = '';

            $.each(data, function (i, item) {
                size = Object.keys(item).length;
                $.each(item, function (j, data) {

                    trHTML += '<tr><td>' + data.title + '</td><td>' + data.album + '</td><td>' + data.genre + '</td><td>' +
                        data.duration + '</td><td>' + '<input type="button" class="btn btn-default" id="delete_user"  value="Play"></td>' +
                        '</tr>';

                });

                $('tbody').html(trHTML);
            });
        }
    });
});