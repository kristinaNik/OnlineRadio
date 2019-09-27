<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class PlaylistPlay extends Model
{

    /**
     * @param $query
     * @return mixed
     */
    public function scopeMostPlayedSong($query) {

        return $query->selectRaw(' song_id, rp.id, rp.title, rp.album, rp.genre, rp.duration, rp.next,
          COUNT(song_id) AS value_occurrence')
            ->join('radio_players as rp', 'song_id', '=', 'rp.id')
            ->groupBy('song_id')
            ->orderBy('value_occurrence', 'DESC')
            ->limit(1)
            ->get();

    }
}
