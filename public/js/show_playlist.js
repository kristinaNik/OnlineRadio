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
                            size = Object.keys(item).length;
                            $.each(item, function (j, data) {

                                trHTML += '<input type="hidden" value="' + data.duration + '"><tr><td>' + data.title + '</td><td>' + data.album + '</td><td>' + data.genre + '</td><td>' +
                                    data.duration + '</td><td>' + '<input type="button" class="btn btn-default" id="play" onclick="showPlayer()" value="Play"><audio controls class="hidden" id="player"></audio></td>' +
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

