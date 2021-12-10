@section('styles')
    @parent
    <link rel="stylesheet" href="/css/related-pages.css">
@endsection
@if (!empty($content['elements']))
    <section class="content">
        <h4 class="related-pages-heading">{{ __('content.Вас также заинтересует') }}</h4>
        <ul class="related-pages-grid">
            @foreach ($content['elements'] as $item)
                <li class="related-pages-grid__item">
                    <a href="{{ $item['link'] }}" title="{{ $item['title'] }}">
                        <h5 class="related-pages-grid__heading">{{ $item['title'] }}</h5>
                        <p class="related-pages-grid__text">{{ $item['description'] }}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    </section>
@endif
