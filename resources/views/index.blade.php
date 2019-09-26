@extends('layouts/master')

@section('title')
   Online radio
@endsection
@section('content')
    <div class="container">
        <h2>Import songs</h2>

    <form id="radioForm" enctype="multipart/form-data">
        <div class="form-group">
            <label>Select file</label>
            <input type="file" name="file" id="file" />
        </div>
        <div class="form-group">
            <input type="submit" id="add_song" class="btn btn-primary" value="Import song">
        </div>
    </form>
        <span id="message" style="color: green"></span>
    </div>
    <script src="js/add_music.js"></script>
@endsection

