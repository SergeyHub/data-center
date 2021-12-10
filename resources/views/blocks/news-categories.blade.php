@inject('newsRepository', 'App\Services\NewsRepository')
<div class="categories content">
    <?php $categories = $newsRepository->getNewsCategories(); ?>
    <a href="{{ route('news') }}" class="{{ !empty($category) ?: 'active' }}">{{ __('content.Все') }}</a>
    @foreach ($categories as $item)
        <a class="{{ !empty($category) && $item['id'] === $category['id'] ? 'active' : '' }}"
           href="{{ route('news.category', ['slug' => $item['slug']]) }}">
            {{ $item->name }} ({{ $item->news_count }})
        </a>
    @endforeach
</div>
