<div class="image">
    <div class="content">
        @isset($content['title'])
            <div class="header">
                <h2>{{ $content['title'] }}</h2>
            </div>
        @endisset
        @isset($content['subTitle'])
            <div class="subtitle center">
                {{ $content['subTitle'] }}
            </div>
        @endisset
        <img src="{{ $content['img'] }}" data-image-popup="">
    </div>
</div>
