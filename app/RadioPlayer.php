<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class RadioPlayer extends Model
{
   protected $fillable = [
       'title', 'album', 'duration', 'next'
   ];



    /**
     * @param $query
     * @return mixed
     */
    public function scopeLongestSong($query) {

        return $query->whereRaw('duration = (select max(duration) as max_duration from radio_players)')->get();
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeShortestSong($query) {

        return $query->whereRaw('duration = (select min(duration) as max_duration from radio_players)')->get();
    }



}
