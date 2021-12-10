<div class="categories content">
    <?php $categories = \App\Models\ServiceCategory::all(); ?>
    <a href="{{ route('services') }}" class="{{ !empty($category) ?: 'active' }}">{{ __('content.Все') }}</a>
    @foreach ($categories as $item)
        <a class="{{ !empty($category) && $item['id'] === $category['id'] ? 'active' : '' }}"
           href="{{ route('services.category', ['slug' => $item['slug']]) }}">
            {{ $item['name'] }}
        </a>
    @endforeach
</div>
