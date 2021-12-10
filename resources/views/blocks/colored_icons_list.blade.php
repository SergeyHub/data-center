@inject('viewHelper', 'App\Services\ViewHelper')
<div class="colored-icons-list {{ $viewHelper->getBackground($content) }}">
    <div class="content">
        @isset($content['title'])
            <h2>{{ $content['title'] }}</h2>
        @endisset
        @isset($content['subTitle'])
            <div class="subtitle center">{{ $content['subTitle'] }}</div>
        @endisset
        <div class="items">
            @foreach($content['elements'] as $item)
                <div>
                    <div class="img">
                        <svg width="25" height="28" viewBox="0 0 25 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.5477 22.0954L18.8797 24.7925L14.1079 27.5933C13.1743 28.112 12.0332 28.112 11.0996
                        27.5933L6.43153 24.8962L1.65975 22.0954C0.518672 21.5767 0 20.5394 0 19.502V14.0041V8.50617C0
                        7.36509 0.622407 6.43148 1.55602 5.91281L6.22407 3.21571L10.9959 0.414883C11.9295 -0.103789 13.0705 -0.103789
                        14.0041 0.414883L18.7759 3.11198L23.5477 5.91281C24.4813 6.43148 25 7.46882 25 8.50617V14.0041V19.502C25 20.6431
                        24.3776 21.5767 23.5477 22.0954ZM15.8714 19.7095L19.1909 17.8423V14.0041V10.1659L15.8714 8.2987L12.4481 6.32775L9.12863
                        8.2987L5.91286 10.1659V14.0041V17.8423L9.23236 19.7095L12.5519 21.5767L15.8714 19.7095Z"
                                  fill="{{ $item['color'] }}"/>
                        </svg>
                    </div>
                    <div class="block-content">
                        <div class="title">
                            @isset($item['title'])
                                {{ $item['title'] }}
                            @endisset
                        </div>
                        <div class="desc">
                            {{ $item['text'] }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
