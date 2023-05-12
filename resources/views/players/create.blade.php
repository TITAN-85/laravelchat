@extends('layouts.app')
@section('title', 'players')
@section('content')
HELLO

    <form class="form-control flex row" method="POST">
        @method('POST')
        @csrf
        <input class="form-control" name="playerName" type="text" placeholder="Type player name here*">
        <input class="form-control" name="playerSteamId" type="text" placeholder="Steam id ?">
        {{-- <input class="form-control" value="1" name="player_cannibalism_id" type="hidden" placeholder="Steam id ?"> --}}
        <div class="card-footer">
            <input type="submit" value="Envoye" name="saveArticle" id="saveArticle" class="btn btn-success">
        </div>
    </form>

@endsection
