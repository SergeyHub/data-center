<div class="images bg-grey">
    <div class="content">
        <div class="fotorama" data-nav="thumbs" data-thumbwidth="190" data-thumbheight="190">
            @foreach($content as $item)
                <a href="{{ $item->url }}"><img src="{{ $item->url }}"></a>
            @endforeach
        </div>
    </div>
</div>

