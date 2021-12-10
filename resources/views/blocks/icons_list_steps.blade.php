<div class="icons-list-steps block">
    <div class="content">
        @isset ($content['title'])
            <h2>{{ $content['title'] }}</h2>
        @endisset
        @isset($content['subTitle'])
            <div class="subtitle center">
                {{ $content['subTitle'] }}
            </div>
        @endisset
        <div class="icons-list-steps__container">
            @foreach ($content['elements'] as $item)
                <div class="item">
                    <img src="{{ $item['img'] }}" alt="{{ $item['text'] }}">
                    <p>
                        {{ $item['text'] }}
                    </p>
                </div>
                @if($loop->last !== true)
                    <div class="arrow">
                        <img src="/images/icons/util_arr.png">
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
