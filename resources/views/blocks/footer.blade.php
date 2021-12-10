@inject('pageRepository', 'App\Services\PageRepository')
<?php /** @var \App\Services\PageRepository $pageRepository */ ?>
<div class="footer">
    <div class="content">
        <div class="footer__about">
            <div>
                <div class="logo">
                    <a href="/">
                        <img src="/images/icons/footer-logo.svg" alt="logo">
                    </a>
                </div>
                <?php $about = $pageRepository->getPageByBehavior('about') ?>
                <div class="title slide">
                    @if (!empty($about))
                        <a href="{{ $about->url }}">{{ $about->name }}</a>
                        <img src="/images/polygon.svg" alt="polygon">
                    @endif
                </div>
                <?php $documents = $pageRepository->getPageByBehavior('documents') ?>
                <ul>
                    @if (!empty($about))
                        @foreach ($pageRepository->getChildrenById($about->id) as $page)
                            <li>
                                <a href="{{ $page->url }}">
                                    {{ $page->name }}
                                </a>
                            </li>
                        @endforeach
                        <li>
                            <a href="{{ $documents->url }}">{{ $documents->name }}</a>
                        </li>
                    @endif
                </ul>
            </div>
            <div class="social">
                <a href="https://www.linkedin.com/company/admindatacenter/" target="_blank">
                    <img src="/images/icons/linkedin.svg" alt="">
                </a>
                <a href="https://www.facebook.com/admindatacenter/" target="_blank">
                    <img src="/images/icons/facebook.svg" alt="">
                </a>
                <a href="https://www.youtube.com/user/admintelecom" target="_blank">
                    <img src="/images/icons/youtube.svg" alt="">
                </a>
                <a href="https://www.instagram.com/admindatacenter/" target="_blank">
                    <img src="/images/icons/instagram.svg" alt="">
                </a>
            </div>
            <div class="copyright">
                © <?php echo date('Y'); ?> admindatacenter<br>
                @if (app()->getLocale() === 'ru')
                    <a href="/upload/vedomosti.pdf" target="_blank">
                        {{ __('content.Результаты проведения специальной оценки труда') }}
                    </a>
                @endif
            </div>
        </div>
        <div class="footer__links">
            <div class="footer__links__columns">
                <div class="title slide">
                    <a href="{{ route('services') }}">{{ __('content.Услуги') }}</a>
                    <img src="/images/polygon.svg" alt="polygon">
                </div>
                <ul>
                    @foreach ($pageRepository->getCategories() as $category)
                        @foreach ($category->services as $service)
                            <li>
                                <a href="{{ route('services.item', ['slug' => $service->slug, 'category' => $category->slug]) }}">
                                    {{ $service->name }}
                                </a>
                            </li>
                        @endforeach
                    @endforeach
                    <li>
                        <a href="http://lg.admindatacenter.com/" target="_blank">
                            Looking glass
                        </a>
                    </li>
                    <li>
                        <a href="https://ix.admindatacenter.com/" target="_blank">
                            admindatacenter IX
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer__links__columns">
                <?php $cod = $pageRepository->getPageByBehavior('cod') ?>
                <div class="title slide">
                    @if (!empty($cod))
                        <a href="{{ $cod->url }}">{{ $cod->name }}</a>
                        <img src="/images/polygon.svg" alt="polygon">
                    @endif
                </div>
                <ul>
                    @if (!empty($cod))
                        <li><a href="{{ $cod->url }}#moscow">{{ __('content.Москва') }}</a></li>
                        <li><a href="{{ $cod->url }}#saint-petersburg">{{ __('content.Санкт-Петербург') }}</a></li>
                        <li><a href="{{ $cod->url }}#warsaw">{{ __('content.Варшава') }}</a></li>
                    @endif
                </ul>
            </div>
            <div id="policy" class="policy">
                <a class="underline"
                   href="{{ route('privacy_' . app()->getLocale()) }}">{{ __('content.Политика обработки персональных данных') }}</a>
            </div>
        </div>
        <div class="footer__contacts" style="justify-content: initial;">
            <div class="title slide">
                <a href="{{ $pageRepository->getPageByBehavior('contacts')->url }}">{{ __('content.Контакты') }}</a>
                <img src="/images/polygon.svg" alt="polygon">
            </div>
            <div>
               <!-- <div class="subtitle">
                    {{ strtoupper(__('content.Амстердам')) }} <span class="subtitle__additional">({{ __('content.Головной офис') }})</span>
                </div>
                <ul>
                    <li>
                        <div>
                            <img src="/images/icons/phone.svg" alt="">
                        </div>
                        <div>
                            <a href="tel:+31202617492">+31 20 261-74-92</a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="/images/icons/mail.svg" alt="">
                        </div>
                        <div>
                            <a href="mailto:info@admindatacenter.com">info@admindatacenter.com</a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="/images/icons/clock.svg" alt="">
                        </div>
                        <div>
                            {{ __('content.Пн-Пт') . ' ' . __('content.с') . ' 9:00 ' . __('content.до') . ' 18:00' }}
                        </div>
                    </li>
                    <li class="address">
                        <div>
                            <img src="/images/icons/map-marker.svg" alt="">
                        </div>
                        <div>
                            Hullenbergweg 300,<br>
                            1101BV Amsterdam <br>The
                            Netherlands
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="/images/icons/path.svg" alt="">
                        </div>
                        <div>
                            <a class="underline"
                               href="{{ $pageRepository->getPageByBehavior('contacts')->url }}">{{ __('content.Схема проезда') }}</a>
                        </div>
                    </li>
                </ul>-->
                <div class="subtitle">
                    {{ __('content.Москва') }} <span class="subtitle__additional"></span>
                </div>
                <ul>
                    <li>
                        <div>
                            <img src="/images/icons/phone.svg" alt="">
                        </div>
                        <div>
                            <a href="tel:+74953690594">+7 495 369-05-94</a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="/images/icons/mail.svg" alt="">
                        </div>
                        <div>
                            <a href="mailto:info@admindatacenter.com">info@admindatacenter.com</a>
                        </div>
                     </li>
                    <li><img src="/images/icons/clock.svg"
                             alt="">{{ __('content.Пн-Пт') . ' ' . __('content.с') . ' 9:00 ' . __('content.до') . ' 18:00' }}
                    </li>
                    <li class="address">
                        <div>
                            <img src="/images/icons/map-marker.svg" alt="">
                        </div>
                        <div>
                            {!! __('content.127083, Россия,<br>г. Москва, ул. 8 Марта,<br>д. 14, БЦ «Кулон»') !!}
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="/images/icons/path.svg" alt="">
                        </div>
                        <div>
                            <a class="underline"
                               href="{{ $pageRepository->getPageByBehavior('contacts')->url }}">{{ __('content.Схема проезда') }}</a>
                        </div>
                    </li>
                </ul>
                <div class="subtitle">
                    {{ strtoupper(__('content.Санкт-Петербург')) }} <span class="additional"></span>
                </div>
                <ul>
                    <li>
                        <div>
                            <img src="/images/icons/phone.svg" alt="">
                        </div>
                        <div>
                            <a href="tel:+78122440594">+7 812 244-05-94</a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="/images/icons/mail.svg" alt="">
                        </div>
                        <div>
                            <a href="mailto:info@admindatacenter.com">info@admindatacenter.com</a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="/images/icons/clock.svg" alt="">
                        </div>
                        <div>
                            {{ __('content.Пн-Пт') . ' ' . __('content.с') . ' 9:00 ' . __('content.до') . ' 18:00' }}
                        </div>
                    </li>
                    <li class="address">
                        <div>
                            <img src="/images/icons/map-marker.svg" alt="">
                        </div>
                        <div>
                            {!! __('content.197375, Россия,<br>г. Санкт-Петербург,<br>ул. Репищева 20, лит. А') !!}
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="/images/icons/path.svg" alt="">
                        </div>
                        <div>
                            <a class="underline"
                               href="/contacts?loc=sp">{{ __('content.Схема проезда') }}</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="title support-title">{{ __('content.Техническая поддержка') }}</div>
            <div class="support">
                <ul class="support__list">
                  <li>
                      <img class="logo-phone" src="/images/icons/phone.svg" alt="">
                      <a href="tel:88003500594">8 800 350-05-94</a>
                  </li>
                  <li>
                      <img class="logo-phone" src="/images/icons/mail.svg" alt="">
                      <a href="mailto:support@admindatacenter.com">support@admindatacenter.com</a>
                  </li>
                </ul>
                <span class="additional">{{ __('content.Техническая поддержка') }} 24/7</span>
            </div>
            <div class="social__mobile">
                <a href="https://www.linkedin.com/company/admindatacenter/" target="_blank"><img src="/images/icons/linkedin.svg" alt=""></a>
                <a href="https://www.facebook.com/admindatacenter/" target="_blank"><img src="/images/icons/facebook.svg" alt=""></a>
                <a href="https://www.youtube.com/user/admintelecom" target="_blank"><img src="/images/icons/youtube.svg"  alt=""></a>
                <a href="https://www.instagram.com/admindatacenter/" target="_blank"><img src="/images/icons/instagram.svg"alt=""></a>
            </div>
        </div>

        <div class="copyright__mobile">
            © 2020 admindatacenter<br>
            @if(app()->getLocale() === 'ru')
                <a href="/upload/vedomosti.pdf" target="_blank">
                    {{ __('content.Результаты проведения специальной оценки труда') }}
                </a>
            @endif
        </div>
        <div id="policy" class="policy__mobile">
            <a class="underline" target="_blank"
               href="{{ route('privacy_' . app()->getLocale()) }}">{{ __('Политика обработки персональных данных') }}</a>
        </div>
    </div>
</div>
