@inject('newsRepository', 'App\Services\NewsRepository')
<div class="cards block bg-grey">
    <div class="content">
        <h2>{{ __('content.Последние новости') }}</h2>
        <div class="cards__container">
            <?php $newsLast = $newsRepository->getLastNews(); ?>
            @foreach ($newsLast as $news)
                <a href="{{ route('news.item', ['category' => $news->category->slug, 'slug' => $news->slug]) }}" class="card border-gradient">
                    <div>
                        <div class="date">{{ $news->created_at->format('d.m.Y') }}</div>
                        <div class="title">
                            {{ $news->name }}
                        </div>
                        <p>
                            {!! $news->description !!}
                        </p>
                    </div>
                    <span class="more">{{ strtoupper(__('content.Подробнее')) }}</span>
                </a>
            @endforeach
        </div>
        <a href="{{ route('news') }}" class="btn gradient">
            {{ __('content.Все новости') }}
        </a>
    </div>
</div>
