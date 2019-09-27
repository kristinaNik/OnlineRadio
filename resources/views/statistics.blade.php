@extends('layouts/master')

@section('title')
    Online radio
@endsection
@section('content')

    <h2>Statistics</h2>
    <form>


            <ul class="list-group">
                <li class="list-group-item">Most played artist</li>
                <li class="list-group-item">Most played song</li>
                <li class="list-group-item" id="longest_song">The longest song</li>
                <li class="list-group-item" id="shortest_song">The shortest song</li>
                <li class="list-group-item">Genre of most played song</li>
            </ul>
            {{--<select class="form-control">--}}

                {{--<option value="">Choose</option>--}}
                {{--<option value="">Most played artist</option>--}}
                {{--<option value="">Most played song</option>--}}
                {{--<option id="longest_song">The longest song</option>--}}
                {{--<option value="">The shortest song</option>--}}
                {{--<option value="">Genre of most played song</option>--}}
            {{--</select>--}}

    </form>

    <table class="table hidden"  id="playlist_table">
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

    <script src="js/show_statistics.js"></script>
@endsection