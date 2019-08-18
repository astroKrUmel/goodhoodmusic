<section id="events">
    <h2 class="sub-headline">EVENTS</h2>

    <div class="facebook-event">
        @if (array_key_exists('facebook', $links))
            <div class="fb-page-wrapper mobile">
                <div class="fb-page"
                     data-href="{{$links['facebook']}}"
                     data-tabs="events"
                     data-width="270"
                     data-height="700"
                     data-small-header="true"
                     data-adapt-container-width="true"
                     data-hide-cover="true"
                     data-show-facepile="false">
                </div>
            </div>

            <div class="fb-page-wrapper tablet">
                <div class="fb-page"
                     data-href="{{$links['facebook']}}"
                     data-tabs="events"
                     data-width="430"
                     data-height="700"
                     data-small-header="true"
                     data-adapt-container-width="false"
                     data-hide-cover="true"
                     data-show-facepile="false">
                </div>
            </div>
        @endif
    </div>

    <div class="seperator"></div>
</section>