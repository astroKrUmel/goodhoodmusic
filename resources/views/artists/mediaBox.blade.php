<section id="mediaBox">
    <div class="music-and-links">

        @if ($artist->id === 3 || $artist->id === 8)
            <p>Für Bookinganfragen außerhalb Leipzigs schickt bitte eine E-Mail an {{config('goodHoodMusicConfig.emailNotLeipzig')}}.</p>
        @endif

        <a href="mailto:{{config('goodHoodMusicConfig.bookingEmail')}}" class="button button-booking">BOOKING</a>

        <div class="embed-player">
            @if (array_key_exists('mixes', $links))
                @foreach ($links['mixes'] as $mix)
                    {!! $mix !!}
                @endforeach
        @endif
        </div>

        <div class="links">
            @if (array_key_exists('facebook', $links))
                <a class="link icon icon-facebook-white" href="{{$links['facebook']}}" target="_blank" title="Facebook"></a>
            @endif

            @if (array_key_exists('mixcloud', $links))
                <a class="link icon icon-mixcloud" href="{{$links['mixcloud']}}" target="_blank" title="Mixcloud"></a>
            @endif

            @if (array_key_exists('instagram', $links))
                <a class="link icon icon-instagram" href="{{$links['instagram']}}" target="_blank" title="Instagram"></a>
            @endif

            @if (array_key_exists('others', $links))
                @foreach ($links['others'] as $link)
                    <a class="link direct-link" href="{{$link['url']}}" target="_blank" title="{{$link['name']}}">
                        {{$link['name']}}
                    </a>
                @endforeach
            @endif
        </div>
    </div>
</section>