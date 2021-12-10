@inject('newsRepository', 'App\Services\NewsRepository')
<div class="news content">
    <?php $news = $newsRepository->getSmiNews(); ?>

    @foreach($news as $item)
        <a href="{{ route('news.smi.item', ['slug' => $item->slug]) }}" class="news__card">
            <span class="date">{{ $item->created_at->format('d.m.Y') }}</span>
            <span class="title">{{ $item->name }}</span>
            <p class="preview">
                {{ $item->description }}
            </p>
        </a>
    @endforeach
</div>
{{ $news->links() }}
