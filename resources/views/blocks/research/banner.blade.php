@section('styles')
    @parent
    <link rel="stylesheet" href="{{  mix('/css/research/banner.css') }}">
@endsection
@section('scripts')
    @parent
    <script src="{{  mix('/js/research/banner.js') }}"></script>
@endsection
<div class="research-banner">
    @if (!empty($content['link']))
        <a class="js-animate animate" href="{{ $content['link'] }}">
            @endif
            <div class="b-main-info__overlay js-main-info hidden-xs"
                 style="transform: translate3d(0px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden;">
                <div class="layer layer-1 research-banner__layer research-banner__layer_1" data-depth="0.60"
                     style="transform: translate3d(84.2681px, -6.51646px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"></div>
                <div class="layer layer-2 research-banner__layer research-banner__layer_2" data-depth="0.40"
                     style="transform: translate3d(56.1788px, -4.3443px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"></div>
                <div class="layer layer-3 research-banner__layer research-banner__layer_3" data-depth="0.60"
                     style="transform: translate3d(84.2681px, -6.51646px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"></div>
                <div class="layer layer-4 research-banner__layer research-banner__layer_4" data-depth="0.40"
                     style="transform: translate3d(56.1788px, -4.3443px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"></div>
            </div>
            <div class="research-banner__content">
                <div class="research-banner__container content">
                    <div class="research-banner__text-left">{!! $content['text_left'] !!}</div>
                    <div class="research-banner__text-center">{!! $content['text_center'] !!}</div>
                    <div class="research-banner__text-right">{!! $content['text_right'] !!}</div>
                </div>
            </div>
            @if (!empty($content['link']))
        </a>
    @endif
</div>
