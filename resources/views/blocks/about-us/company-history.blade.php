<?php
usort($content['elements'], function($a, $b) {
    return $b['year'] > $a['year'] ? 1 : -1;
});
?>
<div class="timeline block">
    <div class="content">
        <h2>{{ __('content.История компании') }}</h2>
        <div class="timeline__history">
            @foreach($content['elements'] as $item)
                <div class="timeline__history__link {{ $loop->first ? 'active' : ''}}" href="#" data-id="{{ $item['year'] }}">{{ $item['year'] }}</div>
            @endforeach
        </div>
        @foreach($content['elements'] as $item)
            <div data-id="{{ $item['year'] }}" class="description {{ $loop->first ? 'active' : '' }}">
                @isset($item['img'])
                    <img src="{{ $item['img'] }}" alt="">
                @endisset
                <p>{{ $item['caption'] }}</p>
            </div>
        @endforeach
    </div>
</div>
