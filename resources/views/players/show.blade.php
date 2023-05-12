@extends('layouts.app')
@section('title', 'players')
@section('content')

    @if (Auth::check())
        @if (Auth::user()->id)

            <div class="container">
                <div class="card mt-5">
                    <div class="d-flex justify-content-between">
                        <div class="card-header">All comments of player <strong class="text-danger">{{ $comments->player[0]->name }} </strong> </div>
                        <a class="btn btn-success d-flex" href="{{ route('comments.create'), $comments->player[0]->id }}">Add new comment</a>
                    </div>
                    <div class="card-body">

                        <div class="card-body">
                            @forelse ($comments as $comment)
                                <li>
                                    <div class="card-body border">
                                        @if (Auth::user()->email == 'candualexandru@gmail.com')
                                            <p>comment of: {{ $comment->name }}</p>
                                        @endif
                                        <p><strong>Title:</strong> {{ $comment->title }}</p>
                                        <p><strong>comment:</strong> {{ $comment->comment }}</p>
                                    </div>
                                </li>
                            @empty
                                <li class="text-danger"> No comments </li>
                            @endforelse
                        </div>

                    </div>
                </div>

            </div>
        @endif
    @endif
@endsection
