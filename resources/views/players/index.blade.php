@extends('layouts.app')
@section('title', 'players')
@section('content')

    @if (Auth::check())
        @if (Auth::user()->id)

            <div class="container">
                <div class="card mt-5">
                    <div class="d-flex justify-content-between">
                        <div class="card-header">List of Players</div>
                        <a class="btn btn-success d-flex" href="{{ route('players.create') }}">Add player</a>
                    </div>
                    <div class="card-body">
                        {{-- <chat-messages :messages="messages"></chat-messages> --}}

                        <div class="card-body">
                            @forelse ($players as $player)
                                <li>
                                    <a href="{{ route('players.show', $player->player_id) }}">{{ $player->name }}</a>
                                    <p>player id: {{ $player->player_id }}</p>
                                    <p>steam id: {{ $player->steam_id }}</p>
                                </li>
                            @empty
                                <li class="text-danger"> Rien </li>
                            @endforelse
                        </div>

                    </div>
                </div>

                {{-- <div class="card-footer"> --}}
                    <a href="{{ route('players.create') }}">Add player</a>
                {{-- </div> --}}
            </div>
            
        @endif
    @endif
@endsection
