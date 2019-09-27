@extends('layouts/master')

@section('title')
    Online radio
@endsection
@section('content')

    <h2>Statistics</h2>
    <form>
        <ul class="list-group">
            <li class="list-group-item" id="most_played_song">Most played song</li>
            <li class="list-group-item" id="longest_song">The longest song</li>
            <li class="list-group-item" id="shortest_song">The shortest song</li>
            <li class="list-group-item">Genre of most played song</li>
        </ul>
    </form>

    <table class="table hidden"  id="playlist_table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Album</th>
            <th scope="col">Genre</th>
            <th scope="col">Duration</th>
        </tr>
        </thead>
        <tbody>

        </tbody>
    </table>

    <script src="js/show_statistics.js"></script>
@endsection