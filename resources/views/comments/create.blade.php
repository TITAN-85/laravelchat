@extends('layouts.app')
@section('title', 'players')
@section('content')

    <section class="container">
        <form class="row mb-5 mt-5 justify-content-center" method="POST">
            {{-- <div class="form-row"> --}}
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
                            <p>For title min. 2 ch and max. 50</p> 
                            <p>For comment min. 10 ch and max 1500</p> 
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <input class="form-control" name="commentPlayerId" type="hidden" value="{{ old('commentPlayerId') ?? $previousId }} ">
                {{-- <input class="form-control" name="commentUserId" type="hidden" value="{{ $previousId }}"> --}}

                <input class="form-control" name="title" type="text" placeholder="Comment title *">
                <textarea class="form-control" name="comment" id="" cols="30" rows="10" placeholder="Enter your message here"></textarea>

                <div class="card-footer">
                    <input type="submit" value="Send" name="saveArticle" id="saveArticle" class="btn btn-success">
                    <a class="btn btn-danger" href="{{ route('players.index') }}">Back to all players</a>
                </div>
            </div>
        </form>
    </section>
@endsection
