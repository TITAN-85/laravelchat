@extends('layouts.app')
@section('title', 'players')
@section('content')

    @if (Auth::check())
        @if (Auth::user()->id)

            <div class="container">
                <div class="card mt-5">
                    <div class="card-header">List of Players</div>
                    <div class="card-body">
                        {{-- <chat-messages :messages="messages"></chat-messages> --}}

                        <div class="card-body">
                            @forelse ($players as $player)
                                <li>
                                    <a href="{{ route('comment.index', $player->player_id) }}">{{ $player->name }}</a>
                                    {{-- <a href="#">{{ $player->name }}</a> --}}
                                    <p>steam id: {{ $player->steam_id }}</p>
                                    {{-- <p>title: {{ $player->title }}</p> --}}
                                    {{-- <p>comments: {{ $player->comment }}</p> --}}
                                </li>
                            @empty
                                <li class="text-danger"> Rien </li>
                            @endforelse
                        </div>

                    </div>
                </div>

                <div class="card-footer">
                    <a href="{{ route('players-create') }}">Add player</a>
                </div>
            </div>

        @endif
    @endif

@endsection
