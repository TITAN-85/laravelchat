@extends('layouts.app')
@section('title', 'players')
@section('content')

@if (Auth::check())
@if (Auth::user()->id)

<div class="container pt-5">

    <div class="row">

        {{-- SCORE --}}
        <div class="col-lg-6">
            <div class="card my-5">
                <div class="card-header">
                    Player: <span class=" text-danger"> {{ $comments->player[0]->name }}</span> 
                </div>
                <div class="card-body text-danger">
                    <div class="my-3">
                        @php $rate = 0; @endphp
                        @isset($comments[0])
                            @if ($comments[0]->rate_points)
                                @php $rate = $comments[0]->rate_points;  @endphp
                            @endif
                        @endisset
                        @if ($comments->player[0]->rate_points)
                            @php $rate = $comments->player[0]->rate_points; @endphp
                        @endif
                        Score Rate: <span class="p-2 rounded mb-2 bg-warning text-white"> {{ $rate }} </span>
                    </div>
                    <div class="my-3">
                        @php $canibalismPoints = 0; @endphp
                        @isset($comments[0])
                            @if ($comments[0]->canibalism_points)
                                @php $canibalismPoints = $comments[0]->canibalism_points; @endphp
                            @endif
                        @endisset
                        Canibalism:<span class="p-2 rounded mb-2 bg-danger text-white ms-1">{{ $canibalismPoints }}</span>
                    </div>
                </div>
                <div class="card-footer">
                    Each player starts with score rate +20, and cannibalism 0.
                </div>
            </div>
        </div>

        {{-- INPUT RATE --}}
        <div class="col-lg-6">
            <div class="card my-5">
                <div class="card-header">
                    <div>Add new score rate</div>
                </div>
                <div class="card-body">

                
                <form class="form-row d-flex flex-row" action="{{ route('players.rate') }}" method="POST">
                    @method('POST')
                    @csrf
                    <div class="pl-3 pr-3">
                        <label class="form-control pl-3 pr-3" for="playerRate">Rate this player: </label>
                    </div>

                    <div class="gap-3 ms-2 me-2">
                        <select class="form-control btn btn-info" name="rate" id="playerRate">
                            <option value="5">+ 5</option>
                            <option value="4">+ 4</option>
                            <option value="3">+ 3</option>
                            <option value="2">+ 2</option>
                            <option value="1" selected> + 1</option>
                            <option value="-1">- 1</option>
                            <option value="-2">- 2</option>
                            <option value="-3">- 3</option>
                            <option value="-4">- 4</option>
                            <option value="-5">- 5</option>
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
                
                </div>

                {{-- INFO --}}
                <div class="card-footer">
                    you can pick a number from -5 to +5
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('comments.create'), $comments->player[0]->id }}">Add new comment</a>
            <p class="text-secondary">Add new comment to player {{ $comments->player[0]->name }}</p>
        </div>

        {{-- COMMENTS CARD --}}
        <div class="col-lg-12">
            <div class="card my-5">
                <div class="card-header">
                    Player comments
                </div>
                <div class="card-body">
                    <ul>
                        @forelse ($comments as $comment)
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
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('comments.create'), $comments->player[0]->id }}">Add new comment</a>
            <p class="text-secondary">Add new comment to player {{ $comments->player[0]->name }}</p>
        </div>

    </div>

</div>

@endif
@endif

@endsection
