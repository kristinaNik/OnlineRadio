$(document).ready(function () {
    fetch_data();

    function fetch_data(title='', genre='') {
        $("#titles option:selected").each(function() {
                $.ajax({
                    url: "search",
                    method: 'GET',
                    data: {title: title, genre: genre},
                    dataType: 'json',
                    success: function (data) {

                        var trHTML = '';
                        $.each(data, function (i, item) {
                            $.each(item, function (j, data) {

                                trHTML += '<tr><td><input type="hidden" class="song_id" name="song_id" value="'+ data.id+'">'+ data.id + '</td><td>' + data.title + '</td><td>' + data.album + '</td><td>' + data.genre + '</td><td>' +
                                    data.duration + '</td><td>' + '<input type="button" class="btn btn-default" id="play" onclick="playSongs()" value="Play"></td>' +
                                    '</tr>';
                            });

                            $('tbody').html(trHTML);
                        });
                    }
                })

            });

    }
    window.addEventListener('load', function () {
        $('#search_playlist').on('click', function (e) {
            e.preventDefault();
            var title = $('#titles').val();
            var genre = $('#genres').val();
            fetch_data(title, genre);

        });

    });


});

function playSongs() {
    var song_id = $('.song_id').val();

    $.ajax({
        type: 'POST',
        url: "api/radio/save_songs",
        data: {
            song_id: song_id,
        },
        success: function (data) {
            alert('Played');
        }
    });

}
