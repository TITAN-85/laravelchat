@extends('layouts.app')
@section('content')

<header class="masthead masthead-chat">
    <div class="container">
        <div class="masthead-subheading">The Isle chat</div>
        {{-- <div class="masthead-heading text-uppercase">It's Nice To Meet You</div> --}}
        <!-- <a class="btn btn-primary btn-xl text-uppercase" href="services">About me</a> -->
    </div>
</header>

    <div class="container pt-5">
        <div class="card mt-5">
            <div class="card-header">Chats</div>
            <div class="card-body">
                <chat-messages :messages="messages"></chat-messages>
            </div>
            <div class="card-footer">
                <chat-form v-on:messagesent="addMessage" :user="{{ Auth::user() }}"></chat-form>
            </div>

            {{-- @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        <p>For title min. 2 ch and max. 50</p>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}

        </div>
    </div>
@endsection
