@extends('layouts.app')
@section('title', 'players')
@section('content')

    <!-- Masthead-->
    {{-- <header class="masthead">
    <div class="container">
        <div class="masthead-subheading">Welcome!</div>
        <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
        <!-- <a class="btn btn-primary btn-xl text-uppercase" href="services">About me</a> -->
    </div>
</header> --}}

    <!-- Clients-->
    {{-- <div class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3 col-sm-6 my-3">
                <a href="http://garage-alex.online"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/microsoft.svg" alt="..." aria-label="Microsoft Logo" /></a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="portfolio"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/google.svg" alt="..." aria-label="Google Logo" /></a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="contact" target="_blank"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/facebook.svg" alt="..." aria-label="Facebook Logo" /></a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="contact"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/ibm.svg" alt="..." aria-label="IBM Logo" /></a>
            </div>
        </div>
    </div>
</div> --}}

    <div class="container">
        <div class="card">
            <div class="card-header">Players</div>
            <div class="card-body">
                {{-- <chat-messages :messages="messages"></chat-messages> --}}

                <div class="card-body">
                    @forelse ($players as $player)
                        <li>
                            {{-- <a href="{{ route('action.show', $player->player_id)}}">{{ $player->name }}</a> --}}
                            <a href="#">{{ $player->name }}</a>
                            <p>steam id: {{ $player->steam_id }}</p>
                            <p>title: {{ $player->title }}</p>
                            <p>comments: {{ $player->comment }}</p>
                        </li>
                    @empty
                        <li class="text-danger"> Rien </li>
                    @endforelse
                </div>

            </div>
            <div class="card-footer">
                <chat-form v-on:messagesent="addMessage" :user="{{ Auth::user() }}"></chat-form>
            </div>
        </div>
    </div>

@endsection
