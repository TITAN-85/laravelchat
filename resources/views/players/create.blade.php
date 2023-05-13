@extends('layouts.app')
@section('title', 'players')
@section('content')

    <section class="container">
        <form class="row mb-5 justify-content-center" method="POST">
            <div class="form-group col-md-6">
                @method('POST')
                @csrf

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
                @endif

                <input class="form-control" name="playerName" type="text" placeholder="Type player name here*" >
                {{-- value="{{ request()->old($attributes->get('name'))}}" --}}
                <input class="form-control" name="playerSteamId" type="text" placeholder="Steam id ?">
                <div class="card-footer">
                    <input type="submit" value="Add new player" 
                        class="btn btn-success">
                    <a href="{{ route('players.index') }}" class="btn btn-danger">Back</a>
                </div>
            </div>
        </form>
    </section>
@endsection
