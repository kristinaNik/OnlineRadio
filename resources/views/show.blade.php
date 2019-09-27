@extends('layouts/master')

@section('title')
    Online radio
@endsection
@section('content')
    <h2>Radio Playlist</h2>
    <div class="filters">
        <form>
            <div class="form-group">

                <div class="form-group">

                    <label>Choose title</label>
                    <select class="form-control" id="titles">

                        <option value="">Choose</option>

                    </select>
                </div>
                <div class="form-group">

                    <label>Choose genre</label>
                    <select class="form-control" id="genres">

                        <option value="">Choose</option>

                    </select>
                </div>

                <button id="search_playlist" class="btn btn-default">Search</button>
            </div>
        </form>

    </div>

    <form>
    <table class="table"  id="playlist_table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>
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

    </form>

    <script src="js/get_titles.js"></script>
    <script src="js/get_genres.js"></script>
    <script src="js/show_playlist.js"></script>

@endsection