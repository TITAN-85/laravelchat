{{-- @extends('master') --}}
@extends('layouts.app')
@section('title', 'home')
@section('content')

<!-- Masthead-->
<header class="masthead">
    <div class="container">
        <div class="masthead-subheading">Welcome!</div>
        <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
        <!-- <a class="btn btn-primary btn-xl text-uppercase" href="services">About me</a> -->
    </div>
</header>

<x-countdowntimer></x-countdowntimer>
<x-video_galery></x-video_galery>

@endsection



