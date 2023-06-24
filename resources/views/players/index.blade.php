@extends('layouts.app')
@section('title', 'players')
@section('content')

    @if (Auth::check())
        @if (Auth::user()->id)

            <div class="container pt-5">
                {{-- <div class="card mt-5"> --}}

                    <div class="row">
                            <div class="col-sm-"> 
                            
                            <div class="card-header">List of Players</div>


                            <form class="form" action="{{ route('search') }}" method="GET">
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

                            <a class="btn btn-success d-flex" href="{{ route('players.create') }}">Add a new player</a>
                        </div>
                    </div>





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
                    <div class="card-footer">
                        {{-- {{ $players->links() }} --}}
                    </div>
                {{-- </div> --}}
            </div>

        @endif
    @endif
@endsection
