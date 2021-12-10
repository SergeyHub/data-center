@inject('viewHelper', 'App\Services\ViewHelper')
<div class="advantages block {{ $viewHelper->getBackground($content) }}">
    <div class="content">
        @isset ($content['title'])
            <h2>{!! $content['title'] !!}</h2>
        @endisset
        @isset($content['subTitle'])
            <div class="subtitle center">
                {{ $content['subTitle'] }}
            </div>
        @endisset
        <div class="advantages__container{{ $viewHelper->getRowsCount($content) }}">
            @foreach ($content['elements'] as $item)
                @php
                    try{
                        $image = file_get_contents(url()->to('/') . $item['img']);
                    }catch (\Exception $e) {
                        $image = "<img src='{$item['img']}'/>";
                    }
                @endphp
                <div class="item">
                    @if (pathinfo($item['img'], PATHINFO_EXTENSION) === 'svg')
                        {!! $image !!}
                    @else
                        <img src="{{ $item['img'] }}" alt="{{ $item['text'] }}">
                    @endif
                    <p>
                        {!! $item['text'] !!}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</div>
