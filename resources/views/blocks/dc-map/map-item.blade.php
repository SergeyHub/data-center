<div class="b-map__item js-map-item {{ $no_before }}" style="{{ $coordinates }}">
    <a class="item-pin js-map-item-pin" style="background-color: {{ $background_color }};" href="{{ $href }}">
        <img src="/images/icons/{{ $icon_name }}" alt=""></a>
    <div class="item-wrap js-map-item-wrap">
        <a class="item-wrap__close js-map-item-close" href="{{ $href }}"></a>
        @if (!empty($no_before) && !empty($place) && !empty($city))
            <div class="item-name js-map-item-name">
                {{ $place }} <span class="pink">admin</span>
                <span class="blue">datacenter</span> <br>
                <a href="#">{{ $city }}</a>
            </div>
        @endif
    </div>
</div>
