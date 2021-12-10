@extends('layouts.app_v2')

@section('body-class', 'page-main')
@inject('newsRepository', 'App\Services\NewsRepository')
@inject('pageRepository', 'App\Services\PageRepository')
<?php $news = $newsRepository->getAllNews();
$categories = $pageRepository->allservices();
?>

@section('content')
    <main>
        <h1 style="font-size: 0; padding: 0; margin: 0; width: 0">
            Виртуальная инфраструктула
        </h1>
        <!-- главный баннер -->
        <section class="hero">
            <div class="hero__slider">
                <!-- слайд 1 -->
                <div class="slide-item">
                    <div class="container hero__container">
                        <div class="hero__col">
                            <img
                                    class="hero__img"
                                    src="img/hero-img1.png"
                                    alt="Виртуальная инфраструктура IaaS"
                            />
                        </div>
                        <div class="hero__col hero__content">
                            <div class="main__title hero__title">
                                @if (app()->isLocale('ru'))
                                Виртуальная инфраструктура<br>IaaS
                                @elseif(app()->isLocale('en'))
                                VIRTUAL INFRASTRUCTURE (IAAS)
                                @endif
                            </div>
                            <div style="height: 50px"></div>
                            <div class="hero__desc">
                                @if (app()->isLocale('ru'))
                                Вычислительные ресурсы в облаке VMware
                                @elseif(app()->isLocale('en'))
                                CLOUD RESOURCES IN VMWARE CLOUD
                                @endif
                            </div>
                            <ul class="hero__list">

                                @if (app()->isLocale('ru'))
                                <li class="hero__item">Москва</li>
                                <li class="hero__item">Санкт-Петербург</li>
                                <li class="hero__item">Варшава</li>
                                @elseif(app()->isLocale('en'))
                                <li class="hero__item">Moscow</li>
                                <li class="hero__item">Saint Petersburg</li>
                                <li class="hero__item">Warsaw</li>
                                @endif
                            </ul>
                            <div class="hero__block">
                                <button type="button" class="btn hero__btn hero__demo modal__btn_demo">
                                    {{ __('content.Получить демо-доступ') }}
                                </button>
                                <button type="button" class="btn hero__btn hero__calc">
                                    <a href="@if (app()->getLocale() == 'ru') https://ru.admindatacenter.com/services/cloud-solutions/iaas#calculator @else https://www.admindatacenter.com/services/cloud-solutions/iaas#calculator @endif">
                                    {{ __('content.Рассчитать стоимость') }}
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- слайд 2 -->
                <div class="slide-item">
                    <div class="container hero__container">
                        <div class="hero__col">

                            <img
                                    class="hero__img"
                                    src="img/hero-img2.png"
                                    alt="Защищенное облако ФЗ-152"
                            />
                        </div>
                        <div class="hero__col hero__content">
                            <div class="main__title hero__title">
                                @if (app()->isLocale('ru'))
                                Защищенное облако ФЗ-152
                                @elseif(app()->isLocale('en'))
                                SECURE CLOUD COMPLIANT WITH THE PERSONAL DATA LAW
                                @endif
                            </div>
                            <div class="hero__desc">
                                @if (app()->isLocale('ru'))
                                Готовая ИТ-инфраструктура для соблюдения закона о персональных
                                данных
                                @elseif(app()->isLocale('en'))
                                Out-of-the-box IT infrastructure for compliance with data privacy laws
                                @endif
                            </div>
                            <div class="hero__block">
                                <button type="button" class="btn hero__btn hero__demo modal__btn">
                                    {{ __('content.Получить консультацию') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- слайд 3 -->
                <div class="slide-item">
                    <div class="container hero__container">
                        <div class="hero__col">

                            <img
                                    class="hero__img"
                                    src="img/hero-img3.png"
                                    alt="Связаность с глобальными облаками"
                            />
                        </div>
                        <div class="hero__col hero__content">
                            <div class="main__title hero__title">
                                @if (app()->isLocale('ru'))
                                Связность с глобальными облаками
                                @elseif(app()->isLocale('en'))
                                GLOBAL CLOUD NETWORK CONNECTIVITY
                                @endif
                            </div>
                            <div class="hero__desc">
                                @if (app()->isLocale('ru'))
                                Выделенный прямой доступ к платформам:
                                @elseif(app()->isLocale('en'))
                                Direct access to the following platforms:
                                @endif
                            </div>
                            <ul class="hero__list">
                                <li class="hero__item">AWS</li>
                                <li class="hero__item">MS Azure</li>
                                <li class="hero__item">Google Cloud Platform</li>
                                <li class="hero__item">Alibaba Cloud</li>
                            </ul>
                            <div class="hero__block">
                                <button type="button" class="btn hero__btn hero__demo modal__btn">
                                    {{ __('content.Получить консультацию') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- слайд 4 -->
                <div class="slide-item">
                    <div class="container hero__container">
                        <div class="hero__col">

                            <img
                                    class="hero__img"
                                    src="img/hero-img4.png"
                                    alt="Построение и резервирование сетевой инфраструктуры"
                            />
                        </div>
                        <div class="hero__col hero__content">
                            <div class="main__title hero__title">
                                @if (app()->isLocale('ru'))
                                Построение и резервирование сетевой инфраструктуры
                                @elseif(app()->isLocale('en'))
                                NETWORK INFRASTRUCTURE CONSTRUCTION AND BACKUP
                                @endif
                            </div>
                            <div class="hero__desc">
                                @if (app()->isLocale('ru'))
                                Проектирование и обслуживание отказоустойчивой сетевой
                                инфраструктуры
                                @elseif(app()->isLocale('en'))
                                Resilient network infrastructure design and maintenance
                                @endif
                            </div>
                            <div class="hero__block">
                                <button type="button" class="btn hero__btn hero__demo modal__btn">
                                    {{ __('content.Получить консультацию') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- слайд 5 -->
                <div class="slide-item">
                    <div class="container hero__container">
                        <div class="hero__col">

                            <img
                                    class="hero__img"
                                    src="img/hero-img1.png"
                                    alt="Резрвное копирование Veem"
                            />
                        </div>
                        <div class="hero__col hero__content">
                            <div class="main__title hero__title">
                                @if (app()->isLocale('ru'))
                                Резервное копирование Veeam
                                @elseif(app()->isLocale('en'))
                                BACKUP SOLUTIONS BY VEEAM
                                @endif
                            </div>
                            <div class="hero__desc">
                                @if (app()->isLocale('ru'))
                                Надежная защита данных виртуальной и физической инфраструктуры
                                @elseif(app()->isLocale('en'))
                                Reliable data protection for virtual and physical infrastructure
                                @endif
                            </div>
                            <div class="hero__block">
                                <button type="button" class="btn hero__btn hero__demo modal__btn">
                                    {{ __('content.Получить консультацию') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- секция преимущества -->
        <section class="advantage">
            <div class="container advantage__container">
                <ul class="advantage__list">
                    <li class="advantage__item">
                        <div class="advantage__img">
                            <img
                                    class="lazyload"
                                    data-src="img/advantage-img1.svg"
                                    alt="Экспертиза на ИТ-рынке"
                            />
                        </div>
                        <div class="advantage__title">@if (app()->isLocale('ru')) C 2001 года @elseif(app()->isLocale('en')) Since 2001 @endif</div>
                        <div class="advantage__desc">@if (app()->isLocale('ru')) экспертиза на ИТ-рынке @elseif(app()->isLocale('en')) IT expertise @endif</div>
                    </li>
                    <li class="advantage__item">
                        <div class="advantage__img">
                            <img
                                    class="lazyload"
                                    data-src="img/advantage-img2.svg"
                                    alt="Дата-центров в Москве и Санкт-Петербурге"
                            />
                        </div>
                        <div class="advantage__title">@if (app()->isLocale('ru')) 100% uptime @elseif(app()->isLocale('en')) 100% uptime @endif</div>
                        <div class="advantage__desc">@if (app()->isLocale('ru')) дата-центров в Москве и Санкт-Петербурге @elseif(app()->isLocale('en')) data centers in Moscow and Saint Petersburg @endif

                        </div>
                    </li>
                    <li class="advantage__item">
                        <div class="advantage__img">
                            <img
                                    class="lazyload"
                                    data-src="img/advantage-img3.svg"
                                    alt="Техподдержка на русском и английском языке"
                            />
                        </div>
                        <div class="advantage__title">24/7/365</div>
                        <div class="advantage__desc">
                            @if (app()->isLocale('ru')) техподдержка на русском и английском языке @elseif(app()->isLocale('en')) technical support in English and Russian @endif
                        </div>
                    </li>
                    <li class="advantage__item">
                        <div class="advantage__img">
                            <img
                                    class="lazyload"
                                    data-src="img/advantage-img4.svg"
                                    alt="С финансовыми гарантиями"
                            />
                        </div>
                        <div class="advantage__title" style="letter-spacing: -2px;">@if (app()->isLocale('ru')) sla до 99,98% @elseif(app()->isLocale('en')) Up to 99.98% SLA @endif</div>
                        <div class="advantage__desc" >@if (app()->isLocale('ru')) с финансовыми гарантиями @elseif(app()->isLocale('en'))including financial guarantees @endif</div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- секция топ 3 -->
        <section class="lider">
            <div class="container lider__container">
                <div class="lider__logo">
                    <img
                            data-src="img/lider-img.png"
                            alt="Топ-3"
                            class="lazyload lider__img"
                    />
                    <span class="lider__number">3</span>
                </div>
                <div class="lider__desc">
                    <a href="https://market.cnews.ru/research/sla_iaas_2020/table" target="_blank">
                        @if (app()->isLocale('ru'))  Lindxdatacenter входит в топ-3 Российских провайдеров IaaS по уровню
                        SLA @elseif(app()->isLocale('en'))adminDATACENTER IS AMONG THE TOP 3 RUSSIAN IAAS PROVIDERS BY SLA  @endif
                    </a>
                </div>
            </div>
        </section>
        <!-- секция мы предлагаем -->
        <section class="service">
            <div class="container service__container">
                <h2 class="section__title service__title line__title">
                    {{ __('content.Мы предлагаем') }}
                </h2>
                <div class="service__block">
                    @include('blocks.categories_v2', ['category' => $category ?? null])
                </div>
                <!-- таб контент -->
                <div class="service__tabs">
                    <!-- Все -->
                    <div class="service__tab">
                        <ul class="service__content2 service-all__slider">
                            @foreach($categories as $category)
                                @foreach($category->services as $service)
                                    @include('blocks.service_item_v2', ['service' => $service, 'category' => $category])
                                @endforeach
                            @endforeach
                        </ul>
                        <button class="btn service__other">{{ __('content.Показать больше') }}</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- лицензии -->
        <section class="license">
            <div class="container license__container">
                <h2 class="section__title license__title line__title">
                    {{ __('content.Лицензии и сертификаты') }}
                </h2>
                <div class="license__header">
                    <div class="license__img logo_hide" style="width: 28%">
                        <img
                                class="lazyload"
                                data-src="img/license-img7.svg"
                                alt="DSS Centified" style="max-width: 200px; width: 90%"
                        />
                    </div>
                    <div class="license__img">
                        <img class="lazyload" data-src="img/license-img1.svg" alt="M&O" />
                    </div>
                    <div class="license__desc">
                        <div class="license__subtitle">2018-2021</div>
                        <div class="license__text">
                            @if (app()->isLocale('ru'))
                            Соответствуем требованиям Management & Operations Stamp of
                            Approval c 2018 года. Подтверждено Uptime Institute.
                            @elseif(app()->isLocale('en'))
                            admindatacenter has been compliant with the requirements of the Management & Operations Stamp of Approval since 2018. Confirmed by the Uptime Institute.
                            @endif

                        </div>
                    </div>
                </div>
                <ul class="license__slider license__slider1">
                    <li class="slide-item">
                        <img
                                class="lazyload"
                                data-src="img/license-img2.svg"
                                alt="Cisco"
                        />
                    </li>
                    <li class="slide-item">
                        <img
                                class="lazyload"
                                data-src="img/license-img3.svg"
                                alt="Veeam"
                        />
                    </li>
                    <li class="slide-item">
                        <img class="lazyload" data-src="img/license-img4.svg" alt="ФСБ" />
                    </li>
                    <li class="slide-item">
                        <img
                                class="lazyload"
                                data-src="img/license-img5.svg"
                                alt="ФСТЭК"
                        />
                    </li>
                    <li class="slide-item">
                        <img
                                class="lazyload"
                                data-src="img/license-img6.svg"
                                alt="УЗ-2"
                        />
                    </li>
                    <li class="slide-item">
                        <img
                                class="lazyload"
                                data-src="img/apc-by-schneider-seeklogo.svg"
                                alt="DSS Centified" style="max-width: 150px"
                        />
                    </li>
                    <li class="slide-item">
                        <img
                                class="lazyload"
                                data-src="img/license-img8.svg"
                                alt="ISO 9001"
                        />
                    </li>
                    <li class="slide-item">
                        <img
                                class="lazyload"
                                data-src="img/license-img9.svg"
                                alt="ISO 22301"
                        />
                    </li>
                    <li class="slide-item">
                        <img
                                class="lazyload"
                                data-src="img/license-img10.svg"
                                alt="ISO/IEС 27001"
                        />
                    </li>
                </ul>
                <ul class="license__slider license__slider2 class_hidden_lic">
                    <li class="slide-item">
                        <img
                                class="lazyload"
                                data-src="img/license-img7.svg"
                                alt="Cisco"
                        />
                    </li>
                    <li class="slide-item">
                        <img
                                class="lazyload"
                                data-src="img/license-img2.svg"
                                alt="Cisco"
                        />
                    </li>
                    <li class="slide-item">
                        <img
                                class="lazyload"
                                data-src="img/license-img3.svg"
                                alt="Veeam"
                        />
                    </li>
                    <li class="slide-item">
                        <img class="lazyload" data-src="img/license-img4.svg" alt="ФСБ" />
                    </li>
                    <li class="slide-item">
                        <img
                                class="lazyload"
                                data-src="img/license-img5.svg"
                                alt="ФСТЭК"
                        />
                    </li>
                    <li class="slide-item">
                        <img
                                class="lazyload"
                                data-src="img/license-img6.svg"
                                alt="УЗ-2"
                        />
                    </li>
                    <li class="slide-item">
                        <img
                                class="lazyload"
                                data-src="img/apc-by-schneider-seeklogo.svg"
                                alt="DSS Centified" style="max-width: 150px"
                        />
                    </li>
                    <li class="slide-item">
                        <img
                                class="lazyload"
                                data-src="img/license-img8.svg"
                                alt="ISO 9001"
                        />
                    </li>
                    <li class="slide-item">
                        <img
                                class="lazyload"
                                data-src="img/license-img9.svg"
                                alt="ISO 22301"
                        />
                    </li>
                    <li class="slide-item">
                        <img
                                class="lazyload"
                                data-src="img/license-img10.svg"
                                alt="ISO/IEС 27001"
                        />
                    </li>
                </ul>
            </div>
        </section>
        <!-- география нашего бизнеса -->
        <section class="geografy">
            <div class="containermy">
            <picture>
                @if (app()->isLocale('ru'))
                <source
                        media="(max-width: 850px)"
                        srcset="img/rugeografy-m.svg"
                />
                <img
                        class="lazyload geografy__img"
                        data-src="img/map1.svg"
                        alt="География нашего бизнеса"
                />
            </picture>
                @elseif(app()->isLocale('en'))
            <source
                    media="(max-width: 850px)"
                    srcset="img/engeografy-m.svg"
            />
            <img
                    class="lazyload geografy__img"
                    data-src="img/map2.svg"
                    alt="География нашего бизнеса"
            />
            </picture>
                @endif



            <h2 class="section__title geografy__title">{{ __('content.География нашего бизнеса') }}</h2>

                <div class="section__title geografy_text_container">
                    <div class="section-title-container-m">
                        <div class="block-frst-l">
                            <div class="">
                                <div class="first-l-img"><img src="img/sectiongeo2.svg"></div>
                                <span>ЦОД admindatacenter</span>
                            </div>

                            <div class="">
                                <div class="second-l-img"><img src="img/sectiongeo1.svg"></div>
                                <span>Облако adminCloud</span>
                            </div>
                            <div class="my-point-end-blocks">
                                <img  class="a-little-donat" src="img/smal-circle.svg">
                                <span>Планы по развитию</span>
                            </div>
                        </div>

                        <div class="block-frst-r">
                            <div class="">
                                <div class="first-l-img"><img src="img/sectiongeo3.svg"></div>
                                <span>Подключение к глобальным облакам (Amazon Web Services, Google Cloud Platform, Microsoft Azure и др.)</span>
                            </div>

                            <div class="ma-m-s">
                                <div class="second-r-img"><img src="img/sectiongeo4.svg"></div>
                                <span>Партнерские ЦОДы</span>
                            </div>
                            <div class="my-point-end-blocks-mobi">
                                <img  class="a-little-donat-moby" src="img/smal-circle.svg">
                                <span>Планы по развитию</span>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- наши партнеры -->
        <section class="partners">
            <div class="container partners__container">
                <h2 class="section__title partners__title line__title">
                    {{ __('content.Наши партнеры') }}
                </h2>
                <ul class="partners__slider">
                    <li class="slide-item">
                        <img
                                data-src="img/partners-img1.svg"
                                alt="AWS"
                                class="lazyload partners__img"
                        />
                    </li>
                    <li class="slide-item">
                        <img
                                data-src="img/partners-img2.svg"
                                alt="Lenovo"
                                class="lazyload partners__img"
                        />
                    </li>
                    <li class="slide-item">
                        <img
                                data-src="img/partners-img3.svg"
                                alt="Veeam"
                                class="lazyload partners__img"
                        />
                    </li>
                    <li class="slide-item">
                        <img
                                data-src="img/partners-img4.svg"
                                alt="VMWare"
                                class="lazyload partners__img"
                        />
                    </li>
                    <li class="slide-item">
                        <img
                                data-src="img/partners-img5.svg"
                                alt="Equinix"
                                class="lazyload partners__img"
                        />
                    </li>
                    <li class="slide-item">
                        <img
                                data-src="img/partners-img6.svg"
                                alt="Microsoft"
                                class="lazyload partners__img"
                        />
                    </li>
                    <li class="slide-item">
                        <img
                                data-src="img/partners-img7.svg"
                                alt="Cisco"
                                class="lazyload partners__img"
                        />
                    </li>
                    <li class="slide-item">
                        <img
                                data-src="img/partners-img8.svg"
                                alt="Fujitsu"
                                class="lazyload partners__img"
                        />
                    </li>
                    <li class="slide-item">
                        <img
                                data-src="img/partners-img9.svg"
                                alt="IBM"
                                class="lazyload partners__img"
                        />
                    </li>
                    <li class="slide-item">
                        <img
                                data-src="img/partners-img10.svg"
                                alt="Megaport"
                                class="lazyload partners__img"
                        />
                    </li>
                    <li class="slide-item">
                        <img
                                data-src="img/partners-img11.svg"
                                alt="Juniper"
                                class="lazyload partners__img"
                        />
                    </li>
                    <li class="slide-item">
                        <img
                                data-src="img/partners-img12.svg"
                                alt="NetApp"
                                class="lazyload partners__img"
                        />
                    </li>
                    <li class="slide-item">
                        <img
                                data-src="img/partners-img13.svg"
                                alt="Commvault"
                                class="lazyload partners__img"
                        />
                    </li>
                </ul>
            </div>
        </section>
        <!-- надежность -->
        <section class="reliability">
            <div class="container reliability__container">
                <h2 class="section__title reliability__title line__title">
                    @if (app()->isLocale('ru'))
                    Клиенты выбирают нас за надежность
                    @elseif(app()->isLocale('en'))
                    OUR CUSTOMERS CHOOSE US FOR RELIABILITY
                    @endif

                </h2>
                <div class="reliability__block-top">
                    <div class="reliability__number line__title"></div>
                    <div class="reliability__security"></div>
                    <div class="reliability__subtitle">
                        @if (app()->isLocale('ru'))
                        Мы уважаем конфиденциальность наших клиентов
                        @elseif(app()->isLocale('en'))
                        WE RESPECT OUR CUSTOMERS’ PRIVACY!
                        @endif

                    </div>
                </div>
                <div class="reliability__block__bottom">
                    <div class="reliability__block">
                        @if (app()->isLocale('ru'))
                        <span>Индекс удовлетворенности клиента</span>
                        <p>
                            Складывается из соответствия ожиданиям клиентов и
                            удовлетворенности услугами, сервисом и соотношением
                            цена-качество
                        </p>
                        @elseif(app()->isLocale('en'))
                        <span>CUSTOMER SATISFACTION INDEX</span>
                        <p>
                            Estimation of our ability to meet customers’ expectations and the level of their satisfaction with our services and the price-quality ratio.
                        </p>
                        @endif

                    </div>
                    <div class="reliability__policy">
                        @if (app()->isLocale('ru'))
                        Ваши данные под надежной защитой! Мы никогда не разглашаем данные
                        о реализованных проектах без согласия наших клиентов.
                        @elseif(app()->isLocale('en'))
                        YOUR DATA IS UNDER PROTECTION! WE NEVER DISCLOSE INFORMATION ABOUT COMPLETED PROJECTS WITHOUT OUR CUSTOMERS’ CONSENT.
                        @endif

                    </div>
                </div>
            </div>
        </section>
        <!-- новости -->
        <section class="news">
            <div class="container news__container">
                <h2 class="section__title news__title line__title">
                    {{ __('content.Новости и публикации') }}
                </h2>
                <a href="{{ route('news') }}" class="news__link">{{ __('content.Все') }}</a>
                <ul class="news__slider">
                    @foreach($news as $item)
                       <?php


                       $img_arr = json_decode($item->fields['builder'], true);
                       $newsimg = $img_arr[0]['content'];
                       if(isset( $newsimg['img'] )){
                           $img_src = $newsimg['img'];
                       }else{
                           $img_src = '';
                       }
                       ?>

                        <li class="slide-item news_slide_item" onclick="document.location='{{ route('news.item', ['category' => $item->category->slug, 'slug' => $item->slug]) }}'">
                            <div class="news__header line__title">
                                <img
                                        src="{{$img_src}}"
                                        alt=""
                                        class="news__img"
                                />
                                <div class="news__arrow">
                                    <a href="{{ route('news.item', ['category' => $item->category->slug, 'slug' => $item->slug]) }}" class="btn news__btn"
                                    ><span class="btn__arrow"></span
                                        ></a>
                                </div>
                                <div class="news__date_">{{ $item->created_at->format('d.m.Y') }}</div>
                            </div>
                            <div class="news__content">
                                <div class="news__subtitle">
                                    {{ $item->name }}
                                </div>
                                <div class="news__desc">
                                    {{ mb_substr($item->description, 0, 200 ) }} ...
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>
    </main>

@endsection
