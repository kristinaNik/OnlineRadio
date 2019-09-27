$(document).ready(function () {
    fetch_data();

    function fetch_data(query='') {
        $("#titles option:selected").each(function() {
                $.ajax({
                    url: "search",
                    method: 'GET',
                    data: {query: query},
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
            var query = $('#titles').val();
            fetch_data(query);

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
