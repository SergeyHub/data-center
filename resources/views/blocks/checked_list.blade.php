@inject('viewHelper', 'App\Services\ViewHelper')
<div class="checked-list {{ $viewHelper->getBackground($content) }}">
    <div class="content">
        <div class="header">
            <h2>
                {{ $content['title'] }}
            </h2>
            @isset($contentsubTitle)
                <div class="subtitle">
                    {{ $content['subTitle'] }}
                </div>
            @endisset
        </div>
        <div class="block-content">
            @foreach($content['elements'] as $element)
                <div class="item">
                    <img src="/images/icons/pink_checked_icon.png" alt="{{ __('checked icon') }}">
                    <div class="item">{{ $element['text'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</div>
