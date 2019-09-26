<?php

namespace App\Http\Controllers;

use App\Http\Resources\RadioPlayerResource;
use App\Repositories\PlayerRepository;
use Illuminate\Routing\Controller;


class RadioController extends Controller
{

    /**
     * Get playlist
     *
     * @param PlayerRepository $playerRepository
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(PlayerRepository $playerRepository)
    {
        $radioPlayer = $playerRepository->getPlaylist();

        return RadioPlayerResource::collection($radioPlayer);
    }

    /**
     * Store a newly created songs
     *
     * @param PlayerRepository $playerRepository
     * @return RadioPlayerResource
     */
    public function store(PlayerRepository $playerRepository)
    {
        $xml = simplexml_load_file($_FILES['file']['tmp_name']);
        $jsonData = json_encode($xml);
        $musicData = json_decode($jsonData,TRUE);

        $radioPlayer = $playerRepository->store($musicData);

        return new RadioPlayerResource($radioPlayer);

    }

}
