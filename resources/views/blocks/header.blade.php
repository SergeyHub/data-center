@inject('langHelper', 'App\Services\LangHelper')
<?php

$contacts = [
    [
        'name' => __('content.Москва'),
        'phone' => '+7 495 369-05-94',
        'work_time' => __('content.Пн-Пт') . ' ' . __('content.с') . ' 9:00 ' . __('content.до') . ' 18:00 (MSK)'
    ],
    [
        'name' => __('content.Санкт-Петербург'),
        'phone' => '+7 812 244-05-94',
        'work_time' => __('content.Пн-Пт') . ' ' . __('content.с') . ' 9:00 ' . __('content.до') . ' 18:00 (MSK)'
    ]
];

?>
@if(!isset($_COOKIE["showCookies"]))
<div class="cookies-block" id="cookies_block">
    <p>{{ __('content.Наш сайт использует файлы Cookie. Продолжая пользоваться сайтом, Вы соглашаетесь на использование нами Ваших файлов cookie.') }} <a href="{{ __('content./upload/Privacy_policy.pdf') }}" target="_blank">{{ __('content.Подробнее') }}</a></p>
    <p><a id="cookie_btn" class="btn gradient" href="javascript:void(0);">{{ __('content.Хорошо, спасибо.') }}</a></p>
</div>
@endif
<div class="header">
    <div class="info">
        <div class="content">

            <div class="phone" style="display: flex">
                <div data-city="{{ $contacts['0']['name'] }}">
                    {{ $contacts['0']['name'] }} <a onclick="metrikaCounter('header-phone')" href="tel:{{ $contacts['0']['phone'] }}">{{ $contacts['0']['phone'] }} </a>
                </div>
                <div data-city="{{ $contacts['1']['name'] }}" style="padding: 0 10px">
                    {{ $contacts['1']['name'] }} <a onclick="metrikaCounter('header-phone')" href="tel:{{ $contacts['1']['phone'] }}">{{ $contacts['1']['phone'] }} </a>
                </div>
            </div>
            <div class="email">
                <a onclick="metrikaCounter('header-email')"
                   href="mailto:info@admindatacenter.com">
                    info@admindatacenter.com
                </a>
            </div>
            @include('blocks.lang-switch')
        </div>
    </div>
    <div class="nav">
        <div class="content">
            <div class="logo">
                <a href="/"><img src="/images/logo.svg" alt=""></a>
            </div>
            <div class="links">
                @include('blocks.menu')
            </div>
            <div class="search"></div>
            <button class="btn request-button">
                {{ __('content.Отправить запрос') }}
            </button>
        </div>
    </div>
    <div class="search-field">
        <div class="content">
            <form action="{{ route('search') }}">
                <input name="q" type="text"
                       placeholder="{{ __('content.Введите то, что вы ищите, например, «база данных»') }}">
                <img src="/images/icons/search-pink.svg" alt="">
            </form>
        </div>
    </div>
    <div class="nav__mobile">
        <div class="content">
            <div class="logo">
                <a href="/"><img src="/images/logo.svg" alt=""></a>
            </div>
            <div class="burger">
                <img src="/images/icons/burger.svg" alt="">
            </div>
        </div>
        <div class="links">
            @include('blocks.menu-mobile')
            <div class="info">
                <div class="content">
                    <div class="phone">
                        <div data-city="{{ $contacts['0']['name'] }}">
                            {{ $contacts['0']['name'] }} <a onclick="metrikaCounter('header-phone')" href="tel:{{ $contacts['0']['phone'] }}">{{ $contacts['0']['phone'] }} </a>
                        </div>
                        <div data-city="{{ $contacts['1']['name'] }}" style="padding: 10px 0">
                            {{ $contacts['1']['name'] }} <a onclick="metrikaCounter('header-phone')" href="tel:{{ $contacts['1']['phone'] }}">{{ $contacts['1']['phone'] }} </a>
                        </div>
                    </div>
                    <div class="email">
                        <a onclick="metrikaCounter('header-email')"
                           href="mailto:info@admindatacenter.com">info@admindatacenter.com</a>
                    </div>
                    @include('blocks.lang-switch')
                </div>
            </div>
            <button class="btn request-button">
                {{ __('content.Отправить запрос') }}
            </button>
        </div>
    </div>
</div>

@include('blocks.modal')
