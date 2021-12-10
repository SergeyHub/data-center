<div class="header-title">
    <div class="content">
        <div class="breadcrumbs" itemscope itemtype="https://schema.org/BreadcrumbList">
            @if (!empty($model))
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
            @endif
        </div>
        <h1>{{ $name_in_title ?? $title }}</h1>
        @isset($subtitle)
            <div class="subtitle">
                {{ $subtitle }}
            </div>
        @endisset
        @isset($location)
            <div class="location">
                {!! $location !!}
            </div>
        @endisset
        @isset($registerBtn)
            <div class="btn-register">
                @if($timeend < date('d m Y H:i'))
                    <a href="#events-apply-request">{{ __('content.Зарегистрироваться') }}</a>
                @else
                    <a href="#events-apply-request">{{ __('content.Отправить заявку') }}</a>
                    <p>{{ __('content.Мероприятие прошло. Оставте заявку, мы пригласим Вас на следующее.') }}</p>
                @endif
            </div>
        @endisset
    </div>
</div>
