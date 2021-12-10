{{--@if($loop->iteration == 7)--}}
{{--    @continue--}}
{{--@endif--}}
{{--{{$loop->iteration}}--}}
{{--1--}}
{{--                                {{$loop}}--}}

<li class="service__card slide-item">
    <?php
    $img_arr = json_decode($service['fields']['builder'], true);
    $newsimg = $img_arr[0]['content'];
    if(isset( $newsimg['img'] )){
        $img_src = $newsimg['img'];
        $img_alt = $newsimg['title'];
    }else{
        $img_src = '';
        $img_alt = '';
    }
    ?>

    <div>1</div>
    <div class="service__header">
        <img
                data-src="{{$img_src}}"
                alt="{{$img_alt}}"
                class="lazyload service__img"
        />
        <div class="service__arrow">
            <a href="{{ route('services.item', ['slug' => $service['slug'], 'category' => $category['slug']]) }}" class="btn service__link"
            ><span class="btn__arrow"></span></a>
        </div>
    </div>
    <div class="service__content-block">
        <div class="service__subtitle">
            {{ $service['name'] }}
        </div>
        <div class="service__desc">
            {!! $service['description'] !!}
        </div>
    </div>
</li>
