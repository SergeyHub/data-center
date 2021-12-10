@inject('pageRepository', 'App\Services\PageRepository')
<div class="banner" style="position:relative;overflow: hidden">


    <video autoplay muted loop id="myVideo" style="position:absolute; right: 0;
    bottom: -13%; z-index: 1;
    min-width: 100%;
    min-height: 100%;">
        <source src="bg/bg.mov" type="video/mp4"></source>
    </video>


    <div class="content bg-image" style="position: relative;z-index: 2">
        <div class="banner__title">{{ $content['title'] }}</div>
        @isset($content['text'])
            {!! $content['text'] !!}
        @endisset
        <div class="banner__btn-block">

            @isset($content['primaryLink'])
                @isset($content['primaryLink']['url'])
                    <a href="{{ $content['primaryLink']['url'] }}" class="btn">
                        {{ $content['primaryLink']['title'] }}
                    </a>
                @endisset
            @endisset
            @isset($content['thirdLink'])
                @isset($content['thirdLink']['url'])
                    <button data-modal-id="{{ $content['thirdLink']['url'] }}" class="btn open-model-id">
                        {{ $content['thirdLink']['title'] }}
                    </button>
                @endisset
            @endisset
        </div>
    </div>
</div>

@isset($content['thirdLink'])
    @if($content['thirdLink']['url'] === 'modal-demo-access')
        @include('blocks.modal-demo-access')
    @endisset
@endisset
