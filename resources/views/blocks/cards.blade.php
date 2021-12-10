@inject('viewHelper', 'App\Services\ViewHelper')
<div class="block-cards {{ $viewHelper->getBackground($content) }}">
    <div class="content">
        <h2>{{ $content['title'] }}</h2>
        <div class="items">
            @foreach($content['elements'] as $item)
                <div>
                    <div class="img-wrap">
                        <img src="{{ $item['img'] }}">
                    </div>
                    <div class="title">{{ $item['title'] }}</div>
                    <div class="subtitle">{{ $item['subtitle'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</div>
