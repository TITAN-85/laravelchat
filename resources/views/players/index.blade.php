@extends('layouts.app')
@div('title', 'players')
@div('content')

<header class="masthead masthead-players">
    <div class="container">
        <div class="masthead-subheading">The Isle players</div>
        {{-- <div class="masthead-heading text-uppercase">It's Nice To Meet You</div> --}}
        <!-- <a class="btn btn-primary btn-xl text-uppercase" href="services">About me</a> -->
    </div>
</header>


@if (Auth::check())
@if (Auth::user()->id)

{{-- Title  --}}
<div class="my-4">
    <div class="h2 text-center">List of players</div>
</div>

<div class="container">
    <div class="my-4">

        {{-- Search input --}}
        <div class="row justify-content-center">
            <form class="form col-lg-5" action="{{ route('search') }}" method="GET">
                @method('GET')
                @csrf
                <div class="input-group">
                    <input name="search" type="text" class="form-control"
                        placeholder="Find an existing Player" aria-label="Recipient's username"
                        aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Find</button>
                    </div>
                    {{-- 
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif --}}
                </div>
            </form>
            
            {{-- Adding button input --}}
            <div class="col-lg-3">
                <a class="btn btn-success" href="{{ route('players.create') }}">Add a new player</a>
            </div>
        </div>
    </div>

    @isset($players)
    @if ($players)
    <div class="my-4">

        <div class="card ">

            {{-- Card header --}}
            <div class="card-header">
                <div class="font-weight-bold">List of Players</div>
            </div>

            {{-- Card body --}}
            <div class="card-body">
                {{-- <chat-messages :messages="messages"></chat-messages> --}}

                <ul class="">
                    @forelse ($players as $player)
                    <li class="list-unstyled">
                        <a class="text-decoration-none" href="{{ route('players.show', $player->player_id) }}">{{ $loop->index + 1 }}&nbsp&nbsp{{ $player->name }}</a>
                        @if (Auth::user()->email == 'candualexandru@gmail.com')
                        <div>player id: {{ $player->player_id }}</div>
                        <div>steam id: {{ $player->steam_id }}</div>
                        @endif
                    </li>
                    {{-- For pagination TODO: --}}
                    @empty
                    <li class="text-danger"> No players </li>
                    @endforelse
                <ul>
            </div>
        </div>

        {{-- Card footer --}}
        <div class="card-footer">
            {{ $players->links() }}
        </div>
    </div>
    @endif
    @endisset

    @isset($playersPick)
    @if($playersPick)

    <div class="my-4">
        <div class="card ">

            {{-- Card header --}}
            <div class="card-header">
                <div class="font-weight-bold">List of Players</div>
            </div>

            {{-- Card body --}}
            <div class="card-body">
                {{-- <chat-messages :messages="messages"></chat-messages> --}}

                <ul class="">
                    @forelse ($playersPick as $player)
                    <li class="list-unstyled">
                        <a class="text-decoration-none" href="{{ route('players.show', $player->player_id) }}">{{ $loop->index + 1 }}&nbsp&nbsp{{ $player->name }}</a>
                        @if (Auth::user()->email == 'candualexandru@gmail.com');
                        <div>player id: {{ $player->player_id }}</div>
                        <div>steam id: {{ $player->steam_id }}</div>
                        @endif
                    </li>
                    @empty
                    <li class="text-danger"> No players </li>
                    @endforelse
                <ul>
            </div>
        </div>
        <div class="card-footer">

        </div>
    </div>
    @endif
    @endisset
    
</div>

 @endif
@endif

{{-- @enddiv --}}
