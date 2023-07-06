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

{{-- <div id="countdown">TIMER</div>
<div>
    <button id="startButton">Start Timer</button>
    <button id="stopButton">Stop Timer</button>
  </div> --}}

  
{{-- TIMERS STOP BUTTONS DONT WORK --}}
  {{-- <div>
    <span>Timer 1: </span>
    <span id="timer1">2:00</span>
    <button id="start1">Start</button>
    <button id="stop1">Stop</button>
    <button id="reset1">Reset</button>
</div>

<div>
    <span>Timer 2: </span>
    <span id="timer2">20:00</span>
    <button id="start2">Start</button>
    <button id="stop2">Stop</button>
    <button id="reset2">Reset</button>
</div>

<div>
    <span>Game Timer: </span>
    <span id="timer3">0:00</span>
    <button id="start3">Start</button>
    <button id="stop3">Stop</button>
    <button id="reset3">Reset</button>
</div> --}}
  


{{-- GAME TIMER DONT START --}}
{{-- <div>
    <span>Timer 1: </span>
    <span id="timer1">2:00</span>
    <button id="start1">Start</button>
    <button id="stop1">Stop</button>
    <button id="reset1">Reset</button>
</div>

<div>
    <span>Timer 2: </span>
    <span id="timer2">20:00</span>
    <button id="start2">Start</button>
    <button id="stop2">Stop</button>
    <button id="reset2">Reset</button>
</div>

<div>
    <span>Game Timer: </span>
    <span id="timer3">0:00</span>
    <button id="start3">Start</button>
    <button id="stop3">Stop</button>
    <button id="reset3">Reset</button>
</div> --}}



<div>
    <span>Timer 1: </span>
    <span id="timer1">2:00</span>
    <button id="start1">Start</button>
    <button id="stop1">Stop</button>
    <button id="reset1">Reset</button>
</div>

<div>
    <span>Timer 2: </span>
    <span id="timer2">20:00</span>
    <button id="start2">Start</button>
    <button id="stop2">Stop</button>
    <button id="reset2">Reset</button>
</div>

<div>
    <span>Game Timer: </span>
    <span id="timer3">0:00</span>
    <button id="start3">Start</button>
    <button id="stop3">Stop</button>
    <button id="reset3">Reset</button>
</div>


    @if (Auth::check())
        @if (Auth::user()->id)

            {{-- Title  --}}
            <div class="my-4">
                <div class="h2 text-center">List of players</div>
            </div>

            <div class="container">

                <div class="my-4">

                    {{-- Search input --}}
                    <div class="d-flex justify-content-center">
                        <form class="form m-2" action="{{ route('search') }}" method="GET">
                            @method('GET')
                            @csrf
                            <div class="input-group mb-3">
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
                        <div class="">
                            <a class="btn btn-success d-flex m-2" href="{{ route('players.create') }}">Add a new player</a>
                        </div>
                    </div>
                </div>



                <div class="my-4">

                    {{-- ============================== CARD ============================= --}}
                    <div class="card ">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-header">List of Players</div>
                            </div>
                        </div>
                        
                        {{-- Card body --}}
                        <div class="card-body">
                            {{-- <chat-messages :messages="messages"></chat-messages> --}}
                            
                            <div class="card-body">
                                @forelse ($players as $player)
                                <li>
                                    <a href="{{ route('players.show', $player->player_id) }}">{{ $player->name }}</a>
                                    {{-- <p>player id: {{ $player->player_id }}</p> --}}
                                    {{-- <p>steam id: {{ $player->steam_id }}</p> --}}
                                </li>
                                {{-- For pagination TODO: --}}
                                @empty
                                <li class="text-danger"> No players </li>
                                @endforelse
                                
                            </div>
                        </div>
                    </div>

                    {{-- Card footer --}}
                    <div class="card-footer">
                        {{-- {{ $players->links() }} --}}
                    </div>
                    {{-- </div> --}}
                </div>
                
            </div>
        @endif
    @endif
@enddiv
