@extends('layouts.app')

@section('content')
    <section id="videos">
        <h2 class="sub-headline">VIDEOS</h2>

        <div class="videos-content">
            @foreach ($videos as $video)
                <div class="responsive-content">
                    {!! $video !!}
                </div>
            @endforeach
        </div>

    </section>
@endsection