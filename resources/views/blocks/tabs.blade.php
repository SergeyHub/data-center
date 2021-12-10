<div class="{{ $content['class'] }}" data-detailed="{{ __('content.Узнать больше') }}"
     data-hide="{{ __('content.Скрыть') }}">
    <div class="content">
        <div class="header">
            <h2>{{ $content['title'] }}</h2>
        </div>
        <div class="toggle">
            @foreach($content['elements'] as $item)
                @empty($item['text'])
                    @continue
                @endempty
                <div data-id="{{ $item['id'] }}" class="{{ $loop->first ? 'active' : '' }}">
                    {{ $item['title'] }}
                    <img src="/images/icons/arrow-down.svg">
                </div>
            @endforeach
        </div>
        <div>
            @foreach($content['elements'] as $item)
                @empty($item['text'])
                    @continue
                @endempty
                {!! $item['text'] !!}
            @endforeach
        </div>
    </div>

</div>
