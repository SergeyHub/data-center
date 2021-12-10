<div class="header-title">
    <div class="content">
        <div class="breadcrumbs" itemscope itemtype="https://schema.org/BreadcrumbList">
            @foreach ($model->getBreadcrumbs() as $item)
                @if ($item['url'])
                    <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                            <a itemprop="item" href="{{ $item['url'] }}">
                                <span itemprop="name">{{ $item['name'] }}</span>
                            </a>
                        <meta itemprop="position" content="{{ $loop->index + 1 }}"/>
                    </span>
                    <span> / </span>
                @else
                    <span>
                        <span>
                            {{ $item['name'] }}
                        </span>
                    </span>
                @endif
            @endforeach
        </div>
        <div class="header-content">
            <div class="title">
                <h1>{{ $title }}</h1>
                <div class="subtitle">
                    {!! $subtitle !!}
                </div>
                <div class="btn-collection">
                    <a class="gradient" href="#">Получить консультацию</a>
                    <a href="#" class="btn-count-price">Демо-доступ</a>
                </div>
            </div>
            <div class="title-cod">
                <img src="/images/service_banner.png">
            </div>
        </div>
    </div>
</div>
