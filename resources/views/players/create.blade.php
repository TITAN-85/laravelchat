@extends('layouts.app')
@section('title', 'players')
@section('content')

    <section class="container">
        <form class="row mb-5 justify-content-center" method="POST">
            <div class="form-group col-md-6">
                @method('POST')
                @csrf
                <input class="form-control" name="playerName" type="text" placeholder="Type player name here*">
                <input class="form-control" name="playerSteamId" type="text" placeholder="Steam id ?">
                {{-- <input class="form-control" value="1" name="player_cannibalism_id" type="hidden" placeholder="Steam id ?"> --}}
                <div class="card-footer">
                    <input type="submit" value="Add new player" name="saveArticle" id="saveArticle" class="btn btn-success">
                    <input type="submit" value="back" name="saveArticle" id="saveArticle" class="btn btn-danger">
                </div>
            </div>
        </form>
    </section>
@endsection
