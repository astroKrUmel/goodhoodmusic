<section id="videos">
    @if (array_key_exists('videos', $links))
        <div class="videos-content">
            @foreach ($links['videos'] as $video)
                <div class="responsive-content">
                    {!! $video !!}
                </div>
            @endforeach
        </div>
    @endif
</section>
