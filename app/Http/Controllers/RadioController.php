<?php

namespace App\Http\Controllers;

use App\Http\Resources\RadioPlayerResource;
use App\RadioPlayer;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class RadioController extends Controller
{

    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $radioPlayer = RadioPlayer::orderBy('id', 'desc')->get();

        return RadioPlayerResource::collection($radioPlayer);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store()
    {
        $xml = simplexml_load_file($_FILES['file']['tmp_name']);
        $jsonData = json_encode($xml);
        $musicData = json_decode($jsonData,TRUE);
        $radioPlayer = new RadioPlayer();


        $radioPlayer->title = $musicData['title'];
        $radioPlayer->album = $musicData['album'];
        $radioPlayer->genre = $musicData['genre'];
        $radioPlayer->duration = $musicData['duration'];
        $radioPlayer->next = $musicData['next'];

        $radioPlayer->save();

        return new RadioPlayerResource($radioPlayer);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
