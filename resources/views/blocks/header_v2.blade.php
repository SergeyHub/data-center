@inject('langHelper', 'App\Services\LangHelper')
@inject('pageRepository', 'App\Services\PageRepository')
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
<header class="header">
    <li class="container header__container">
        <div class="header__block logo">
            <a href="/" class="header__logo">
                <img src="img/logo.png" alt="Логотип" class="logo__img" />
            </a>
        </div>
        <nav class="header__nav">
            <ul class="header__list">
                @php  $i=1; @endphp
                @foreach($pageRepository->getMenu() as $item)
                    <li class="header__item dropdown">
                        <button type="button" class="btn dropbtn line-hover"><a href="{{ $item->url }}">{{ $item->name }}</a></button>
                        @if (isset($item->children) && count($item->children) && $item->behavior === 'services')
                            <ul class="header__cards dropdown__content dropdown__content_full dropdown__content_pos-zero">
                                @foreach ($item->children as $child1)
                                        <li class="header__card header__card_vertical">
                                            <div class="header__img">
                                                <img src="img/drop-content-img{{$i}}.svg" alt="{{ $child1->name }}"/>
                                            </div>
                                            <div class="dropdown__title">{{ $child1->name }}</div>
                                            <ul class="dropdown__list">
                                                @foreach ($child1->services as $child2)
                                                <li class="dropdown__item">
                                                        <a href="{{ route('services.item', ['slug' => $child2->slug, 'category' => $child1->slug]) }}" class="dropdown__link">
                                                            {{ $child2->name }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                @php  $i++; @endphp
                                @endforeach
                            </ul>
                        @elseif($item->behavior === 'cod')
                        <ul class="header__cards dropdown__content dropdown__content_size-s dropdown__content_pos-one">
                            <li class="header__card header__card_horizontal">
                                <div class="header__img">
                                    <img src="img/drop-content-img{{$i}}.svg" alt="Дата-центер" />
                                </div>
                                <ul class="dropdown__list">
                                    <li class="dropdown__item">
                                        <a href="{{ $pageRepository->getPageByBehavior($item->behavior)->url }}#moscow">
                                            {{ __('content.Москва') }}
                                        </a>
                                    </li>
                                    <li class="dropdown__item">
                                        <a href="{{ $pageRepository->getPageByBehavior($item->behavior)->url }}#saint-petersburg">
                                            {{ __('content.Санкт-Петербург') }}
                                        </a>
                                    </li>
                                    <li class="dropdown__item">
                                        <a href="{{ $pageRepository->getPageByBehavior($item->behavior)->url }}#warsaw">
                                            {{ __('content.Варшава') }}
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        @php  $i++; @endphp
                        @elseif ($item->behavior === 'contacts')
                            <ul
                                    class="
                      header__cards header__contacts
                      dropdown__content
                      dropdown__content_full
                      dropdown__content_pos-zero
                    "
                            >
                                <li class="header__card header-contact header__card_vertical">
                                    <div class="header-contact__block">
                                        <div class="header-contact__elem">
                                            <div class="header__img">
                                                <img
                                                        src="img/drop-content-img5.svg"
                                                        alt="Контакты и отзывы"
                                                />
                                            </div>
                                            <div class="dropdown__title">
                                                <a class="header-contact__link line-hover" href="/"
                                                > {{ __('content.Контакты') }}</a
                                                >
                                            </div>
                                        </div>
                                        <div class="header-contact__title"> {{ __('content.Техподдержка 24/7') }}</div>
                                    </div>
                                    <div class="header-contact__relations">
                                        <a href="tel:+78003500594" class="header-contact__phone"
                                        >+7 800 350-05-94</a
                                        >
                                        <a
                                                href="mailto:support@admindatacenter.com"
                                                class="header-contact__mail"
                                        >support@admindatacenter.com</a
                                        >
                                    </div>
                                </li>
                                <li class="header__card header-contact header__card_vertical">
                                    <div class="header-contact__block">
                                        <div class="header-contact__elem">
                                            <div class="header__img">
                                                <img src="img/drop-content-img7.svg" alt="Москва" />
                                            </div>
                                            <div class="dropdown__title">
                                                @if (app()->isLocale('ru'))
                                                    Lindxdatacenter в Москве
                                                @elseif(app()->isLocale('en'))
                                                    Lindxdatacente in Moscow
                                                @endif

                                            </div>
                                        </div>
                                        <div class="header-contact__title">
                                            @if (app()->isLocale('ru'))
                                                127083, Россия, г. Москва, ул. 8 Марта, д. 14, БЦ "Кулон"
                                            @elseif(app()->isLocale('en'))
                                                8 Marta Street, Building 14, Construction 1,
                                                127083 Moscow, Russia
                                            @endif

                                        </div>
                                    </div>
                                    <div class="header-contact__relations">
                                        <a href="tel:+74953690594" class="header-contact__phone"
                                        >+7 495 369-05-94</a
                                        >
                                        <a
                                                href="mailto:info@admindatacenter.com"
                                                class="header-contact__mail"
                                        >info@admindatacenter.com</a
                                        >
                                    </div>
                                </li>
                                <li class="header__card header-contact header__card_vertical">
                                    <div class="header-contact__block">
                                        <div class="header-contact__elem">
                                            <div class="header__img">
                                                <img
                                                        src="img/drop-content-img8.svg"
                                                        alt="Санкт-Петербургя"
                                                />
                                            </div>
                                            <div class="dropdown__title">
                                                @if (app()->isLocale('ru'))
                                                    Lindxdatacenter в Санкт-Петербурге
                                                @elseif(app()->isLocale('en'))
                                                    Lindxdatacente in St. Petersburg
                                                @endif

                                            </div>
                                        </div>
                                        <div class="header-contact__title">
                                            @if (app()->isLocale('ru'))
                                                197375, Россия, г. Санкт-Петербург, ул. Репищева, д. 20,
                                                литера А
                                            @elseif(app()->isLocale('en'))
                                                Sky-Trade Business Center, Ul.Repischeva 20a,
                                                197375 Saint Petersburg, Russia
                                            @endif

                                        </div>
                                    </div>
                                    <div class="header-contact__relations">
                                        <a href="tel:+78122440594" class="header-contact__phone"
                                        >+7 812 244-05-94</a
                                        >
                                        <a
                                                href="mailto:info@admindatacenter.com"
                                                class="header-contact__mail"
                                        >info@admindatacenter.com</a
                                        >
                                    </div>
                                </li>
                            </ul>
                        @else
                            <ul class="header__cards dropdown__content dropdown__content_size-s dropdown__content_pos-two">
                                <li class="header__card header__card_horizontal">
                                    <div class="header__img">
                                        <img src="img/drop-content-img{{$i}}.svg" alt="Дата-центер" />
                                    </div>
                                    <ul class="dropdown__list">
                                        @foreach ($item->children as $child1)
                                            <li class="dropdown__item">
                                                <a href="{{ !empty($child1->behavior) ? $pageRepository->getPageByBehavior($child1->behavior)->url : $child1->url }}" class="dropdown__link">{{ $child1->name }}</a>
                                            </li>
                                        @endforeach
                                        @if($item->behavior === 'about')
                                        <li class="dropdown__item">
                                                <a href="/career" class="dropdown__link">
                                                    {{ __('content.Карьера') }}
                                                </a></li>

                                        @endif
                                    </ul>
                                 </li>

                            </ul>
                        @endif

                    </li>
                @endforeach
            </ul>
        </nav>
        <div class="header__block header__modal">
            <div class="header__el dropdown lang">
                <button type="button" class="btn dropbtn line-hover lang__btn">
                    @if (app()->isLocale('ru'))
                       RU
                    @elseif(app()->isLocale('en'))
                       EN
                    @endif
                </button>
                <ul class="header__content lang__content">
                    @if (app()->isLocale('ru'))
                    <li class="lang__item">
                        <a href="{{ $langHelper->getEnRoute() }}" class="lang__link">EN</a>
                    </li>
                    @endif
                    @if (app()->isLocale('en'))
                    <li class="lang__item">
                        <a href="{{ $langHelper->getRuRoute() }}" class="lang__link">RU</a>
                    </li>
                    @endif
                </ul>
            </div>
            <div class="header__el">
                <button type="button" class="btn modal__btn header__btn">
                    {{ __('content.Отправить запрос') }}
                </button>
            </div>
        </div>
        <div class="burger">
            <button
                    type="button"
                    class="btn burger__btn c-hamburger c-hamburger--htx"
            >
                <span class="burger__icon"></span>
                <span class="burger__text"> @if (app()->isLocale('ru'))
                  Меню
                @endif
                @if (app()->isLocale('en'))
                  Menu
                    @endif
                </span>
            </button>
        </div>
    </div>

    <div class="burger__content">
        <!-- поиск и выбор языка -->
        <div class="burger__block search">
            <div class="search__block-btn">
                @if (app()->isLocale('ru'))
                    <button type="button" class="burger__lang"  onClick="document.location='{{ $langHelper->getEnRoute() }}'">EN</button>
                @endif
                @if (app()->isLocale('en'))
                    <button type="button" class="burger__lang" onClick="document.location='{{ $langHelper->getRuRoute() }}'">RU</button>
                @endif
                <button type="button" class="search__btn_open"></button>
            </div>
            <div class="search__block">
                <input type="text" class="search__input" placeholder="Поиск" />
                <button type="button" class="search__btn"></button>
            </div>
        </div>
        <!-- меню -->
        <ul class="burger__list">
            @foreach($pageRepository->getMenu() as $item)
                <li class="burger__item dropdown-mobile">
                    @if($item->behavior != 'contacts')
                        <button class="dropdown-mobile__btn">{{ $item->name }}</button>
                    @endif

                    @if (isset($item->children) && count($item->children) && $item->behavior === 'services')
                        <ul class="dropdown-mobile__content">
                            @foreach ($item->children as $child1)
                            <li class="dropdown-mobile__cards">
                                <ul class="dropdown-mobile__card">
                                    <li class="dropdown-mobile__item dropdown-mobile__title">
                                        {{ $child1->name }}
                                    </li>
                                    @foreach ($child1->services as $child2)
                                        <li class="dropdown-mobile__item">
                                            <a href="{{ route('services.item', ['slug' => $child2->slug, 'category' => $child1->slug]) }}" class="dropdown-mobile__link">
                                                {{ $child2->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            @endforeach
                        </ul>
                    @elseif($item->behavior === 'cod')
                        <ul class="dropdown-mobile__content">
                            <li class="dropdown-mobile__item">
                                <a href="{{ $pageRepository->getPageByBehavior($item->behavior)->url }}#moscow">
                                    {{ __('content.Москва') }}
                                </a>
                            </li>
                            <li class="dropdown-mobile__item">
                                <a href="{{ $pageRepository->getPageByBehavior($item->behavior)->url }}#saint-petersburg">
                                    {{ __('content.Санкт-Петербург') }}
                                </a>
                            </li>
                            <li class="dropdown-mobile__item">
                                <a href="{{ $pageRepository->getPageByBehavior($item->behavior)->url }}#warsaw">
                                    {{ __('content.Варшава') }}
                                </a>
                            </li>
                        </ul>
                    @elseif($item->behavior != 'contacts')
                    <ul class="dropdown-mobile__content">
                        @foreach ($item->children as $child1)
                            <li class="dropdown-mobile__item">
                                <a href="{{ !empty($child1->behavior) ? $pageRepository->getPageByBehavior($child1->behavior)->url : $child1->url }}" class="dropdown-mobile__link"
                                >{{ $child1->name }}</a
                                >
                            </li>
                        @endforeach
                        @if($item->behavior === 'about')
                         <li class="dropdown-mobile__item">
                            <a href="/career">
                                {{ __('content.Карьера') }}
                            </a></li>

                        @endif
                    </ul>
                    @endif
                    @if($item->behavior === 'contacts')
                        <button class="dropdown-mobile__btn"  onClick="document.location='/contacts'">{{ $item->name }}</button>
                    @endif

                </li>
            @endforeach
        <button class="btn modal__btn burger__modal"> {{ __('content.Отправить запрос') }}</button>
    </div>
</header>
<div class="popup-fade__callback" style="display: none;">
    <div class="popup popup__callback">
        <button class="popup-close" type="button">Х</button>
        <div class="popup__title">
            @if (app()->isLocale('ru'))
                Запрос на бесплатную консультацию
            @endif
            @if (app()->isLocale('en'))
                    Request a free consultation
            @endif
        </div>
        <div class="modal__form" id="modal-free-consultation">
            <form class="popup__form form popup-form__callback form_submit" action="{{ route('form.submit') }}">
                <input type="hidden" name="type" value="free consultation"/>
                <input type="hidden" name="page" value="{{ url()->full() }}">
                <fieldset class="fieldset__callback">
                    <input id="m-consultation-name" placeholder="{{ __('content.Ваше имя') }}" name="name" type="text" class="popup__input">
                    <input id="m-consultation-organization" name="organization" type="text"
                           placeholder="{{ __('content.Организация') }}" class="popup__input">
                    <input id="m-consultation-phone" name="phone" type="text" data-mask="phone"
                           placeholder="{{ __('content.Телефон') }}" class="popup__input">
                    <input id="m-consultation-email" name="email" type="text" placeholder="Business email" data-mask="email" class="popup__input">
                    <textarea placeholder="{{ __('content.Сообщение') }}" name="message" id="" cols="30" rows="5" class="popup__comment"></textarea>
                    <div class="checkboxes" style="display: none">
                        <div>
                        <span>{{ __('content.Штаб-квартира вашей компании расположена') }} <span
                                    class="required">*</span></span>
                        </div>
                        <div>
                            <label class="radio__container">{{ __('content.в России') }}
                                <input name="place" type="radio" value="1" checked>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div>
                            <label class="radio__container">{{ __('content.за пределами России') }}
                                <input name="place" type="radio" value="0">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>

                    <div class="popup__block-btn">
                        <input id="politica" class="popup__check" type="checkbox" name="agreement" checked>
                        <label for="politica" class="popup__consert">{{ __('content.Предоставляя свои персональные данные, Вы соглашаетесь на их обработку в соответствии с') }}
                            <a target="_blank"
                               href="{{ route('privacy_' . app()->getLocale()) }}">{{ __('content.Политикой обработки персональных данных ООО «Связь ВСД»') }}</a>.
                            {{ __('content.Пожалуйста, внимательно ознакомьтесь с документом, доступным по ссылке, перед направлением своих персональных данных компании') }}
                            <span class="checkmark"></span>
                        </label>
                        <div class="captcha" style="margin: 30px; text-align: center">
                            <span class="alert" style="padding-bottom: 30px;display: block">{{ __('content.Пожалуйста, подтвердите, что вы не робот') }}</span>
                            {!! Captcha::displayJs(['lang' => app()->getLocale()], []) !!}
                            {!! Captcha::display([], ['lang' => app()->getLocale()]) !!}
                        </div>
                        <button class="form__btn btn popup__btn gradient" type="submit">
                            {{ __('content.Отправить') }}
                        </button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<div class="popup-fade__callback_demo" style="display: none;">
    <div class="popup popup__callback">
        <button class="popup-close" type="button">Х</button>
        <div class="popup__title">
            @if (app()->isLocale('ru'))
            Получить демо-доступ
            @endif
            @if (app()->isLocale('en'))
            Get demo access
            @endif
        </div>
        <div class="modal__form" id="modal-free-consultation">
            <form class="popup__form form popup-form__callback form_submit" action="{{ route('form.submit') }}">
                <input type="hidden" name="type" value="demo-access"/>
                <input type="hidden" name="page" value="{{ url()->full() }}">
                <fieldset class="fieldset__callback">
                    <input id="m-consultation-name" placeholder="{{ __('content.Ваше имя') }}" name="name" type="text" class="popup__input">
                    <input id="m-consultation-organization" name="organization" type="text"
                           placeholder="{{ __('content.Организация') }}" class="popup__input">
                    <input id="m-consultation-phone" name="phone" type="text" data-mask="phone"
                           placeholder="{{ __('content.Телефон') }}" class="popup__input">
                    <input id="m-consultation-email" name="email" type="text" placeholder="Business email" data-mask="email" class="popup__input">
                    <textarea placeholder="{{ __('content.Сообщение') }}" name="message" id="" cols="30" rows="5" class="popup__comment"></textarea>
                    <div class="checkboxes" style="display: none">
                        <div>
                        <span>{{ __('content.Штаб-квартира вашей компании расположена') }} <span
                                    class="required">*</span></span>
                        </div>
                        <div>
                            <label class="radio__container">{{ __('content.в России') }}
                                <input name="place" type="radio" value="1" checked>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div>
                            <label class="radio__container">{{ __('content.за пределами России') }}
                                <input name="place" type="radio" value="0">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>

                    <div class="popup__block-btn">
                        <input id="politica" class="popup__check" type="checkbox" name="agreement" checked>
                        <label for="politica" class="popup__consert">{{ __('content.Предоставляя свои персональные данные, Вы соглашаетесь на их обработку в соответствии с') }}
                            <a target="_blank"
                               href="{{ route('privacy_' . app()->getLocale()) }}">{{ __('content.Политикой обработки персональных данных ООО «Связь ВСД»') }}</a>.
                            {{ __('content.Пожалуйста, внимательно ознакомьтесь с документом, доступным по ссылке, перед направлением своих персональных данных компании') }}
                            <span class="checkmark"></span>
                        </label>
                        <div class="captcha" style="margin: 30px; text-align: center">
                            <span class="alert" style="padding-bottom: 30px;display: block">{{ __('content.Пожалуйста, подтвердите, что вы не робот') }}</span>
                            {!! Captcha::displayJs(['lang' => app()->getLocale()], []) !!}
                            {!! Captcha::display([], ['lang' => app()->getLocale()]) !!}
                        </div>
                        <button class="form__btn btn popup__btn gradient" type="submit">
                            {{ __('content.Отправить') }}
                        </button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>

