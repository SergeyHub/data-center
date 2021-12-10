<a class="card" href="{{ route('services.item', ['slug' => $service['slug'], 'category' => $category['slug']]) }}">
    <div>
        <div class="title">
            {{ $service['name'] }}
        </div>
        <p>
            {!! $service['description'] !!}
        </p>
    </div>
    <span class="more" >
        {{ strtoupper(__('content.Подробнее')) }}
    </span>
</a>
