@section('styles')
    @parent
    <link rel="stylesheet" href="{{  mix('/css/research/gallery.css') }}">
@endsection
@section('scripts')
    @parent
    <script src="{{  mix('/js/research/gallery.js') }}"></script>
@endsection
<div class="research-gallery content">
    <div class="research-gallery-wrapper">
        <div class="research-gallery__images research-gallery__images_full" itemscope
             itemtype="http://schema.org/ImageGallery">
            <ul class="research-gallery__ul research-gallery__ul_full" id="research-gallery-image">
                @foreach ($content['elements'] as $item)
                    <li class="research-gallery__li research-gallery__li_full {{ $loop->index === 0 ? 'research-gallery__li_active' : '' }}">
                        <figure class="research-gallery__figure" itemprop="associatedMedia" itemscope
                                itemtype="http://schema.org/ImageObject">
                            <img id="gallery-{{ $loop->index }}" class="research-gallery__image" src="{{ $item['img'] }}"
                                 itemprop="contentUrl"
                                 alt="{{ $item['title'] }}"/>
                        </figure>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="research-gallery__images" itemscope itemtype="http://schema.org/ImageGallery">
            <ul class="research-gallery__ul research-gallery__ul_navigation" id="research-gallery-navigation">
                @foreach ($content['elements'] as $item)
                    <li class="research-gallery__li">
                        <a href="#gallery-{{ $loop->index }}" data-image_id="{{ $loop->index }}" title="{{ $item['title'] }}" class="research__link">
                            <figure class="research-gallery__figure" itemprop="associatedMedia" itemscope
                                    itemtype="http://schema.org/ImageObject">
                                <img class="research-gallery__image" src="{{ $item['img'] }}" itemprop="contentUrl"
                                     alt="{{ $item['title'] }}"/>
                            </figure>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="research-gallery__text">
        {!! $content['text'] !!}
    </div>
</div>
