@inject('viewHelper', 'App\Services\ViewHelper')
<div class="icons-list-vertical block {{ $viewHelper->getBackground($content) }}">
    <?php $heightImg = isset($content['heightImg']) ? "height: {$content['heightImg']}px;" : ""; ?>
    <div class="content">
        @isset ($content['title'])
            <h2>{{ $content['title'] }}</h2>
        @endisset
        @isset($content['subTitle'])
            <div class="subtitle center">
                {{ $content['subTitle'] }}
            </div>
        @endisset
        <div class="icons-list-vertical__container col-{{ $content['numCols'] ?? 5 }}">
            @foreach ($content['elements'] as $item)
                <div class="item">
                    <img style="{{ $heightImg }}" src="{{ $item['img'] }}">
                    @isset($item['title'])
                        <div class="title">
                            {{ $item['title'] }}
                        </div>
                    @endisset
                    <div>
                        <?php
                            echo html_entity_decode($item['text']);
                        ?>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
