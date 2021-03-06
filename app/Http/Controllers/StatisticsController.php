<?php

namespace App\Http\Controllers;

use App\Http\Resources\RadioPlayerResource;
use App\PlaylistPlay;
use App\RadioPlayer;
use Illuminate\Routing\Controller;

class StatisticsController extends Controller
{

    /**
     * Get the longest song
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function getLongestSong() {
        $longestSong = RadioPlayer::longestSong();

        return RadioPlayerResource::collection($longestSong);
    }

    /**
     * Get the shortest song
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function getShortestSong() {
        $longestSong = RadioPlayer::shortestSong();

        return RadioPlayerResource::collection($longestSong);
    }

    /**
     * Get the most played song
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function getMostPlayedSong() {
        $mostPlayedSong = PlaylistPlay::mostPlayedSong();

        return RadioPlayerResource::collection($mostPlayedSong);
    }

    /**
     * Get genre of most played song
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function getGenreOfMostPlayedSong() {
        $genrePlayedSong = PlaylistPlay::genreOfMostPlayedSong();

        return RadioPlayerResource::collection($genrePlayedSong);
    }

    /**
     * Get most popular genre
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function getMostPopularGenre() {
        $mostPopularGenre = RadioPlayer::mostPopularGenre();

        return RadioPlayerResource::collection($mostPopularGenre);
    }
}
