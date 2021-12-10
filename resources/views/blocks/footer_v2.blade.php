@inject('pageRepository', 'App\Services\PageRepository')
@inject('langHelper', 'App\Services\LangHelper')

<?php /** @var \App\Services\PageRepository $pageRepository */ ?>
<footer class="footer">
    <div class="footer-top">
        <div class="container footer-top__container">
            <a href="/" class="footer-top__logo-link">
                <img src="img/Logo-04.svg" alt="Логотип" class="footer-top__img" />
            </a>
            <ul class="footer-top__list">
                <li class="footer-top__item">
                    <a href="https://www.linkedin.com/company/admindatacenter/" class="footer-top__link footer-top__linked">
                        <svg xmlns="http://www.w3.org/2000/svg" id="bd44dbf9-6d1d-466f-8883-dacbfe1a5e18" data-name="Layer 9" viewBox="0 0 452.2998 380.6809"><path d="M397.0654,360.1254v-.0143h.0854V234.7324c0-61.3361-13.2045-108.5846-84.9105-108.5846-34.4713,0-57.6041,18.9165-67.0481,36.85h-.9971V131.8741H176.2069v228.237h70.7943V247.0965c0-29.7564,5.6408-58.53,42.4909-58.53,36.3088,0,36.85,33.9585,36.85,60.4388v111.12Z" style="fill:none;stroke:#ff006e;stroke-linecap:round;stroke-linejoin:round;stroke-width:20px"></path><path d="M60.9274,131.8883h70.88V360.1254h-70.88Z" style="fill:none;stroke:#ff006e;stroke-linecap:round;stroke-linejoin:round;stroke-width:20px"></path><path d="M96.3388,18.2612A41.0647,41.0647,0,0,0,55.2866,59.3134c0,22.6627,18.39,41.4368,41.0522,41.4368S137.391,81.9761,137.391,59.3134A41.0829,41.0829,0,0,0,96.3388,18.2612Z" style="fill:none;stroke:#ff006e;stroke-linecap:round;stroke-linejoin:round;stroke-width:20px"></path></svg>
                    </a>
                </li>
                <li class="footer-top__item">
                    <a href="https://www.facebook.com/admindatacenter/" class="footer-top__link footer-top__face">
                        <svg xmlns="http://www.w3.org/2000/svg" id="bbc55cec-504b-4e4e-8402-1c2450196a7c" data-name="Layer 8" viewBox="0 0 452.2998 380.6809"><path d="M282.536,74.3673h31.5394V19.436a407.2455,407.2455,0,0,0-45.9488-2.4328c-45.4738,0-76.6246,28.6029-76.6246,81.1734v48.3816H141.321v61.409h50.181v154.516h61.5242V207.9816h48.1513l7.6437-61.409H253.0118V104.2657c.0144-17.749,4.7936-29.8984,29.5242-29.8984Z" style="fill:none;stroke:#ff006e;stroke-linecap:round;stroke-linejoin:round;stroke-width:20px"></path></svg>
                    </a>
                </li>
                <li class="footer-top__item">
                    <a href="https://www.youtube.com/user/admintelecom" class="footer-top__link footer-top__you">
                        <svg xmlns="http://www.w3.org/2000/svg" id="ba948913-cc81-48ef-816b-87e42143a478" data-name="Layer 6" viewBox="0 0 452.2998 380.6809"><path d="M278.2647,177.2471l-74.8018-40.9283a13.7388,13.7388,0,0,0-20.335,12.0532v81.1539a13.7144,13.7144,0,0,0,20.2472,12.1l74.8044-40.223a13.7389,13.7389,0,0,0,.0852-24.1555Z" style="fill:none;stroke:#ff006e;stroke-linecap:round;stroke-linejoin:round;stroke-width:20px"></path><path d="M392.9511,124.697l-.0155-.155c-.2867-2.7253-3.1411-26.9661-14.9257-39.2957-13.6212-14.5021-29.0636-16.2638-36.49-17.1085-.6148-.07-1.178-.1344-1.6817-.2015l-.5915-.062c-44.7618-3.2549-112.3616-3.6992-113.0384-3.7018l-.0594-.0025-.0594.0025c-.6768.0026-68.2766.4469-113.4413,3.7018l-.5968.062c-.48.0646-1.01.124-1.5861.1911-7.3414.8473-22.6185,2.6116-36.2784,17.6381-11.2241,12.1979-14.4686,35.92-14.8018,38.5853l-.0387.3462c-.1008,1.134-2.49,28.131-2.49,55.234v25.3361c0,27.1029,2.3894,54.1,2.49,55.2366l.018.1705c.2868,2.6813,3.1386,26.4778,14.869,38.8126,12.8075,14.0164,29.0016,15.8712,37.7121,16.8683,1.3769.1576,2.5626.2919,3.3711.434l.7827.1085c25.845,2.4592,106.8774,3.6707,110.3131,3.72l.1033.0025.1033-.0025c.6768-.0026,68.2741-.4469,113.0358-3.7018l.5916-.062c.5657-.0749,1.2011-.142,1.8986-.2144,7.3-.7749,22.4945-2.3843,35.9659-17.2067,11.224-12.2,14.4711-35.922,14.8018-38.5853l.0387-.3461c.1008-1.1366,2.4928-28.1311,2.4928-55.234V179.931C395.4413,152.828,393.0519,125.8336,392.9511,124.697Z" style="fill:none;stroke:#ff006e;stroke-linecap:round;stroke-linejoin:round;stroke-width:20px"></path></svg>
                    </a>
                </li>
                <li class="footer-top__item">
                    <a href="https://www.instagram.com/admindatacenter_official/" class="footer-top__link footer-top__inst">
                        <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.6913 1H8.30865C6.37094 1.00217 4.51322 1.77289 3.14305 3.14306C1.77288 4.51322 1.00217 6.37094 1 8.30865V20.6916C1.00222 22.6292 1.77295 24.4869 3.14311 25.857C4.51328 27.2272 6.37097 27.9978 8.30865 28H20.6915C22.6292 27.9978 24.4868 27.2271 25.857 25.857C27.2271 24.4869 27.9978 22.6292 28 20.6916V8.30869C27.9978 6.37098 27.2271 4.51325 25.857 3.14307C24.4868 1.7729 22.6291 1.00217 20.6913 1V1Z" stroke="#009bff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14.4999 7.09668C13.0357 7.09668 11.6044 7.53087 10.3869 8.34434C9.16945 9.15782 8.22056 10.314 7.66023 11.6668C7.09989 13.0196 6.95328 14.5081 7.23893 15.9442C7.52458 17.3803 8.22967 18.6994 9.26502 19.7348C10.3004 20.7701 11.6195 21.4752 13.0556 21.7609C14.4917 22.0465 15.9802 21.8999 17.333 21.3396C18.6857 20.7793 19.842 19.8304 20.6554 18.613C21.4689 17.3955 21.9031 15.9642 21.9031 14.5C21.9009 12.5372 21.1203 10.6554 19.7324 9.26748C18.3445 7.87957 16.4627 7.09888 14.4999 7.09668V7.09668Z" stroke="#009bff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M22.3384 4.48389C21.9078 4.48391 21.4868 4.61164 21.1287 4.85092C20.7707 5.09019 20.4916 5.43027 20.3268 5.82815C20.1621 6.22603 20.119 6.66383 20.203 7.0862C20.287 7.50857 20.4944 7.89654 20.7989 8.20104C21.1035 8.50554 21.4915 8.7129 21.9138 8.7969C22.3362 8.8809 22.774 8.83777 23.1719 8.67295C23.5697 8.50813 23.9098 8.22904 24.149 7.87096C24.3883 7.51288 24.516 7.0919 24.516 6.66125C24.5153 6.08394 24.2857 5.53046 23.8775 5.12226C23.4692 4.71405 22.9157 4.48447 22.3384 4.48389Z" stroke="#009bff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="footer-middle">
        <div class="container footer-middle__container">
            <ul class="footer-middle__cards">
                <li class="footer-middle__card">
                    <h2 class="section__title footer-middle__title">{{ __('content.Услуги') }}</h2>
                    <ul class="footer-middle__list">
                        @foreach($pageRepository->getMenu() as $item)
                            @if (isset($item->children) && count($item->children) && $item->behavior === 'services')
                                @foreach ($item->children as $child1)
                                    <li class="footer-middle__item">
                                        <a href="{{ route('services.category', ['slug' => $child1->slug]) }}" class="footer-middle__link line-hover">{{ $child1->name }}</a>
                                    </li>
                                @endforeach
                            @endif
                        @endforeach

                    </ul>
                </li>
                <li class="footer-middle__card">
                    <h2 class="section__title footer-middle__title">{{ __('content.Дата-центры') }}</h2>
                    <ul class="footer-middle__list">
                        <li class="footer-middle__item">
                            <a href="/dc#moscow" class="footer-middle__link line-hover">{{ __('content.Москва') }}</a>
                        </li>
                        <li class="footer-middle__item">
                            <a href="/dc#saint-petersburg" class="footer-middle__link line-hover"
                            >{{ __('content.Санкт-Петербург') }}</a
                            >
                        </li>
                        <li class="footer-middle__item">
                            <a href="/dc#warsaw" class="footer-middle__link line-hover"
                            >{{ __('content.Варшава') }}</a
                            >
                        </li>
                    </ul>
                </li>
                <li class="footer-middle__card">
                    <h2 class="section__title footer-middle__title">{{ __('content.Контакты') }}</h2>
                    <ul class="footer-middle__list">
                        <li class="footer-middle__item">
                            <a
                                    href="tel:+74953690594"
                                    class="
                      footer-middle__contacts
                      footer-middle__link
                      footer-middle__phone
                    "
                            >+7 495 369-05-94</a
                            >
                            | <span class="footer-middle__el">{{ __('content.Москва') }}</span>
                        </li>
                        <li class="footer-middle__item">
                            <a
                                    href="tel:+78122440594"
                                    class="
                      footer-middle__contacts
                      footer-middle__link
                      footer-middle__phone
                    "
                            >+7 812 244-05-94</a
                            >
                            | <span class="footer-middle__el">{{ __('content.Санкт-Петербург') }}</span>
                        </li>
                        <li class="footer-middle__item">
                            <a
                                    href="mailto:info@admindatacenter.com"
                                    class="
                      footer-middle__contacts
                      footer-middle__link
                      footer-middle__mail
                    "
                            >info@admindatacenter.com</a
                            >
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container footer-bottom__container">
            <div class="footer-bottom__el footer-bottom__copyright">
                <div class="footer-bottom__block-copy">
                    <b>&copy;2021 admin</b>datacenter
                </div>
            </div>
            <div class="footer-bottom__el footer-bottom__block-politica">
                <a href="{{ route('privacy_' . app()->getLocale()) }}" class="footer-bottom__politica line-hover"
                >{{ __('content.Политика обработки персональных данных') }}</a
                >
            </div>
            <div class="footer-bottom__el footer-bottom__card">
                <h2 class="section__title footer-bottom__title">
                    {{ __('content.Техподдержка 24/7') }}
                </h2>
                <a
                        href="tel:+78003500594"
                        class="
                footer-bottom__contacts footer-bottom__link footer-bottom__phone
              "
                >+7 800 350-05-94</a
                >
                <a
                        href="mailto:support@admindatacenter.com"
                        class="
                footer-bottom__contacts footer-bottom__link footer-bottom__mail
              "
                >support@admindatacenter.com</a
                >
            </div>
        </div>
    </div>
</footer>


