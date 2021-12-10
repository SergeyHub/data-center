<?php
$background = isset($content['background']) ? "background: {$content['background']};" : "";
$colorFont = isset($content['colorFont']) ? "color: {$content['colorFont']};" : "";
$newclass = false;
if(strpos($_SERVER['REQUEST_URI'], 'services/data-center-services/colocation') !== false){
    $newclass='bg_btn_central_line';
}
?>

<div class="text-btn {{$newclass}}" style="{{ $background }}">
    <div class="content">
        <div class="block-content {{ $content['isColumn'] ? 'column' : '' }}">
            <div class="text" style="{{ $colorFont }}">
                {!! $content['text'] !!}
            </div>
            <div class="bg_btn_central_line_btnBlock">
                @isset($content['btnText'])
                    @if(strlen($content['btnText']) > 0)
                        <div class="button-wrap">
                            <a class="btn gradient" href="{{ $content['btnLink'] }}">{{ $content['btnText'] }}</a>
                        </div>
                    @endif
                @endisset
                @isset($content['btnAdditionalText'])
                    @if(strlen($content['btnAdditionalText']) > 0)
                        <div class="button-wrap">
                            <a class="btn gradient"
                               href="{{ $content['btnAdditionalLink'] ?? '' }}">{{ $content['btnAdditionalText'] }}</a>
                        </div>
                    @endif
                @endisset
            </div>

        </div>
    </div>
</div>
