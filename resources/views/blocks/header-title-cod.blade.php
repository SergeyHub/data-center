<div class="header-title">
    <div class="content">
        <div class="breadcrumbs">
            @foreach ($model->getBreadcrumbs() as $item)
                @if ($item['url'])
                    <span><a href="{{ $item['url'] }}">{{ $item['name'] }}</a></span>
                    <span> / </span>
                @else
                    <span>{{ $item['name'] }}</span>
                @endif
            @endforeach
        </div>
        <div class="header-content">
            <div class="title">
                <h1>{{ $title }}</h1>
            </div>
            <div class="title-cod">
                <ul>
                    <li>
                        <img src="/images/icons/cloud-computing 1.svg">
                        <div>
                            13 400 {{ __('content.м') }}<sup>2</sup>
                        </div>
                        <div class="subtitle">
                            {{ __('content.общая площадь') }}
                        </div>
                    </li>
                    <li>
                        <img src="/images/icons/energy.svg">
                        <div>
                            <div>
                                17 {{ __('content.МВт') }}
                            </div>
                            <div class="subtitle">
                                {{ __('content.суммарная мощность') }}
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="/images/icons/password.svg">
                        <div>
                            <div>Tier 3</div>
                            <div class="subtitle">{{ __('content.уровень надежности') }}</div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="btn-register">
                <a href="#free-consultation">{{ __('content.Получить консультацию') }}</a>
            </div>
        </div>

        @isset($registerBtn)
            <div class="btn-register">
                <a href="#events-apply-request">{{ __('content.Зарегистрироваться') }}</a>
            </div>
        @endisset
    </div>
</div>
