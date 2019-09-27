<?php

namespace App\Http\Controllers;

use App\Http\Resources\RadioPlayerResource;
use App\RadioPlayer;
use Illuminate\Routing\Controller;

class StatisticsController extends Controller
{

    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function getLongestSong() {
        $longestSong = RadioPlayer::longestSong();

        return RadioPlayerResource::collection($longestSong);
    }

    public function getShortestSong() {
        $longestSong = RadioPlayer::shortestSong();

        return RadioPlayerResource::collection($longestSong);
    }
}
