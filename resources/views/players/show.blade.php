@extends('layouts.app')
@section('title', 'players')
@section('content')



    <div class="container">
        <div class="card mt-5">
            <div class="card-header">All comments of player </div>
            <div class="card-body">

                <div class="card-body">
                    @forelse ($comments as $comment)
                        <li>
                            {{-- <a href="{{ route('player.show', $player->player_id)}}">{{ $player->name }}</a> --}}
                            <p>comment: {{ $comment->title }}</p>
                            <p>comment: {{ $comment->comment }}</p>
                        </li>
                    @empty
                        <li class="text-danger"> Rien </li>
                    @endforelse
                </div>

            </div>
        </div>

    </div>

@endsection
