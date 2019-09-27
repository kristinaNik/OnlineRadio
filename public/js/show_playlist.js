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

                    trHTML += '<input type="hidden" value="'+data.duration+'"><tr><td>' + data.title + '</td><td>' + data.album + '</td><td>' + data.genre + '</td><td>' +
                        data.duration + '</td><td>' + '<input type="button" class="btn btn-default" id="play" onclick="showPlayer()" value="Play"><audio controls class="hidden" id="player"></audio></td>' +
                        '</tr>';

                });

                $('tbody').html(trHTML);
            });
        }
    });




});
function showPlayer() {
    console.log($("input[type=hidden]").val());

    $('#player').removeClass('hidden');

    var audio = document.getElementById("audio");
    audio.play();

}