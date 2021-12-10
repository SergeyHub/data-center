<?php
$elements = array_filter($content['elements'], function ($item) {
    return !empty($item['background']);
});
?>
<div class="color-columns">
    @isset($content['header'])
        <h2>{{ $content['header'] }}</h2>
    @endisset
    @isset($content['subtitle'])
        <div class="subtitle center">{{ $content['subtitle'] }}</div>
    @endisset
    <div class="columns"
         style="background: linear-gradient(90deg, {{ current($elements)['background'] }} 50%, {{ last($elements)['background'] }} 50%);">
        <div class="content">
            <div class="content-block col-{{ count($elements) }}">
                @foreach($content['elements'] as $item)
                    @empty($item['title'])
                        @empty($item['text'])
                            @continue
                        @endempty
                    @endempty
                    <div class="item" style="background: {{ $item['background'] }};">
                        <h3>{{ $item['title'] }}</h3>
                        <div class="text">
                            {!! $item['text'] !!}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
