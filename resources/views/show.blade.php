@extends('layouts/master')

@section('title')
    Online radio
@endsection
@section('content')
    <h2>Radio Playlist</h2>
    <table class="table"  id="playlist_table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Album</th>
            <th scope="col">Genre</th>
            <th scope="col">Duration</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
    <script src="js/show_playlist.js"></script>
@endsection