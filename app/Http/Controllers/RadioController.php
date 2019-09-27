<?php

namespace App\Http\Controllers;

use App\Http\Resources\RadioPlayerResource;
use App\Repositories\PlayerRepository;



use Illuminate\Routing\Controller;
use \Illuminate\Http\Request;


class RadioController extends Controller
{

    /**
     * Get playlist
     *
     * @param PlayerRepository $playerRepository
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(Request $request, PlayerRepository $playerRepository)
    {
        $query = $request->get('query');

        if ($query != '') {
            $radioPlayer = $playerRepository->searchTitle($query);
        } else {
            $radioPlayer = $playerRepository->getPlaylist();


        }

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


    public function savePlayedSongs(Request $request, PlayerRepository $playerRepository) {
        $id = $request->input('song_id');

        $playerRepository->savePlayedSongs($id);

        return response()->json(['Message' => 'Played song with id ' . $id ]);
    }

    /**
     * Get Titles
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function getTitles(PlayerRepository $playerRepository) {

        $titles = $playerRepository->getTitles();

        return response()->json(['data' => $titles]);

    }


    /**
     * Get Genres
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function getGenres(PlayerRepository $playerRepository) {

        $genres = $playerRepository->getGenres();

        return response()->json(['data' => $genres]);

    }

}
