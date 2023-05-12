@extends('layouts.app')
@section('title', 'players')
@section('content')

    <section class="container">
        <form class="row mb-5 justify-content-center" method="POST">
            {{-- <div class="form-row"> --}}
            <div class="form-group col-md-6">
                @method('POST')
                @csrf
                <input class="form-control" name="commentPlayerId" type="hidden" value="{{ $previousId }}">
                {{-- <input class="form-control" name="commentUserId" type="hidden" value="{{ $previousId }}"> --}}

                <input class="form-control" name="commentTitle" type="text" placeholder="Title">
                <textarea class="form-control" name="commentInput" id="" cols="30" rows="10"></textarea>

                <div class="card-footer">
                    <input type="submit" value="Envoye" name="saveArticle" id="saveArticle" class="btn btn-success">
                </div>
            </div>
        </form>
    </section>
@endsection
