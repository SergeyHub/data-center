@inject('viewHelper', 'App\Services\ViewHelper')
<div class="logos-list block {{ $viewHelper->getBackground($content) }}">
    <div class="content">
        <div class="logos-list__border">
            @if ($content['title'])
                <h2>{{ $content['title'] }}</h2>
            @endif
            <div class="logos-list__container" data-count="{{ count($content['elements']) }}">
                @foreach ($content['elements'] as $item)
                    <div class="item">
                        <img src="{{ $item['img'] }}" alt="">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
