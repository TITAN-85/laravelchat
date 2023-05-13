@extends('layouts.app')
@section('title', 'players')
@section('content')

    @if (Auth::check())
        @if (Auth::user()->id)

            <div class="container">
                <div class="card mt-5">
                    <div class="d-flex justify-content-between">

                        <div class="card-header">All comments of player: <strong class="text-danger ms-1 me-4">
                                {{-- SHOW NAME --}}
                                {{ $comments->player[0]->name }}

                                {{-- SHOW RATE --}}
                                @php
                                    $rate = 0;
                                @endphp
                                @isset($comments[0])
                                    @if ($comments[0]->rate_points)
                                        @php
                                            $rate = $comments[0]->rate_points;
                                        @endphp
                                    @endif
                                @endisset
                                @if ($comments->player[0]->rate_points)
                                    @php
                                        $rate = $comments->player[0]->rate_points;
                                    @endphp
                                @endif
                            </strong> His Score Rate is:
                            <span class="p-2 rounded mb-2 bg-warning text-white ms-1 me-4"> {{ $rate }} </span>
                            </strong>
                            @php
                                $canibalismPoints = 0;
                            @endphp
                            @isset($comments[0])
                                @if ($comments[0]->canibalism_points)
                                    @php
                                        $canibalismPoints = $comments[0]->canibalism_points;
                                    @endphp
                                @endif
                            @endisset
                            Canibalism points:<span
                                class="p-2 rounded mb-2 bg-danger text-white ms-1">{{ $canibalismPoints }}</span>
                        </div>

                        {{-- INPUT RATE TEMP--}}
                        <form class="form-row d-flex flex-row" action="{{ route('players.rate') }}" method="POST">
                            @method('POST')
                            @csrf
                            <div class="pl-3 pr-3">
                                <label class="form-control pl-3 pr-3" for="playerRate">Rate this player: -5 to +5</label>
                            </div>

                            <div class="gap-3 ms-2 me-2">
                                <select class="form-control btn btn-info" name="rate" id="playerRate">
                                    <option selected value="5">+5</option>
                                    <option value="4">+4</option>
                                    <option value="3">+3</option>
                                    <option value="2">+2</option>
                                    <option value="1">+1</option>
                                    <option value="-1">-1</option>
                                    <option value="-2">-2</option>
                                    <option value="-3">-3</option>
                                    <option value="-4">-4</option>
                                    <option value="-5">-5</option>
                                </select>
                            </div>

                            <div class="gap-3">
                                <input type="submit" value="Rate" name="give-rate" id="" class="btn btn-success"
                                    class="">
                            </div>
                        </form>


                        {{-- INPUT RATE --}}
                        {{-- <form class="form-row d-flex flex-row" action="{{ route('rates.store') }}" method="POST">
                            @method('POST')
                            @csrf
                            <div class="pl-3 pr-3">
                                <label class="form-control pl-3 pr-3" for="playerRate">Rate this player: -5 to +5</label>
                            </div>

                            <div class="gap-3 ms-2 me-2">
                                <select class="form-control btn btn-info" name="rate" id="playerRate">
                                    <option selected value="5">+5</option>
                                    <option value="4">+4</option>
                                    <option value="3">+3</option>
                                    <option value="2">+2</option>
                                    <option value="1">+1</option>
                                    <option value="-1">-1</option>
                                    <option value="-2">-2</option>
                                    <option value="-3">-3</option>
                                    <option value="-4">-4</option>
                                    <option value="-5">-5</option>
                                </select>
                            </div>

                            <div class="gap-3">
                                <input type="submit" value="Rate" id="" class="btn btn-success"
                                    class="">
                            </div>
                        </form> --}}


                        {{-- ADD NEW COMMENT --}}
                        <a class="btn btn-success d-flex"
                            href="{{ route('comments.create'), $comments->player[0]->id }}">Add new comment</a>
                    </div>

                    <div class="card-body">
                        {{-- INFO --}}
                        <p>Info: Each player starts with score rate +20, and canibalism 0</p>

                        {{-- COMMENTS --}}
                        <div class="card-body">
                            @forelse ($comments as $comment)
                                <li>
                                    <div class="card-body border">
                                        @if (Auth::user()->email == 'candualexandru@gmail.com')
                                            <p>comment name: {{ $comment->name }}</p>
                                            <p>comment id: {{ $comment->comment_id }}</p>
                                            <p>created_at: {{ $comment->created_at }}</p>
                                        @endif
                                        <p><strong>Title:</strong> {{ $comment->title }}</p>
                                        <p><strong>comment:</strong> {{ $comment->comment }}</p>
                                        {{-- <p><strong>Rate:</strong> {{ $comment->rate_points }}</p> --}}
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
