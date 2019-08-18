@extends('layouts.app')

@section('content')

    <div class="artist">
        @include('artists.mainPic')

        @if (!empty($artist->biography))
            @include('artists.biography')
        @endif

        @include('artists.mediaBox')

        @include('artists.pictureGallery')

        @include('artists.videos')

        @include('common.events')
    </div>

@endsection
