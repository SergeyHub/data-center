@inject('newsRepository', 'App\Services\NewsRepository')
@if ($newsRepository->getSmiNewsByCategory('hr')->count() > 0)
    <div class="text-banner bg-gradient">
        <h2 class="benefits__title benefits__title_text-banner">
            <span class="blue">{{ __('content.Статьи от HR') }}</span>
        </h2>
        <div class="news content">
            @foreach($newsRepository->getSmiNewsByCategory('hr') as $item)
                <article class="news__card news__card_third">
                    <span class="date">{{ $item->created_at->format('d.m.Y') }}</span>
                    <a href="{{ route('news.smi.item', ['slug' => $item->slug]) }}">
                        <span class="title">{{ $item->name }}</span></a>
                    <p class="preview">
                        {{ $item->description }}
                    </p>
                    <a href="{{ route('news.smi.item', ['slug' => $item->slug]) }}"
                       class="arrow-before articles__more d-block">{{ __('content.Подробнее') }}</a>
                </article>
            @endforeach
        </div>
    </div>
@endif