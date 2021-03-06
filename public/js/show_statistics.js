$(document).ready(function () {

    $('#longest_song').on('click', function (e) {
        e.preventDefault();
            $('#playlist_table').removeClass('hidden');
            $('#shortest_song').removeClass('active');
            $('#most_played_song').removeClass('active');
            $('#genre_most_played_song').removeClass('active');
            $('#most_popular_genre').removeClass('active');
            $('#longest_song').addClass('active');
            $.ajax({
                type: 'GET',
                url: 'api/statistics/longest_song',
                dataType: 'json',
                success: function (data) {
                    var trHTML = '';

                    $.each(data, function (i, item) {
                        size = Object.keys(item).length;
                        $.each(item, function (j, data) {

                            trHTML += '<input type="hidden" value="' + data.duration + '"><tr><td>' + data.title + '</td><td>' + data.album + '</td><td>' + data.genre + '</td><td>' +
                                data.duration + '</td></tr>';

                        });

                        $('tbody').html(trHTML);
                    });
                }
            });



    });

    $('#shortest_song').on('click', function (e) {
        e.preventDefault();
        $('#playlist_table').removeClass('hidden');
        $('#longest_song').removeClass('active');
        $('#most_played_song').removeClass('active');
        $('#genre_most_played_song').removeClass('active');
        $('#most_popular_genre').removeClass('active');
        $('#shortest_song').addClass('active');
        $.ajax({
            type: 'GET',
            url: 'api/statistics/shortest_song',
            dataType: 'json',
            success: function (data) {
                var trHTML = '';

                $.each(data, function (i, item) {
                    size = Object.keys(item).length;
                    $.each(item, function (j, data) {

                        trHTML += '<input type="hidden" value="' + data.duration + '"><tr><td>' + data.title + '</td><td>' + data.album + '</td><td>' + data.genre + '</td><td>' +
                            data.duration + '</td></tr>';

                    });

                    $('tbody').html(trHTML);
                });
            }
        });



    });

    $('#most_played_song').on('click', function (e) {
        e.preventDefault();
        $('#playlist_table').removeClass('hidden');
        $('#longest_song').removeClass('active');
        $('#shortest_song').removeClass('active');
        $('#genre_most_played_song').removeClass('active');
        $('#most_popular_genre').removeClass('active');
        $('#most_played_song').addClass('active');
        $.ajax({
            type: 'GET',
            url: 'api/statistics/most_played_song',
            dataType: 'json',
            success: function (data) {
                var trHTML = '';

                $.each(data, function (i, item) {
                    size = Object.keys(item).length;
                    $.each(item, function (j, data) {

                        trHTML += '<input type="hidden" value="' + data.duration + '"><tr><td>' + data.title + '</td><td>' + data.album + '</td><td>' + data.genre + '</td><td>' +
                            data.duration + '</td></tr>';

                    });

                    $('tbody').html(trHTML);
                });
            }
        });



    });
    $('#genre_most_played_song').on('click', function (e) {
        e.preventDefault();
        $('#playlist_table').removeClass('hidden');
        $('#longest_song').removeClass('active');
        $('#shortest_song').removeClass('active');
        $('#most_played_song').removeClass('active');
        $('#most_popular_genre').removeClass('active');
        $('#genre_most_played_song').addClass('active');
        $.ajax({
            type: 'GET',
            url: 'api/statistics/genre_most_played_song',
            dataType: 'json',
            success: function (data) {
                var trHTML = '';

                $.each(data, function (i, item) {
                    size = Object.keys(item).length;
                    $.each(item, function (j, data) {

                        trHTML += '<input type="hidden" value="' + data.duration + '"><tr><td>' + data.title + '</td><td>' + data.album + '</td><td>' + data.genre + '</td><td>' +
                            data.duration + '</td></tr>';

                    });

                    $('tbody').html(trHTML);
                });
            }
        });



    });
    $('#most_popular_genre').on('click', function (e) {
        e.preventDefault();
        $('#playlist_table').removeClass('hidden');
        $('#longest_song').removeClass('active');
        $('#shortest_song').removeClass('active');
        $('#most_played_song').removeClass('active');
        $('#most_popular_genre').addClass('active');
        $.ajax({
            type: 'GET',
            url: 'api/statistics/most_popular_genre',
            dataType: 'json',
            success: function (data) {
                var trHTML = '';

                $.each(data, function (i, item) {
                    size = Object.keys(item).length;
                    $.each(item, function (j, data) {

                        trHTML += '<input type="hidden" value="' + data.duration + '"><tr><td>' + data.title + '</td><td>' + data.album + '</td><td>' + data.genre + '</td><td>' +
                            data.duration + '</td></tr>';

                    });

                    $('tbody').html(trHTML);
                });
            }
        });



    });
    $('#playlist_table').addClass('hidden');
});
