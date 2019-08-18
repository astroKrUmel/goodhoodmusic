@extends('layouts.app')

@section('content')
    <div class="home">

        @include('home.startpageOverlay')

        @if(!empty($message))
            <span>{{$message}}</span>
        @endif()

        @if(Auth::check() && Auth::user())
            <span>Willkommen zurück, {{ucfirst(Auth::user()->name)}}</span>
        @endif

        @include('home.artists')

        @include('common.events')

        @include('common.contact')

    </div>
@endsection
