@inject('pageRepository', 'App\Services\PageRepository')
<div class="cards block">
    <div class="content">
        <h2>{{ __('content.Вас также заинтересует') }}</h2>
        <div class="cards__container">
            @foreach($pageRepository->servicesInterest($model) as $service)
                <a href="{{ route('services.item', ['slug' => $service->slug, 'category' => $service->category->slug]) }}"
                   class="card">
                    <div>
                        <div class="title">
                            {{ $service->name }}
                        </div>
                        <p>
                            {{ $service->description }}
                        </p>
                    </div>
                    <span class="more">{{ strtoupper(__('content.Подробнее')) }}</span>
                </a>
            @endforeach
        </div>
        <?php $page = $pageRepository->getPageByBehavior('services') ?>
        <a href="{{ $page->url }}" class="btn gradient">
            {{ __('content.Все услуги') }}
        </a>
    </div>
</div>
