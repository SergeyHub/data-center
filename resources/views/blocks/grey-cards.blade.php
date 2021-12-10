<div class="grey-cards">
    <div class="content">
        @isset ($content['title'])
            <h2>{{ $content['title'] }}</h2>
        @endisset
        @isset($content['subTitle'])
            <div class="subtitle center">
                {{ $content['subTitle'] }}
            </div>
        @endisset
        <div class="center block-content">
            @foreach ($content['elements'] as $item)
                <div>
                    @isset($item['img'])
                        <div class="center img-wrap"><img src="{{ $item['img'] }}"/></div>
                    @endisset
                    <div class="card-title center">
                        <h3>{{ $item['title'] }}</h3>
                    </div>
                    <div class="card-subtitle center">
                        {{ $item['subtitle'] }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
