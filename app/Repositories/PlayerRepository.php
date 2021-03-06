<?php
/**
 * Created by PhpStorm.
 * User: kristina
 * Date: 9/26/19
 * Time: 10:09 PM
 */

namespace App\Repositories;

use App\Interfaces\PlayerRepositoryInterface;
use App\PlaylistPlay;
use App\RadioPlayer;
use Illuminate\Support\Facades\DB;

class PlayerRepository implements PlayerRepositoryInterface
{

    /**
     * @param $searchParam
     * @return mixed
     */
    public function searchTitle($searchParam)
    {
        return RadioPlayer::where('id','=', $searchParam)
            ->get();

    }

    /**
     * @param $searchParam
     * @return mixed
     */
    public function searchGenre($searchParam)
    {
        return RadioPlayer::where('genre','LIKE', '%' . $searchParam . '%')
            ->get();

    }



    /**
     * @return mixed
     */
    public function getPlaylist()
    {
        return RadioPlayer::orderBy('id', 'desc')->get();
    }

    public function getTitles() {

        return DB::table('radio_players')->select('id', 'title')->get();
    }

    public function getGenres() {
        return DB::table('radio_players')->selectRaw('DISTINCT genre')->get();
    }

    /**
     * @param $musicData
     * @return RadioPlayer
     */
    public function store($musicData)
    {
        $radioPlayer = new RadioPlayer();


        $radioPlayer->title = $musicData['title'];
        $radioPlayer->album = $musicData['album'];
        $radioPlayer->genre = $musicData['genre'];
        $radioPlayer->duration = $musicData['duration'];
        $radioPlayer->next = $musicData['next'];

        $radioPlayer->save();

        return $radioPlayer;
    }

    /**
     * @param $id
     * @return PlaylistPlay
     */
    public function savePlayedSongs($id) {
        $playlistPlay = new PlaylistPlay();

        $playlistPlay->song_id = $id;

        $playlistPlay->save();

        return $playlistPlay;
    }
}