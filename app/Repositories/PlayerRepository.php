<?php
/**
 * Created by PhpStorm.
 * User: kristina
 * Date: 9/26/19
 * Time: 10:09 PM
 */

namespace App\Repositories;

use App\Interfaces\PlayerRepositoryInterface;
use App\RadioPlayer;

class PlayerRepository implements PlayerRepositoryInterface
{

    /**
     * @return mixed
     */
    public function getPlaylist()
    {
        return RadioPlayer::orderBy('id', 'desc')->get();
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

}