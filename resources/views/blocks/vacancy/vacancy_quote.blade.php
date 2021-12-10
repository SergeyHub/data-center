<div class="review-wrapper">
    <div class="container">
        @foreach ($content['elements'] as $item)
            <div class="row">
                <div class="review-item review-item_withBackground">
                    <div class="review-wrapper__row content">
                        <div class="col-lg-1">
                            <div class="item-image">
                                <img src="{{ $item['img'] }}"
                                     alt="{{ $item['name'] }}">
                            </div>
                        </div>
                        <div class="col-lg-11 review-text">
                            <div class="item-info">
                                <div class="item-name">
                                    {{ $item['name'] }}
                                </div>
                                <div class="item-role">
                                    {{ $item['title'] }}<br>
                                    {!! $item['link'] !!}
                                </div>
                            </div>
                            <p class="quote item-text__padding">{{ $item['text'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
