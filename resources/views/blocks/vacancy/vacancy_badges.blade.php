<div class="benefits__list row facts content">
    @foreach ($content['elements'] as $item)
    <div class="benefits__item">
        <div class="item-image">
        </div>
        <div class="item-content">
            <div class="item-name">
                {{ $item['text'] }}
            </div>
            <div class="item-text">
            </div>
        </div>
    </div>
    @endforeach
</div>
