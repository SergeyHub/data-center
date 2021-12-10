{{--<link rel="stylesheet" href="{{ mix('/css/app.css') }}">--}}
{{--<link href="{{ mix('/css/lightbox.css') }}" rel="stylesheet" />--}}


@extends('layouts.app_v2')
{{--@extends('layouts.app')--}}
@section('body-class', 'page-main')
{{--@section('styles')--}}
@inject('pageRepository', 'App\Services\VacancyRepository')
<?php
$vacancy = $pageRepository->getAllVacancies();
?>

{{--<link rel="stylesheet" href="{{ mix('/hr_/css/hr.css') }}">--}}
{{--<link rel="stylesheet" href="{{ mix('/hr_/css/all.min.css') }}">--}}
{{--<link rel="stylesheet" href="{{ mix('/hr_/css/regular.css') }}">--}}
{{--<link rel="stylesheet" href="{{ mix('/hr_/css/owl.carousel.min.css') }}">--}}
{{--@endsection--}}

@section('content')
{{--    {{dd($vacancy)}}--}}
<div class=" home page-template page-template-hr_header_footer page page-id-1842 jet-desktop-menu-active hr-default hr-template-full-width hr-kit-11 hr-page hr-page-1842 e--ua-firefox dialog-body dialog-lightbox-body dialog-container dialog-lightbox-container">
    <div data-hr-type="wp-page" data-hr-id="1842" class="hr hr-1842" data-hr-settings="[]">
        <div class="hr-section-wrap">
            <section class="hr-section hr-top-section hr-element hr-element-977ee40 hr-section-content-middle hr-section-boxed hr-section-height-default hr-section-height-default" data-id="977ee40" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="hr-container hr-column-gap-no">
                    <div class="hr-column hr-col-33 hr-top-column hr-element hr-element-3895e74" data-id="3895e74" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">



                            <div class="hr-element hr-element-ba92d0d hr-widget hr-widget-uael-fancy-heading" data-id="ba92d0d" data-element_type="widget" data-widget_type="uael-fancy-heading.default">
                                <div class="hr-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default hh_small">WE KEEP IT</h2>
                                </div>
                            </div>



                            <div class="hr-element hr-element-72f5906 hr-align-left hr-widget hr-widget-lottie" data-id="72f5906" data-element_type="widget">
                                <div class="hr-widget-container">
                                    <div class="e-lottie__container">
                                        <div class="e-lottie__animation" id="e-lottie__animation">

                                        </div></div>
                                </div>
                            </div>
                            <div class="hr-element hr-element-cbd9e56 hr-widget-divider--view-line hr-widget hr-widget-divider" data-id="cbd9e56" data-element_type="widget" data-widget_type="divider.default">
                                <div class="hr-widget-container">
                                    <div class="hr-divider">
      <span class="hr-divider-separator">
            </span>
                                    </div>
                                </div>
                            </div>
                            <div class="hr-element hr-element-7fb2f4a hr-widget hr-widget-heading" data-id="7fb2f4a" data-element_type="widget" data-widget_type="heading.default">
                                <div class="hr-widget-container">
                                    <h3 class="hr-heading-title hr-size-default">{{ __('content.Достигайте профессиональных и личных целей с помощью программы привилегий и льгот') }}</h3>   </div>
                            </div>
                            <div class="hr-element hr-element-8a40a1a hr-widget hr-widget-jet-accordion" data-id="8a40a1a" data-element_type="widget" data-settings="{&quot;ha_floating_fx&quot;:&quot;yes&quot;,&quot;ha_floating_fx_translate_toggle&quot;:&quot;yes&quot;,&quot;ha_floating_fx_translate_x&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:0,&quot;to&quot;:0}},&quot;ha_floating_fx_translate_y&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:0,&quot;to&quot;:5}},&quot;ha_floating_fx_translate_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;ha_floating_fx_translate_delay&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="jet-accordion.default">
                                <div class="hr-widget-container" style="will-change: transform; transform: translateY(3.72409px);">
                                    <div class="jet-accordion" data-settings="{&quot;collapsible&quot;:false,&quot;ajaxTemplate&quot;:false}" role="tablist">
                                        <div class="jet-accordion__inner">
                                            <div class="jet-accordion__item jet-toggle jet-toggle-move-up-effect mobile_active">
                                                <div id="jet-toggle-control-1441" class="jet-toggle__control hr-menu-anchor" data-toggle="1" role="tab" aria-controls="jet-toggle-content-1441" aria-expanded="false" data-template-id="false">
                                                    <div class="jet-toggle__label-icon jet-toggle-icon-position-left" id="text_more"><span class="jet-toggle__icon icon-normal jet-tabs-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" id="a796331a-77da-4616-8f0f-81d593aaebf6" data-name="Layer 1" viewBox="0 0 347.87 515"><defs><style>.b181fd6d-651c-4e31-887a-4f66d756dee8{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:35px;}</style></defs><g id="f3b705d6-6f2d-4034-9d37-0df857a45a20" data-name="Layer 2"><g id="f9b55169-e274-483c-922a-2328c15b64de" data-name="Layer 2-2"><polyline class="b181fd6d-651c-4e31-887a-4f66d756dee8" points="19.89 337.329 171.394 488.732 171.394 26.111"></polyline><line class="b181fd6d-651c-4e31-887a-4f66d756dee8" x1="327.98" y1="332.461" x2="171.552" y2="488.889"></line></g></g></svg> </span></div>              </div>
                                                <div id="jet-toggle-content-1441" class="jet-toggle__content" data-toggle="1" role="tabpanel" aria-hidden="true" data-template-id="false">
                                                    <div class="jet-toggle__content-inner">
                                                        <p>
                                                            {{ __('content.В admin мы считаем, что профессиональный рост каждого сотрудника – двигатель успеха нашей команды. Мы признаем ваши достижения и помним, что как и любой сотрудник…') }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>      </div>
                                    </div>
                                </div>
                            </div>



                            <section class="hr-section hr-inner-section hr-element hr-element-9f8ae17 hr-section-full_width hr-section-height-default hr-section-height-default" data-id="9f8ae17" data-element_type="section">
                                <div class="hr-container hr-column-gap-no">
                                    <div class="hr-column hr-col-10 hr-inner-column hr-element hr-element-6b74251" data-id="6b74251" data-element_type="column">
                                        <div class="hr-widget-wrap hr-element-populated">
                                            <div class="hr-element hr-element-cd18689 hr-widget hr-widget-heading" data-id="cd18689" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="hr-widget-container">
                                                    <h3 class="hr-heading-title hr-size-default">т </h3>    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hr-column hr-col-10 hr-inner-column hr-element hr-element-d5a94f6" data-id="d5a94f6" data-element_type="column">
                                        <div class="hr-widget-wrap hr-element-populated">
                                            <div class="hr-element hr-element-93893ff hr-widget hr-widget-heading" data-id="93893ff" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="hr-widget-container">
                                                    <h3 class="hr-heading-title hr-size-default">Ы</h3>   </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hr-column hr-col-10 hr-inner-column hr-element hr-element-d5a94f6 free_div_space" data-id="d5a94f6" data-element_type="column"></div>
                                    <div class="hr-column hr-col-10 hr-inner-column hr-element hr-element-ce575ae" data-id="ce575ae" data-element_type="column">
                                        <div class="hr-widget-wrap hr-element-populated">
                                            <div class="hr-element hr-element-ac4b836 hr-widget hr-widget-heading" data-id="ac4b836" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="hr-widget-container">
                                                    <h3 class="hr-heading-title hr-size-default">У</h3>   </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hr-column hr-col-10 hr-inner-column hr-element hr-element-5e2ca2c" data-id="5e2ca2c" data-element_type="column">
                                        <div class="hr-widget-wrap hr-element-populated">
                                            <div class="hr-element hr-element-9e9d95a hr-widget hr-widget-heading" data-id="9e9d95a" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="hr-widget-container">
                                                    <h3 class="hr-heading-title hr-size-default">н</h3>   </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hr-column hr-col-10 hr-inner-column hr-element hr-element-f1a7a17" data-id="f1a7a17" data-element_type="column">
                                        <div class="hr-widget-wrap hr-element-populated">
                                            <div class="hr-element hr-element-e10a703 hr-widget hr-widget-heading" data-id="e10a703" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="hr-widget-container">
                                                    <h3 class="hr-heading-title hr-size-default">и</h3>   </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hr-column hr-col-10 hr-inner-column hr-element hr-element-1495939" data-id="1495939" data-element_type="column">
                                        <div class="hr-widget-wrap hr-element-populated">
                                            <div class="hr-element hr-element-b23f9d3 hr-widget hr-widget-heading" data-id="b23f9d3" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="hr-widget-container">
                                                    <h3 class="hr-heading-title hr-size-default">к</h3>   </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hr-column hr-col-10 hr-inner-column hr-element hr-element-443b36e" data-id="443b36e" data-element_type="column">
                                        <div class="hr-widget-wrap hr-element-populated">
                                            <div class="hr-element hr-element-3d77c5f hr-widget hr-widget-heading" data-id="3d77c5f" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="hr-widget-container">
                                                    <h3 class="hr-heading-title hr-size-default">а</h3>   </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hr-column hr-col-10 hr-inner-column hr-element hr-element-e727e05" data-id="e727e05" data-element_type="column">
                                        <div class="hr-widget-wrap hr-element-populated">
                                            <div class="hr-element hr-element-1ba9341 hr-widget hr-widget-heading" data-id="1ba9341" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="hr-widget-container">
                                                    <h3 class="hr-heading-title hr-size-default">л</h3>   </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hr-column hr-col-10 hr-inner-column hr-element hr-element-a9e093d" data-id="a9e093d" data-element_type="column">
                                        <div class="hr-widget-wrap hr-element-populated">
                                            <div class="hr-element hr-element-00cccbe hr-widget hr-widget-heading" data-id="00cccbe" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="hr-widget-container">
                                                    <h3 class="hr-heading-title hr-size-default">е</h3>   </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hr-column hr-col-10 hr-inner-column hr-element hr-element-e9090b8" data-id="e9090b8" data-element_type="column">
                                        <div class="hr-widget-wrap hr-element-populated">
                                            <div class="hr-element hr-element-5de8dd3 hr-widget hr-widget-heading" data-id="5de8dd3" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="hr-widget-container">
                                                    <h3 class="hr-heading-title hr-size-default">н</h3>   </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>




                            <div class="swiper-container vacancy-mobile swiper-container-initialized swiper-container-horizontal owl-carousel owl-carousel3">

                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="2">
                                    <div class="vacancy-image"><img src="/hr_/images/man-03.jpg" alt="">
                                    </div>
                                    <h2 class="vacancy-mobile-title"><span class="uc_style_adminslider_vacancy_mobile_elementor_uc_items_attribute_title" style="color:#FFFFFF;">{{ __('content.Здоровье и благополучие') }}</span></h2>
                                </div>

                                <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="0">
                                    <div class="vacancy-image"><img src="/hr_/images/man-02.jpg" alt="">
                                    </div>
                                    <h2 class="vacancy-mobile-title"><span class="uc_style_adminslider_vacancy_mobile_elementor_uc_items_attribute_title" style="color:#FFFFFF;">{{ __('content.Комфортное рабочее пространство') }}</span></h2>
                                </div>

                                <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="1">
                                    <div class="vacancy-image"><img src="/hr_/images/man.jpg" alt="">
                                    </div>
                                    <h2 class="vacancy-mobile-title"><span class="uc_style_adminslider_vacancy_mobile_elementor_uc_items_attribute_title" style="color:#FFFFFF;">{{ __('content.Обучение и развитие') }}</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hr-column hr-col-33 hr-top-column hr-element hr-element-00e95dc" data-id="00e95dc" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class="hr-element hr-element-a1ce40e hr-widget hr-widget-spacer" data-id="a1ce40e" data-element_type="widget" data-widget_type="spacer.default">
                                <div class="hr-widget-container">
                                    <div class="hr-spacer">
                                        <div class="hr-spacer-inner"></div>
                                    </div>
                                </div>
                            </div>
                            <section class="hr-section hr-inner-section hr-element hr-element-797c794 hr-section-full_width hr-section-content-top hr-section-height-default hr-section-height-default" data-id="797c794" data-element_type="section">
                                <div class="hr-container hr-column-gap-no">
                                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-fc172c1" data-id="fc172c1" data-element_type="column">
                                        <div class="hr-widget-wrap hr-element-populated">
                                            <div class=" pafe-equal-height-desktop pafe-equal-height-tablet pafe-equal-height-mobile hr-element hr-element-58c0b24 hr-widget hr-widget-heading" data-pafe-equal-height="admin" data-pafe-equal-height-widget-container="" data-id="58c0b24" data-element_type="widget" data-widget_type="heading.default" style="height: 175px;">
                                                <div class="hr-widget-container">
                                                    <h2 class="hr-heading-title hr-size-default">L</h2>   </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-6a9e9c4" data-id="6a9e9c4" data-element_type="column">
                                        <div class="hr-widget-wrap hr-element-populated">
                                            <div class="hr-element hr-element-649059f hr-widget hr-widget-spacer" data-id="649059f" data-element_type="widget" data-widget_type="spacer.default">
                                                <div class="hr-widget-container">
                                                    <div class="hr-spacer">
                                                        <div class="hr-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hr-element hr-element-84b3c55 hr-widget hr-widget-heading" data-id="84b3c55" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="hr-widget-container">
                                                    <h2 class="hr-heading-title hr-size-default">{{ __('content.Комфортное рабочее пространство') }}</h2>   </div>
                                            </div>
                                            <div class="hr-element hr-element-b28c8a9 hr-widget__width-auto eael-tooltip-align-left hr-widget hr-widget-eael-tooltip" data-id="b28c8a9" data-element_type="widget" data-settings="{&quot;ha_floating_fx&quot;:&quot;yes&quot;,&quot;ha_floating_fx_translate_toggle&quot;:&quot;yes&quot;,&quot;ha_floating_fx_translate_x&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:0,&quot;to&quot;:0}},&quot;ha_floating_fx_translate_y&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:0,&quot;to&quot;:5}},&quot;ha_floating_fx_translate_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;ha_floating_fx_translate_delay&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="eael-tooltip.default">
                                                <div class="hr-widget-container" style="will-change: transform; transform: translateY(3.72409px);">
                                                    <div class="eael-tooltip">
          <span class="eael-tooltip-content"><a href="#" rel="nofollow">                        <img class="ea-tooltip-svg-trigger" src="/hr_/images/Arrow-down-04.svg" alt="">
                    </a></span>
                                                        <span class="eael-tooltip-text eael-tooltip-bottom"><p>{{ __('content.Полезные завтраки, чай, кофе с печеньками, а также фрукты для вас на нашей кухне в неограниченном колличестве.') }}</p>

<p>{{ __('content.Корпоративная социальная сеть, Teams, Zoom и продвинутые технологии для общения и взаимодействия.') }}</p>

<p>{{ __('content.Участие в тематический мероприятиях , квестах и тимбилдингах.') }}</p></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="hr-section hr-inner-section hr-element hr-element-95afab6 hr-section-full_width hr-section-content-middle hr-section-height-default hr-section-height-default" data-id="95afab6" data-element_type="section">
                                <div class="hr-container hr-column-gap-no">
                                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-7485fef" data-id="7485fef" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="hr-widget-wrap hr-element-populated hr-p-f-s-img-2">
                                            <div class="hr-element hr-element-457cacb hr-widget hr-widget-spacer" data-id="457cacb" data-element_type="widget" data-widget_type="spacer.default">
                                                <div class="hr-widget-container">
                                                    <div class="hr-spacer">
                                                        <div class="hr-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-3c7ca5a" data-id="3c7ca5a" data-element_type="column">
                                        <div class="hr-widget-wrap hr-element-populated">
                                            <div class="hr-element hr-element-9dae54f hr-widget hr-widget-heading" data-id="9dae54f" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="hr-widget-container">
                                                    <h2 class="hr-heading-title hr-size-default">I</h2>   </div>
                                            </div>
                                            <div class="hr-element hr-element-aa8f8ae hr-widget hr-widget-heading" data-id="aa8f8ae" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="hr-widget-container">
                                                    <h2 class="hr-heading-title hr-size-default">{{ __('content.Здоровье и благополучие') }}</h2>   </div>
                                            </div>
                                            <div class="hr-element hr-element-3739527 hr-widget__width-auto eael-tooltip-align-left hr-widget hr-widget-eael-tooltip" data-id="3739527" data-element_type="widget" data-settings="{&quot;ha_floating_fx&quot;:&quot;yes&quot;,&quot;ha_floating_fx_translate_toggle&quot;:&quot;yes&quot;,&quot;ha_floating_fx_translate_x&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:0,&quot;to&quot;:0}},&quot;ha_floating_fx_translate_y&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:0,&quot;to&quot;:5}},&quot;ha_floating_fx_translate_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;ha_floating_fx_translate_delay&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="eael-tooltip.default">
                                                <div class="hr-widget-container" style="will-change: transform; transform: translateY(3.72409px);">
                                                    <div class="eael-tooltip">
          <span class="eael-tooltip-content"><a href="#" rel="nofollow">                        <img class="ea-tooltip-svg-trigger" src="/hr_/images/Arrow-down-04.svg" alt="">
                    </a></span>
                                                        <span class="eael-tooltip-text eael-tooltip-bottom"><p>{{ __('content.Заботьтесь о своем здоровье с помощью расширенного пакета ДМС.') }}</p><p>{{ __('content.Участвуйте в спортивных мероприятиях') }}</p>
                                                            <p>{{ __('content.Программа психологической поддержки') }}</p>
                                                            <p>{{ __('content.Выплата при больничном за первые 3 дня до 100%') }}</p>
                                                            <p>{{ __('content.4 дополнительных оплачиваемых дня отдыха в год') }}</p>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="hr-section hr-inner-section hr-element hr-element-1437af8 hr-section-full_width hr-hidden-desktop hr-hidden-tablet hr-hidden-phone hr-section-height-default hr-section-height-default" data-id="1437af8" data-element_type="section">
                                <div class="hr-container hr-column-gap-no">
                                    <div class="hr-column hr-col-33 hr-inner-column hr-element hr-element-ea75aca" data-id="ea75aca" data-element_type="column">
                                        <div class="hr-widget-wrap hr-element-populated">
                                            <div class="hr-element hr-element-eeffec2 hr-widget hr-widget-spacer" data-id="eeffec2" data-element_type="widget" data-widget_type="spacer.default">
                                                <div class="hr-widget-container">
                                                    <div class="hr-spacer">
                                                        <div class="hr-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hr-column hr-col-33 hr-inner-column hr-element hr-element-19c9a83" data-id="19c9a83" data-element_type="column">
                                        <div class="hr-widget-wrap hr-element-populated">
                                            <div class="hr-element hr-element-0a2b11f hr-widget hr-widget-spacer" data-id="0a2b11f" data-element_type="widget" data-widget_type="spacer.default">
                                                <div class="hr-widget-container">
                                                    <div class="hr-spacer">
                                                        <div class="hr-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hr-column hr-col-33 hr-inner-column hr-element hr-element-22549a6" data-id="22549a6" data-element_type="column">
                                        <div class="hr-widget-wrap hr-element-populated">
                                            <div class="hr-element hr-element-8e84234 hr-widget hr-widget-spacer" data-id="8e84234" data-element_type="widget" data-widget_type="spacer.default">
                                                <div class="hr-widget-container">
                                                    <div class="hr-spacer">
                                                        <div class="hr-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="hr-column hr-col-33 hr-top-column hr-element hr-element-dfeec08" data-id="dfeec08" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class=" pafe-equal-height-desktop pafe-equal-height-tablet pafe-equal-height-mobile hr-element hr-element-e60978d hr-widget hr-widget-spacer" data-pafe-equal-height="admin" data-pafe-equal-height-widget-container="" data-id="e60978d" data-element_type="widget" data-settings="{&quot;motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;}" data-widget_type="spacer.default" style="height: 175px;">
                                <div class="hr-widget-container hr-p-f-s-img">
                                    <div class="hr-spacer">
                                        <div class="hr-spacer-inner"></div>
                                    </div>
                                </div>
                            </div>
                            <section class="hr-section hr-inner-section hr-element hr-element-f872cf7 hr-section-full_width hr-section-content-middle hr-section-height-default hr-section-height-default" data-id="f872cf7" data-element_type="section">
                                <div class="hr-container hr-column-gap-no">
                                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-7402cf7" data-id="7402cf7" data-element_type="column">
                                        <div class="hr-widget-wrap hr-element-populated">
                                            <div class="hr-element hr-element-3f7119b hr-widget hr-widget-heading" data-id="3f7119b" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="hr-widget-container">
                                                    <h2 class="hr-heading-title hr-size-default">{{ __('content.Обучение и развитие') }}</h2>   </div>
                                            </div>
                                            <div class="hr-element hr-element-04c9e70 hr-widget hr-widget-spacer" data-id="04c9e70" data-element_type="widget" data-widget_type="spacer.default">
                                                <div class="hr-widget-container">
                                                    <div class="hr-spacer">
                                                        <div class="hr-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hr-element hr-element-3c3cf07 hr-widget__width-auto eael-tooltip-align-left hr-widget hr-widget-eael-tooltip" data-id="3c3cf07" data-element_type="widget" data-settings="{&quot;ha_floating_fx&quot;:&quot;yes&quot;,&quot;ha_floating_fx_translate_toggle&quot;:&quot;yes&quot;,&quot;ha_floating_fx_translate_x&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:0,&quot;to&quot;:0}},&quot;ha_floating_fx_translate_y&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:0,&quot;to&quot;:5}},&quot;ha_floating_fx_translate_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;ha_floating_fx_translate_delay&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="eael-tooltip.default">
                                                <div class="hr-widget-container" style="will-change: transform; transform: translateY(3.72409px);">
                                                    <div class="eael-tooltip">
          <span class="eael-tooltip-content"><a href="#" rel="nofollow">                        <img class="ea-tooltip-svg-trigger" src="/hr_/images/Arrow-down-04.svg" alt="">
                    </a></span>
                                                        <span class="eael-tooltip-text eael-tooltip-bottom"><p>{{ __('content.Индивидуальный план развития для каждого сотрудника.') }}</p><p>{{ __('content.Возможность проходить профессиональное (и не только!) обучение.') }}</p><p>{{ __('content.Свободный доступ к adminAcademy.') }}</p><p>{{ __('content.Публикации ваших статей в профессиональных сообществах.') }}</p></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-8842fc3" data-id="8842fc3" data-element_type="column">
                                        <div class="hr-widget-wrap hr-element-populated">
                                            <div class="hr-element hr-element-cf3de84 hr-widget hr-widget-heading" data-id="cf3de84" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="hr-widget-container">
                                                    <h2 class="hr-heading-title hr-size-default">X</h2>   </div>
                                            </div>
                                            <div class="hr-element hr-element-bfa4a7a hr-widget hr-widget-heading" data-id="bfa4a7a" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="hr-widget-container">
                                                    <h2 class="hr-heading-title hr-size-default">{{ __('content.Мотивация') }}</h2>   </div>
                                            </div>
                                            <div class="hr-element hr-element-ec59979 hr-widget__width-auto eael-tooltip-align-left hr-widget hr-widget-eael-tooltip" data-id="ec59979" data-element_type="widget" data-settings="{&quot;ha_floating_fx&quot;:&quot;yes&quot;,&quot;ha_floating_fx_translate_toggle&quot;:&quot;yes&quot;,&quot;ha_floating_fx_translate_x&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:0,&quot;to&quot;:0}},&quot;ha_floating_fx_translate_y&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:0,&quot;to&quot;:5}},&quot;ha_floating_fx_translate_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;ha_floating_fx_translate_delay&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="eael-tooltip.default">
                                                <div class="hr-widget-container" style="will-change: transform; transform: translateY(3.72409px);">
                                                    <div class="eael-tooltip">
          <span class="eael-tooltip-content"><a href="#" rel="nofollow">                        <img class="ea-tooltip-svg-trigger" src="/hr_/images/Arrow-down-04.svg" alt="">
                    </a></span>
                                                        <span class="eael-tooltip-text eael-tooltip-bottom"><p>{{ __('content.Выдвижение инновационных идей и участие в программах внутреннего краудсорсинга.') }}</p><p>{{ __('content.Возможность напрямую влиять и участвовать в улучшении рабочих процессов.') }}</p><p>{{ __('content.Выбор вознаграждения за выполнение индивидуальных целей.') }}</p></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="hr-section hr-inner-section hr-element hr-element-e95fe88 hr-section-full_width hr-section-content-middle hr-section-height-default hr-section-height-default" data-id="e95fe88" data-element_type="section">
                                <div class="hr-container hr-column-gap-no">
                                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-3f39c8c" data-id="3f39c8c" data-element_type="column">
                                        <div class="hr-widget-wrap hr-element-populated">
                                            <div class="hr-element hr-element-80b3a9d hr-widget hr-widget-heading" data-id="80b3a9d" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="hr-widget-container">
                                                    <h2 class="hr-heading-title hr-size-default">N</h2>   </div>
                                            </div>
                                            <div class="hr-element hr-element-65450ba hr-widget hr-widget-heading" data-id="65450ba" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="hr-widget-container">
                                                    <h2 class="hr-heading-title hr-size-default">{{ __('content.Семья-это важно') }}</h2>   </div>
                                            </div>
                                            <div class="hr-element hr-element-86eb1a2 hr-widget__width-auto eael-tooltip-align-left hr-widget hr-widget-eael-tooltip" data-id="86eb1a2" data-element_type="widget" data-settings="{&quot;ha_floating_fx&quot;:&quot;yes&quot;,&quot;ha_floating_fx_translate_toggle&quot;:&quot;yes&quot;,&quot;ha_floating_fx_translate_x&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:0,&quot;to&quot;:0}},&quot;ha_floating_fx_translate_y&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;from&quot;:0,&quot;to&quot;:5}},&quot;ha_floating_fx_translate_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;ha_floating_fx_translate_delay&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="eael-tooltip.default">
                                                <div class="hr-widget-container" style="will-change: transform; transform: translateY(3.72409px);">
                                                    <div class="eael-tooltip">
          <span class="eael-tooltip-content"><a href="#" rel="nofollow">                        <img class="ea-tooltip-svg-trigger" src="/hr_/images/Arrow-down-04.svg" alt="">
                    </a></span>
                                                        <span class="eael-tooltip-text eael-tooltip-bottom"><p>{{ __('content.Сувениры и памятные подарки детям.') }}</p><p>{{ __('content.Детские и семейные праздники.') }}</p><p>{{ __('content.Материальная поддержка сотрудников при рождении детей и бракосочетании.') }}</p></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-88c045c" data-id="88c045c" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="hr-widget-wrap hr-element-populated hr-p-f-s-img-3">
                                            <div class="hr-element hr-element-a550f30 hr-widget hr-widget-spacer" data-id="a550f30" data-element_type="widget" data-widget_type="spacer.default">
                                                <div class="hr-widget-container">
                                                    <div class="hr-spacer">
                                                        <div class="hr-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="hr-section hr-inner-section hr-element hr-element-a40d304 hr-section-full_width hr-hidden-desktop hr-hidden-tablet hr-hidden-phone hr-section-height-default hr-section-height-default" data-id="a40d304" data-element_type="section">
                                <div class="hr-container hr-column-gap-no">
                                    <div class="hr-column hr-col-33 hr-inner-column hr-element hr-element-dda7b6c" data-id="dda7b6c" data-element_type="column">
                                        <div class="hr-widget-wrap hr-element-populated">
                                            <div class="hr-element hr-element-cc1dfe1 hr-widget hr-widget-spacer" data-id="cc1dfe1" data-element_type="widget" data-widget_type="spacer.default">
                                                <div class="hr-widget-container">
                                                    <div class="hr-spacer">
                                                        <div class="hr-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hr-column hr-col-33 hr-inner-column hr-element hr-element-a9135db" data-id="a9135db" data-element_type="column">
                                        <div class="hr-widget-wrap hr-element-populated">
                                            <div class="hr-element hr-element-0ce8b41 hr-widget hr-widget-spacer" data-id="0ce8b41" data-element_type="widget" data-widget_type="spacer.default">
                                                <div class="hr-widget-container">
                                                    <div class="hr-spacer">
                                                        <div class="hr-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hr-column hr-col-33 hr-inner-column hr-element hr-element-5aba43a" data-id="5aba43a" data-element_type="column">
                                        <div class="hr-widget-wrap hr-element-populated">
                                            <div class="hr-element hr-element-bdb0792 hr-widget hr-widget-spacer" data-id="bdb0792" data-element_type="widget" data-widget_type="spacer.default">
                                                <div class="hr-widget-container">
                                                    <div class="hr-spacer">
                                                        <div class="hr-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>

            <section class="hr-section hr-top-section hr-element hr-element-eb42744 hr-section-boxed hr-section-height-default hr-section-height-default" data-id="eb42744" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="hr-container hr-column-gap-no">
                    <div class="hr-column hr-col-33 hr-top-column hr-element hr-element-288c269" data-id="288c269" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class=" pafe-equal-height-desktop pafe-equal-height-tablet pafe-equal-height-mobile hr-element hr-element-07c6a38 hr-widget hr-widget-counter" data-pafe-equal-height="1" data-pafe-equal-height-widget-container="" data-id="07c6a38" data-element_type="widget" data-widget_type="counter.default" style="height: 152px;">
                                <div class="hr-widget-container">
                                    <div class="hr-counter">
                                        <div class="hr-counter-number-wrapper">
                                            <span class="hr-counter-number-prefix"></span>
                                            <span class="hr-counter-number" data-duration="2000" data-to-value="41" data-from-value="0" data-delimiter=",">41</span>
                                            <span class="hr-counter-number-suffix">%</span>
                                        </div>
                                        <div class="hr-counter-title">{{ __('content.сотрудников') }}</div>
                                    </div>
                                </div>
                            </div>
                            <section class="hr-section hr-inner-section hr-element hr-element-9114832 hr-section-full_width hr-section-height-default hr-section-height-default" data-id="9114832" data-element_type="section">
                                <div class="hr-container hr-column-gap-no">
                                    <div class="hr-column hr-col-100 hr-inner-column hr-element hr-element-4d9be9a" data-id="4d9be9a" data-element_type="column">
                                        <div class="hr-widget-wrap hr-element-populated">
                                            <div class="hr-element hr-element-4daec49 hr-widget-divider--view-line hr-widget hr-widget-divider" data-id="4daec49" data-element_type="widget" data-widget_type="divider.default">
                                                <div class="hr-widget-container">
                                                    <div class="hr-divider">
      <span class="hr-divider-separator">
            </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hr-element hr-element-d62a596 hr-absolute hr-widget-divider--view-line hr-widget hr-widget-divider" data-id="d62a596" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="divider.default">
                                                <div class="hr-widget-container">
                                                    <div class="hr-divider">
      <span class="hr-divider-separator">
            </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="hr-element hr-element-a44acfa hr-widget hr-widget-text-editor" data-id="a44acfa" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="hr-widget-container">
                                    <p>{{ __('content.за время работы в компании получили продвижение') }}</p>            </div>
                            </div>
                        </div>
                    </div>
                    <div class="hr-column hr-col-33 hr-top-column hr-element hr-element-7c7d0b1" data-id="7c7d0b1" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class=" pafe-equal-height-desktop pafe-equal-height-tablet pafe-equal-height-mobile hr-element hr-element-ba79564 hr-widget hr-widget-counter" data-pafe-equal-height="1" data-pafe-equal-height-widget-container="" data-id="ba79564" data-element_type="widget" data-widget_type="counter.default" style="height: 152px;">
                                <div class="hr-widget-container">
                                    <div class="hr-counter">
                                        <div class="hr-counter-number-wrapper">
                                            <span class="hr-counter-number-prefix"></span>
                                            <span class="hr-counter-number" data-duration="2000" data-to-value="10" data-from-value="0" data-delimiter=",">10</span>
                                            <span class="hr-counter-number-suffix">%</span>
                                        </div>
                                        <div class="hr-counter-title">{{ __('content.сотрудников') }}</div>
                                    </div>
                                </div>
                            </div>
                            <section class="hr-section hr-inner-section hr-element hr-element-80d7d9d hr-section-full_width hr-section-height-default hr-section-height-default" data-id="80d7d9d" data-element_type="section">
                                <div class="hr-container hr-column-gap-no">
                                    <div class="hr-column hr-col-100 hr-inner-column hr-element hr-element-134a864" data-id="134a864" data-element_type="column">
                                        <div class="hr-widget-wrap hr-element-populated">
                                            <div class="hr-element hr-element-7df9ffd hr-widget-divider--view-line hr-widget hr-widget-divider" data-id="7df9ffd" data-element_type="widget" data-widget_type="divider.default">
                                                <div class="hr-widget-container">
                                                    <div class="hr-divider">
      <span class="hr-divider-separator">
            </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hr-element hr-element-19bf50e hr-absolute hr-widget-divider--view-line hr-widget hr-widget-divider" data-id="19bf50e" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="divider.default">
                                                <div class="hr-widget-container">
                                                    <div class="hr-divider">
      <span class="hr-divider-separator">
            </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="hr-element hr-element-cf8e612 hr-widget hr-widget-text-editor" data-id="cf8e612" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="hr-widget-container">
                                    <p>{{ __('content.сотрудников начали свой путь в компании со стажировки') }}</p>            </div>
                            </div>
                        </div>
                    </div>
                    <div class="hr-column hr-col-33 hr-top-column hr-element hr-element-c34a151" data-id="c34a151" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class=" pafe-equal-height-desktop pafe-equal-height-tablet pafe-equal-height-mobile hr-element hr-element-5e1f939 hr-widget hr-widget-counter" data-pafe-equal-height="1" data-pafe-equal-height-widget-container="" data-id="5e1f939" data-element_type="widget" data-widget_type="counter.default" style="height: 152px;">
                                <div class="hr-widget-container">
                                    <div class="hr-counter">
                                        <div class="hr-counter-number-wrapper">
                                            <span class="hr-counter-number-prefix"></span>
                                            <span class="hr-counter-number" data-duration="2000" data-to-value="76" data-from-value="0" data-delimiter=",">76</span>
                                            <span class="hr-counter-number-suffix">%</span>
                                        </div>
                                        <div class="hr-counter-title">{{ __('content.сотрудников') }}</div>
                                    </div>
                                </div>
                            </div>
                            <section class="hr-section hr-inner-section hr-element hr-element-31effd3 hr-section-full_width hr-section-height-default hr-section-height-default" data-id="31effd3" data-element_type="section">
                                <div class="hr-container hr-column-gap-no">
                                    <div class="hr-column hr-col-100 hr-inner-column hr-element hr-element-8ab4539" data-id="8ab4539" data-element_type="column">
                                        <div class="hr-widget-wrap hr-element-populated">
                                            <div class="hr-element hr-element-923a1e5 hr-widget-divider--view-line hr-widget hr-widget-divider" data-id="923a1e5" data-element_type="widget" data-widget_type="divider.default">
                                                <div class="hr-widget-container">
                                                    <div class="hr-divider">
      <span class="hr-divider-separator">
            </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hr-element hr-element-b9050f4 hr-absolute hr-widget-divider--view-line hr-widget hr-widget-divider" data-id="b9050f4" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="divider.default">
                                                <div class="hr-widget-container">
                                                    <div class="hr-divider">
      <span class="hr-divider-separator">
            </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="hr-element hr-element-ef12bf7 hr-widget hr-widget-text-editor" data-id="ef12bf7" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="hr-widget-container">
                                    <p>{{ __('content.владеют английским языком на разговорном уровне') }}</p>            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

             <section class="pp-bg-effects hr-section hr-top-section hr-element hr-element-b625f8a pp-bg-effects-yes hr-section-boxed hr-section-height-default hr-section-height-default" id="pp-bg-effects-b625f8a" data-section-id="b625f8a" data-effect-enable="yes" data-animation-type="bubble" data-canvas-opacity="1" data-hide-max-width="none" data-hide-min-width="none" data-part-color="" data-line-color="" data-line-h-color="" data-part-opacity="" data-rand-opacity="" data-quantity="" data-part-size="" data-part-speed="" data-part-direction="none" data-hover-effect="noeffect" data-hover-size="" data-id="b625f8a" data-element_type="section" data-settings="{&quot;shape_divider_bottom&quot;:&quot;zigzag&quot;,&quot;pp_background_effects_enable&quot;:&quot;yes&quot;,&quot;effect_hide_tablet&quot;:&quot;label_off&quot;,&quot;effect_hide_mobile&quot;:&quot;label_off&quot;}">
                <div class="hr-shape hr-shape-bottom" data-negative="false">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1800 5.8" preserveAspectRatio="none">
                        <path class="hr-shape-fill" d="M5.4.4l5.4 5.3L16.5.4l5.4 5.3L27.5.4 33 5.7 38.6.4l5.5 5.4h.1L49.9.4l5.4 5.3L60.9.4l5.5 5.3L72 .4l5.5 5.3L83.1.4l5.4 5.3L94.1.4l5.5 5.4h.2l5.6-5.4 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.2l5.6-5.4 5.4 5.3L161 .4l5.4 5.3L172 .4l5.5 5.3 5.6-5.3 5.4 5.3 5.7-5.3 5.4 5.4h.2l5.6-5.4 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.4h.2l5.6-5.4 5.5 5.3L261 .4l5.4 5.3L272 .4l5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.1l5.7-5.4 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.3 5.7-5.3 5.4 5.4h.2l5.6-5.4 5.5 5.3L361 .4l5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.1l5.7-5.4 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.1l5.6-5.4 5.5 5.3L461 .4l5.5 5.3 5.6-5.3 5.4 5.3 5.7-5.3 5.4 5.3 5.6-5.3 5.5 5.4h.2l5.6-5.4 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.1L550 .4l5.4 5.3L561 .4l5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.4h.2l5.6-5.4 5.5 5.3 5.6-5.3 5.4 5.3 5.7-5.3 5.4 5.3 5.6-5.3 5.5 5.4h.2L650 .4l5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.4h.2l5.6-5.4 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.4h.2L750 .4l5.5 5.3 5.6-5.3 5.4 5.3 5.7-5.3 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.1l5.7-5.4 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.4h.2L850 .4l5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.2l5.6-5.4 5.4 5.3 5.7-5.3 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.1l5.7-5.4 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.4h.2l5.6-5.4 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.2l5.6-5.4 5.4 5.3 5.7-5.3 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.4h.2l5.6-5.4 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.4h.2l5.6-5.4 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.1l5.7-5.4 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.4h.2l5.6-5.4 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.2l5.6-5.4 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.1l5.7-5.4 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.4h.2l5.6-5.4 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.2l5.6-5.4 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.3 5.7-5.3 5.4 5.4h.2l5.6-5.4 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.4h.2l5.6-5.4 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.1l5.6-5.4 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.3 5.7-5.3 5.4 5.4h.2l5.6-5.4 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.1l5.7-5.4 5.4 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.5 5.4h.1l5.6-5.4 5.5 5.3 5.6-5.3 5.5 5.3 5.6-5.3 5.4 5.3 5.7-5.3 5.4 5.3 5.6-5.3 5.5 5.4V0H-.2v5.8z"></path>
                    </svg>
                </div>
               <div class="hr-container hr-column-gap-no">
                    <div class="hr-column hr-col-50 hr-top-column hr-element hr-element-b31708e" data-id="b31708e" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class="hr-element hr-element-6d45762 hr-widget hr-widget-spacer" data-id="6d45762" data-element_type="widget" data-widget_type="spacer.default">
                                <div class="hr-widget-container">
                                    <div class="hr-spacer">
                                        <div class="hr-spacer-inner"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hr-column hr-col-50 hr-top-column hr-element hr-element-bde3e0f overflow" data-id="bde3e0f" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class="hr-element hr-element-8e3f879 hr-widget hr-widget-heading" data-id="8e3f879" data-element_type="widget" data-widget_type="heading.default">
                                <div class="hr-widget-container">
                                    <h2 class="hr-heading-title hr-size-default top_manager">{{ __('content.Надежда Бондарева') }}</h2>   </div>
                            </div>
                            <div class="hr-element hr-element-445a53f hr-widget hr-widget-heading" data-id="445a53f" data-element_type="widget" data-widget_type="heading.default">
                                <div class="hr-widget-container">

                                    <h2 class="hr-heading-title hr-size-default top_manager">{{ __('content.Руководитель отдела персонала') }}</h2>   </div>
                            </div>
                            <section class="hr-section hr-inner-section hr-element hr-element-cfced7b hr-section-full_width hr-section-content-middle hr-section-height-default hr-section-height-default" data-id="cfced7b" data-element_type="section">
                                <div class="hr-container hr-column-gap-no">
                                    <div class="hr-column hr-col-25 hr-inner-column hr-element hr-element-cb6f1d8" data-id="cb6f1d8" data-element_type="column">
                                        <div class="hr-widget-wrap hr-element-populated">
                                            <div class="hr-element hr-element-fd034b5 hr-widget hr-widget-heading" data-id="fd034b5" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="hr-widget-container">
                                                    <h2 class="hr-heading-title hr-size-default mobile_admin_hh">L</h2>   </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hr-column hr-col-25 hr-inner-column hr-element hr-element-189e68a" data-id="189e68a" data-element_type="column">
                                        <div class="hr-widget-wrap hr-element-populated">
                                            <div class="hr-element hr-element-1dfd4ae hr-widget hr-widget-heading" data-id="1dfd4ae" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="hr-widget-container">
                                                    <h3 class="hr-heading-title hr-size-default">admin</h3>    </div>
                                            </div>
                                            <div class="hr-element hr-element-dc78432 hr-widget hr-widget-heading" data-id="dc78432" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="hr-widget-container">
                                                    <h3 class="hr-heading-title hr-size-default">datacenter</h3>    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hr-column hr-col-25 hr-inner-column hr-element hr-element-b3080a0" data-id="b3080a0" data-element_type="column">
                                        <div class="hr-widget-wrap">
                                        </div>
                                    </div>
                                    <div class="hr-column hr-col-25 hr-inner-column hr-element hr-element-819d998" data-id="819d998" data-element_type="column">
                                        <div class="hr-widget-wrap hr-element-populated">
                                            <div class="hr-element hr-element-a6ae4ae hr-widget hr-widget-heading" data-id="a6ae4ae" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="hr-widget-container">
                                                    <h2 class="hr-heading-title hr-size-default mobile_admin_hh">X</h2>   </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="hr-section hr-inner-section hr-element hr-element-d4185f2 hr-section-content-middle hr-section-boxed hr-section-height-default hr-section-height-default" data-id="d4185f2" data-element_type="section">
                               <div class="hr-container hr-column-gap-no">
                                    <div class="hr-column hr-col-25 hr-inner-column hr-element hr-element-de41a16" data-id="de41a16" data-element_type="column">
                                        <div class="hr-widget-wrap">
                                        </div>
                                    </div>
                                    <div class="hr-column hr-col-25 hr-inner-column hr-element hr-element-3bb97b5" data-id="3bb97b5" data-element_type="column">
                                        <div class="hr-widget-wrap hr-element-populated">
                                            <div class="hr-element hr-element-a2e8551 hr-widget hr-widget-heading" data-id="a2e8551" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="hr-widget-container">
                                                    <h2 class="hr-heading-title hr-size-default mobile_admin_hh">i</h2>   </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hr-column hr-col-25 hr-inner-column hr-element hr-element-eade609" data-id="eade609" data-element_type="column">
                                        <div class="hr-widget-wrap hr-element-populated">
                                            <div class="hr-element hr-element-0ad502f hr-widget hr-widget-heading" data-id="0ad502f" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="hr-widget-container">
                                                    <h2 class="hr-heading-title hr-size-default mobile_admin_hh">N</h2>   </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hr-column hr-col-25 hr-inner-column hr-element hr-element-06e5281" data-id="06e5281" data-element_type="column">
                                        <div class="hr-widget-wrap">
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="hr-element hr-element-b573697 hr-widget hr-widget-text-editor" data-id="b573697" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="hr-widget-container">
                                    <p>
                                        {{ __('content.admindatacenter существует с 2001 года, и мы продолжаем расти и развиваться. К нашей звездной команде присоединяются профессионалы и начинающие специалисты. С каждым годом мы усиливаем позиции на ИТ-рынке, расширяем компетенции, развиваем свои таланты и получаем новый опыт и экспертизу. На этой странице вы сможете узнать о том, какие мы, почему многие уже выбрали admindatacenter и о том, кого мы ждем. Добро пожаловать в нашу команду!') }}
                                    </p>
                                </div>
                            </div>
                            <section class="hr-section hr-inner-section hr-element hr-element-76c1172 hr-section-full_width hr-section-height-default hr-section-height-default" data-id="76c1172" data-element_type="section">
                                <div class="hr-container hr-column-gap-no">
                                    <div class="hr-column hr-col-100 hr-inner-column hr-element hr-element-8eef274" data-id="8eef274" data-element_type="column">
                                        <div class="hr-widget-wrap hr-element-populated">
                                            <div class="hr-element hr-element-6974a52 hr-widget-divider--view-line hr-widget hr-widget-divider" data-id="6974a52" data-element_type="widget" data-widget_type="divider.default">
                                                <div class="hr-widget-container">
                                                    <div class="hr-divider">
      <span class="hr-divider-separator">
            </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hr-element hr-element-6f32931 hr-absolute hr-widget-divider--view-line hr-widget hr-widget-divider" data-id="6f32931" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="divider.default">
                                                <div class="hr-widget-container">
                                                    <div class="hr-divider">
      <span class="hr-divider-separator">
            </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hr-element hr-element-298b1e1 hr-widget hr-widget-heading" data-id="298b1e1" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="hr-widget-container">
                                                    <h2 class="hr-heading-title hr-size-default top_manager">jobs@admindatacenter.com</h2>   </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <section class="hr-section hr-top-section hr-element hr-element-006c35d hr-section-boxed hr-section-height-default hr-section-height-default" data-id="006c35d" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="hr-container hr-column-gap-no">
                    <div class="hr-column hr-col-100 hr-top-column hr-element hr-element-f22b522" data-id="f22b522" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <section class="hr-section hr-inner-section hr-element hr-element-0931a03 hr-section-full_width hr-section-height-default hr-section-height-default" data-id="0931a03" data-element_type="section">
                                <div class="hr-container hr-column-gap-no">
                                    <div class="hr-column hr-col-100 hr-inner-column hr-element hr-element-32db7b3" data-id="32db7b3" data-element_type="column">
                                        <div class="hr-widget-wrap hr-element-populated">
                                            <div class="hr-element hr-element-32853c3 hr-widget-divider--view-line_icon hr-view-framed hr-widget-divider--element-align-right hr-widget__width-auto hr-widget hr-widget-divider" data-id="32853c3" data-element_type="widget" data-widget_type="divider.default">
                                                <div class="hr-widget-container">
                                                    <div class="hr-divider">
      <span class="hr-divider-separator">
              <div class="hr-icon hr-divider__element">
          <i aria-hidden="true" class="far fa-star"></i></div>
            </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hr-element hr-element-8fa47fb hr-widget__width-auto hr-widget hr-widget-uael-dual-color-heading" data-id="8fa47fb" data-element_type="widget" data-widget_type="uael-dual-color-heading.default">
                                                <div class="hr-widget-container">
                                                    <div class="uael-module-content uael-dual-color-heading uael-heading-stack-none">
                                                        <h3>
                                                            <span class="uael-before-heading"><span class="hr-inline-editing uael-dual-heading-text uael-first-text" data-hr-setting-key="before_heading_text" data-hr-inline-editing-toolbar="basic"></span></span><span class="uael-adv-heading-stack"><span class="hr-inline-editing uael-dual-heading-text uael-highlight-text" data-hr-setting-key="second_heading_text" data-hr-inline-editing-toolbar="basic">{{ __('content.вакансии') }}</span></span>                         </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="hr-element hr-element-0fe8816 hr-widget__width-inherit hr-absolute hr-widget hr-widget-template" data-id="0fe8816" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="template.default">
                                <div class="hr-widget-container">
                                    <div class="hr-template">
                                        <div data-hr-type="page" data-hr-id="4826" class="hr hr-4826" data-hr-settings="[]">
                                            <div class="hr-section-wrap">
                                                <section class="hr-section hr-top-section hr-element hr-element-74f013b hr-relative hr-section-content-middle arrows_right hr-section-boxed hr-section-height-default hr-section-height-default" data-id="74f013b" data-element_type="section" data-settings="{&quot;pafe_position&quot;:&quot;relative&quot;}">
                                                    <div class="hr-container hr-column-gap-no">
                                                        <div class="hr-column hr-col-100 hr-top-column hr-element hr-element-076e2fe animated-fast hr-invisible" data-id="076e2fe" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:200}">
                                                            <div class="hr-widget-wrap hr-element-populated">
                                                                <div class="hr-element hr-element-93389dc hr-view-framed hr-shape-square adminprev hr-widget__width-auto hr-absolute hr-widget hr-widget-icon" data-id="93389dc" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="icon.default" tabindex="0" role="button" aria-label="Previous slide">
                                                                    <div class="hr-widget-container">
                                                                        <div class="hr-icon-wrapper">
                                                                            <div class="hr-icon hr-animation-grow">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 497.78 343.09"><g id="a268b999-40a5-491f-8603-ba2f631ef4d8" data-name="Layer 2"><g id="a8faabd8-c792-4d20-81d1-a61ad1db5360" data-name="Layer 1"><g id="aeca4203-e64e-4be1-84fe-1579aab2817b" data-name="Layer 2"><g id="afc7d0e2-ea76-4742-946e-25fef8afbd2f" data-name="Layer 2-2"><polyline points="169.06 17.5 17.66 169 480.28 169" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:35px"></polyline><line x1="173.93" y1="325.59" x2="17.5" y2="169.16" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:35px"></line></g></g></g></g></svg>      </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="hr-element hr-element-2798fb6 hr-view-framed hr-shape-square adminnext hr-widget__width-auto hr-absolute hr-widget hr-widget-icon" data-id="2798fb6" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="icon.default" tabindex="0" role="button" aria-label="Next slide">
                                                                    <div class="hr-widget-container">
                                                                        <div class="hr-icon-wrapper">
                                                                            <div class="hr-icon hr-animation-grow">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 497.78 343.09"><g id="b8828796-c9ee-446c-b852-82415f4522cb" data-name="Layer 2"><g id="b7408b96-247d-475f-b3ab-5e54b9e52003" data-name="Layer 1"><g id="a1829bb6-5d3a-488a-bbf9-ebe20dcb9521" data-name="Layer 2"><g id="ef010664-f4ee-4b14-b166-fbacdfc41f44" data-name="Layer 2-2"><polyline points="328.72 17.5 480.12 169 17.5 169" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:35px"></polyline><line x1="323.85" y1="325.59" x2="480.28" y2="169.16" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:35px"></line></g></g></g></g></svg>     </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hr-element hr-element-fa29bf9 hr-widget hr-widget-ucaddon_adminslider_vacancy" data-id="fa29bf9" data-element_type="widget" data-widget_type="ucaddon_adminslider_vacancy.default">
                                <div class="hr-widget-container">

                                    <div class="swiper-container vacancy swiper-container-initialized swiper-container-horizontal">
                                        <div class="swiper-wrapper flex-box owl-carousel owl-carousel2">

{{--                                            <div class="swiper-slide  swiper-slide-prev" data-swiper-slide-index="3" style="width: 390px; margin-right: 40px;">--}}
{{--                                                <div class="vacancy-icon">--}}
{{--                                                    <svg xmlns="http://www.w3.org/2000/svg" id="bf041f12-40e5-436f-9ebf-42e6bfa6df15" data-name="Layer 1" viewBox="0 0 427.913 422.809"><defs><style>.a8e5f15b-8d54-4601-bdf6-cc87220ee9f1,.f506cc86-81ec-4224-8fe2-e38b78c462fe{fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px;}.f506cc86-81ec-4224-8fe2-e38b78c462fe{stroke:#fff;}.a8e5f15b-8d54-4601-bdf6-cc87220ee9f1{stroke:#ff006e;}</style></defs><path class="f506cc86-81ec-4224-8fe2-e38b78c462fe" d="M120.555,236.657l12.347,21.6a3.085,3.085,0,0,0,1.928,1.463l11.519,2.879,39.505,39.506"></path><path class="f506cc86-81ec-4224-8fe2-e38b78c462fe" d="M163.08,245.894,160.2,234.382a3.1,3.1,0,0,0-1.463-1.932l-21.606-12.345a3.085,3.085,0,0,0-3.7.5l-12.345,12.347a3.085,3.085,0,0,0-.529,3.709"></path><path class="f506cc86-81ec-4224-8fe2-e38b78c462fe" d="M202.586,285.4,163.08,245.894"></path><path class="f506cc86-81ec-4224-8fe2-e38b78c462fe" d="M169.09,350.808a3.087,3.087,0,0,0-2.646-1.5H147.926a3.084,3.084,0,0,0-2.645,1.5l-9.26,15.432a3.085,3.085,0,0,0,0,3.179l9.26,15.431a3.084,3.084,0,0,0,2.645,1.5h18.518a3.087,3.087,0,0,0,2.646-1.5l9.258-15.431a3.085,3.085,0,0,0,0-3.179Z"></path><path class="f506cc86-81ec-4224-8fe2-e38b78c462fe" d="M244.882,309.187l16.182-16.182a36.305,36.305,0,0,0,7.231.751,36.909,36.909,0,0,0,35.9-45.988,3.085,3.085,0,0,0-5.175-1.438l-19.213,19.2-15.243-5.08-5.084-15.24,19.213-19.216a3.086,3.086,0,0,0-1.448-5.179,36.922,36.922,0,0,0-45.987,35.9,36.3,36.3,0,0,0,.75,7.232"></path><path class="a8e5f15b-8d54-4601-bdf6-cc87220ee9f1" d="M262.808,397.569A24.91,24.91,0,1,0,298.194,362.5c-.052-.054-.105-.107-.158-.16l-36.818-36.817a3.086,3.086,0,0,0-4.364,0l-1.543,1.543a3.462,3.462,0,0,1-4.9-4.889l.007-.006,1.544-1.544a3.088,3.088,0,0,0,0-4.364l-7.078-7.077"></path><path class="f506cc86-81ec-4224-8fe2-e38b78c462fe" d="M209.653,344.415l7.077,7.077a3.087,3.087,0,0,0,4.365,0l1.543-1.543a3.461,3.461,0,0,1,4.9,4.889l-.007.006-1.542,1.543a3.086,3.086,0,0,0,0,4.364l36.818,36.818"></path><path class="a8e5f15b-8d54-4601-bdf6-cc87220ee9f1" d="M232.009,263.95l-67.593,67.592a36.445,36.445,0,0,0-7.231-.75,37.037,37.037,0,1,0,37.036,37.037,36.306,36.306,0,0,0-.75-7.232l16.182-16.182"></path><path class="f506cc86-81ec-4224-8fe2-e38b78c462fe" d="M277.559,394.146l17.053-17.054"></path><line class="f506cc86-81ec-4224-8fe2-e38b78c462fe" x1="178.789" y1="346.221" x2="246.69" y2="278.32"></line><line class="f506cc86-81ec-4224-8fe2-e38b78c462fe" x1="246.69" y1="346.228" x2="277.554" y2="377.092"></line><line class="f506cc86-81ec-4224-8fe2-e38b78c462fe" x1="216.463" y1="337.606" x2="239.725" y2="314.343"></line><path class="a8e5f15b-8d54-4601-bdf6-cc87220ee9f1" d="M51.879,272.72a75.3,75.3,0,0,0,31.044,143.9H325.789A92.327,92.327,0,0,0,351.426,235.6"></path><path class="f506cc86-81ec-4224-8fe2-e38b78c462fe" d="M351.426,235.6A104,104,0,0,0,148.45,207.837,70.415,70.415,0,0,0,51.879,272.72"></path></svg> </div>--}}
{{--                                                <h2 class="vacancy-title" style="height: 75px"><span class="uc_style_adminslider_vacancy_hr_uc_items_attribute_title" style="color:#FFFFFF;">{{ __('content.Сетевой инженер') }}</span></h2>--}}
{{--                                                <h3 class="vacancy-subtitle" style="text-align: left; height: 30px"><span class="uc_style_adminslider_vacancy_hr_uc_items_attribute_subtitle" style="color:#FFFFFF;">{{ __('content.Москва, Санкт-Петербург') }}</span></h3>--}}
{{--                                                <p class="vacancy-description" style="height: 144px;"><span class="uc_style_adminslider_vacancy_hr_uc_items_attribute_description" style="color:#FFFFFF;">{{ __('content.Поддержка IP сети ЦОД и заказчиков, активное участие в предпроектных разработках решений по части IP сети, имплементация и траблшутинг текущих сетевых сервисов, активное участие в проектах по развитию сети компании и сетевых сервисов...') }}--}}
{{--                                                </span></p>--}}
{{--                                                <div class="button-wrapper"><button style="" id="work1_btn"><span class="uc_style_adminslider_vacancy_hr_uc_items_attribute_button" style="color:#FFFFFF;">{{ __('content.Подробнее о вакансии') }}</span></button></div>--}}

{{--                                            </div>--}}

{{--                                            <div class="swiper-slide  swiper-slide-prev" data-swiper-slide-index="3" style="width: 390px; margin-right: 40px;">--}}
{{--                                                <div class="vacancy-icon">--}}
{{--                                                    <svg xmlns="http://www.w3.org/2000/svg" id="a10ee083-1e6c-45ed-b32d-2c603e83cff9" data-name="Layer 3" viewBox="0 0 452.3 481.92"><line x1="66.19" y1="316.22" x2="141.2" y2="280.76" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line><line x1="336.36" y1="166" x2="336.36" y2="163.45" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line><line x1="115.56" y1="166.43" x2="115.56" y2="163.88" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line><path d="M336.36,166l-91.87-40.79-7.81-11.93c-.84-6.56-.72-14.45-7.53-12.42A15.4,15.4,0,0,0,226,102.2" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><path d="M443.84,303.26l-9.64-72a31,31,0,0,0-15.82-23.08l-47.86-26.29,0-10.79" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><path d="M385.42,457.83l8.22-.82L367.4,360.37c-.28-1,18.33-44.58,18.33-44.58l.39-87.64,15.62,7.08a21.71,21.71,0,0,1,12.45,16.2l5,29.64" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><path d="M328.56,457.83l13.52-.63-27.89-96.4,24.58-41.32-13.35,28.87a28,28,0,0,0-.5,22.29l35.65,87.18h-8.64a8.21,8.21,0,0,0-8.21,8.47,8.44,8.44,0,0,0,8.55,8h32.81a8.44,8.44,0,0,0,8.55-8,8.21,8.21,0,0,0-8.21-8.47" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><path d="M234.19,75.22V34.73" style="fill:none;stroke:#ff006e;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><path d="M258.66,89.29l22-21.94" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><path d="M204.9,77.66l-22-21.93" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><line x1="385.73" y1="315.79" x2="310.72" y2="280.33" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line><line x1="225.98" y1="102.2" x2="225.98" y2="134.83" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line><circle cx="359.88" cy="139.01" r="33.75" style="fill:none;stroke:#ff006e;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></circle><line x1="386.02" y1="190.8" x2="386.12" y2="228.15" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line><path d="M234.19,19V13" style="fill:none;stroke:#ff006e;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><path d="M173.54,45.39l-3.78-4.09" style="fill:none;stroke:#ff006e;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><path d="M115.56,166.43l91.87-40.79,7.81-11.93c.84-6.55.72-14.45,7.53-12.42a16.22,16.22,0,0,1,3.17,1.34" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><path d="M8.07,303.69l9.65-72a31,31,0,0,1,15.82-23.08L81.4,182.28l0-10.79" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><path d="M66.5,458.26l-8.22-.82L84.52,360.8c.28-1-18.33-44.58-18.33-44.58l-.4-87.64-15.61,7.09a21.69,21.69,0,0,0-12.45,16.19l-5,29.64" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><path d="M123.36,458.26l-13.52-.63,27.89-96.39-24.58-41.33,13.35,28.88a28,28,0,0,1,.5,22.29L91.35,458.26H100a8.22,8.22,0,0,1,8.21,8.47,8.44,8.44,0,0,1-8.55,8H66.84a8.44,8.44,0,0,1-8.55-8,8.22,8.22,0,0,1,8.21-8.47" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><line x1="143.07" y1="191.84" x2="141.2" y2="280.76" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line><line x1="225.94" y1="135.26" x2="143.07" y2="191.84" style="fill:none;stroke:#ff006e;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line><circle cx="92.03" cy="139.44" r="33.75" style="fill:none;stroke:#ff006e;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></circle><line x1="65.89" y1="191.24" x2="65.79" y2="228.58" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line><line x1="308.84" y1="191.41" x2="310.72" y2="280.33" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line><line x1="225.98" y1="134.83" x2="308.84" y2="191.41" style="fill:none;stroke:#ff006e;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line><path d="M419.16,281.07a31,31,0,0,0,13,20.43l6.85,4.72a3.1,3.1,0,0,0,4.83-3" style="fill:none;stroke:#ff006e;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><path d="M32.76,281.5a31,31,0,0,1-13,20.44l-6.85,4.72a3.11,3.11,0,0,1-4.84-3" style="fill:none;stroke:#ff006e;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><path d="M310.72,280.33l-36.9,68.72a28,28,0,0,0-1.4,23.42l33.51,85.36H295.41a8.44,8.44,0,0,0-8.56,8,8.22,8.22,0,0,0,8.21,8.47h33.15a8.45,8.45,0,0,0,8.56-8,8.21,8.21,0,0,0-8.21-8.47" style="fill:none;stroke:#ff006e;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><path d="M141.2,280.76l36.9,68.72a27.92,27.92,0,0,1,1.39,23.42L146,458.26h10.52a8.45,8.45,0,0,1,8.56,8,8.21,8.21,0,0,1-8.21,8.47H123.71a8.45,8.45,0,0,1-8.56-8,8.22,8.22,0,0,1,8.21-8.47" style="fill:none;stroke:#ff006e;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path></svg>--}}
{{--                                                </div>--}}
{{--                                                <h2 class="vacancy-title" style="height: 75px"><span class="uc_style_adminslider_vacancy_hr_uc_items_attribute_title" style="color:#FFFFFF;">Digital Marketing Manager </span></h2>--}}
{{--                                                <h3 class="vacancy-subtitle" style="text-align: left; height: 30px"><span class="uc_style_adminslider_vacancy_hr_uc_items_attribute_subtitle" style="color:#FFFFFF;">{{ __('content.Москва, Санкт-Петербург') }}</span></h3>--}}
{{--                                                <p class="vacancy-description" style="height: 144px;"><span class="uc_style_adminslider_vacancy_hr_uc_items_attribute_description" style="color:#FFFFFF;">{{ __('content.Участие в создании эффективных рекламных воронок: генерация трафика и входящих заявок во всех онлайн каналах: РСЯ, КМС, Поиск, плотное взаимодействие с подрядчиками по запуску, ведению РК...') }}--}}


{{--                                                </span></p>--}}
{{--                                                <div class="button-wrapper"><button style="" id="work2_btn"><span class="uc_style_adminslider_vacancy_hr_uc_items_attribute_button" style="color:#FFFFFF;">{{ __('content.Подробнее о вакансии') }}</span></button></div>--}}

{{--                                            </div>--}}

{{--                                            <div class="swiper-slide  swiper-slide-prev" data-swiper-slide-index="3" style="width: 390px; margin-right: 40px;">--}}
{{--                                                <div class="vacancy-icon">--}}
{{--                                                    <svg xmlns="http://www.w3.org/2000/svg" id="ea8ceb4e-a879-4896-9879-73c801490404" data-name="Layer 2" viewBox="0 0 427.91 422.81"><path d="M221.31,234.15l13.76,2.43,45.76,28.11" style="fill:none;stroke:#ff006e;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><path d="M340.52,281.12l10.8,10.66a5.08,5.08,0,0,0,7,.1l23.9-22.34" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><path d="M90.68,313.18l19.56,11-2.16,3.49a21.1,21.1,0,0,0,24.48,31.15,21.08,21.08,0,0,0,27.37,16.89,21.09,21.09,0,0,0,27.37,16.9,21.09,21.09,0,0,0,38.83,7.9l3.43-5.55,2.82,1.73A21.32,21.32,0,0,0,257,394.84a21.59,21.59,0,0,0,4.41-5.12,21,21,0,0,0,3.07-12.32,21,21,0,0,0,22.9-9.48,20.84,20.84,0,0,0,3.09-12.31,20.94,20.94,0,0,0,4.87.59,21.28,21.28,0,0,0,18-10.07,21,21,0,0,0,3.08-12.32,21.1,21.1,0,0,0,16-38.5L329,293.19l11.55-12.07" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><path d="M44.7,323.77l32.16,11.39a5.08,5.08,0,0,0,6.36-2.91l7.46-19.07" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><line x1="129.43" y1="214.15" x2="90.68" y2="313.18" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line><path d="M259.06,200.75l-2.64,2.33-55.19-4.75a5,5,0,0,0-2.52.43L155,218.68a2.74,2.74,0,0,0-.39-.09l-25.16-4.44,2-5.2a5,5,0,0,0-2.82-6.5L48.24,170.29" style="fill:none;stroke:#ff006e;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><path d="M375.31,68.76,250.9,185.36a5.07,5.07,0,0,0-.1,7.24l8.26,8.15" style="fill:none;stroke:#ff006e;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><path d="M329,293.19,295.29,272.5" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><line x1="259.06" y1="200.75" x2="340.52" y2="281.12" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line><path d="M142.75,226.71a21.11,21.11,0,0,0,25.16,32.47l29.43-13.41a5.08,5.08,0,0,0,2.5-6.66" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><path d="M229.56,394.92l7.65-12.39A21.81,21.81,0,0,0,239.78,366a20.78,20.78,0,0,0-21.7-15.87A21.72,21.72,0,0,0,218,340a20.8,20.8,0,0,0-21.69-15.88,21.39,21.39,0,0,0-9.66-23.16,20.93,20.93,0,0,0-12.08-2.85A21,21,0,0,0,136.24,282l-26,42.13" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><line x1="187.3" y1="392.57" x2="218.08" y2="350.11" style="fill:none;stroke:#ff006e;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line><line x1="159.93" y1="375.67" x2="196.34" y2="324.09" style="fill:none;stroke:#ff006e;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line><line x1="132.56" y1="358.78" x2="174.6" y2="298.08" style="fill:none;stroke:#ff006e;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line><line x1="316.45" y1="333.81" x2="275.27" y2="308.49" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line><line x1="290.48" y1="355.61" x2="253.2" y2="333.81" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line><line x1="264.49" y1="377.4" x2="242.43" y2="364.43" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line><line x1="178.74" y1="176.39" x2="138.03" y2="106.16" style="fill:none;stroke:#ff006e;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line><line x1="200.28" y1="172.6" x2="200.28" y2="78.51" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line><line x1="226.57" y1="172.22" x2="245.66" y2="104.68" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line><line x1="249.03" y1="94" x2="251.22" y2="85.4" style="fill:none;stroke:#ff006e;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line></svg>--}}
{{--                                                </div>--}}
{{--                                                <h2 class="vacancy-title" style="height: 75px"><span class="uc_style_adminslider_vacancy_hr_uc_items_attribute_title" style="color:#FFFFFF;">Presale {{ __('content.Менеджер') }} </span></h2>--}}
{{--                                                <h3 class="vacancy-subtitle" style="text-align: left; height: 30px"><span class="uc_style_adminslider_vacancy_hr_uc_items_attribute_subtitle" style="color:#FFFFFF;">{{ __('content.г. Санкт-Петербург') }}</span></h3>--}}
{{--                                                <p class="vacancy-description" style="height: 144px;"><span class="uc_style_adminslider_vacancy_hr_uc_items_attribute_description" style="color:#FFFFFF;">--}}
{{--                                                        {{ __('content.Техническое консультирование отдела продаж и клиентов по предоставляемым услугам, анализ технического задания, требований заказчика к инфраструктуре и услугам, подготовка технико-коммерческих предложений, расчёт стоимости услуг...') }}--}}
{{--                                                </span></p>--}}
{{--                                                <div class="button-wrapper"><button style="" id="work3_btn"><span class="uc_style_adminslider_vacancy_hr_uc_items_attribute_button" style="color:#FFFFFF;">{{ __('content.Подробнее о вакансии') }}</span></button></div>--}}

{{--                                            </div>--}}

{{--                                            123--}}
{{--                                            {{dd($vacancy)}}--}}
                                            @foreach($vacancy as $key=>$vac)
                                                <div class="swiper-slide  swiper-slide-prev" data-swiper-slide-index="3" style="width: 390px; margin-right: 40px;">
                                                    <div class="vacancy-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" id="bf041f12-40e5-436f-9ebf-42e6bfa6df15" data-name="Layer 4" viewBox="0 0 427.913 422.809"><defs><style>.a8e5f15b-8d54-4601-bdf6-cc87220ee9f1,.f506cc86-81ec-4224-8fe2-e38b78c462fe{fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px;}.f506cc86-81ec-4224-8fe2-e38b78c462fe{stroke:#fff;}.a8e5f15b-8d54-4601-bdf6-cc87220ee9f1{stroke:#ff006e;}</style></defs><path class="f506cc86-81ec-4224-8fe2-e38b78c462fe" d="M120.555,236.657l12.347,21.6a3.085,3.085,0,0,0,1.928,1.463l11.519,2.879,39.505,39.506"></path><path class="f506cc86-81ec-4224-8fe2-e38b78c462fe" d="M163.08,245.894,160.2,234.382a3.1,3.1,0,0,0-1.463-1.932l-21.606-12.345a3.085,3.085,0,0,0-3.7.5l-12.345,12.347a3.085,3.085,0,0,0-.529,3.709"></path><path class="f506cc86-81ec-4224-8fe2-e38b78c462fe" d="M202.586,285.4,163.08,245.894"></path><path class="f506cc86-81ec-4224-8fe2-e38b78c462fe" d="M169.09,350.808a3.087,3.087,0,0,0-2.646-1.5H147.926a3.084,3.084,0,0,0-2.645,1.5l-9.26,15.432a3.085,3.085,0,0,0,0,3.179l9.26,15.431a3.084,3.084,0,0,0,2.645,1.5h18.518a3.087,3.087,0,0,0,2.646-1.5l9.258-15.431a3.085,3.085,0,0,0,0-3.179Z"></path><path class="f506cc86-81ec-4224-8fe2-e38b78c462fe" d="M244.882,309.187l16.182-16.182a36.305,36.305,0,0,0,7.231.751,36.909,36.909,0,0,0,35.9-45.988,3.085,3.085,0,0,0-5.175-1.438l-19.213,19.2-15.243-5.08-5.084-15.24,19.213-19.216a3.086,3.086,0,0,0-1.448-5.179,36.922,36.922,0,0,0-45.987,35.9,36.3,36.3,0,0,0,.75,7.232"></path><path class="a8e5f15b-8d54-4601-bdf6-cc87220ee9f1" d="M262.808,397.569A24.91,24.91,0,1,0,298.194,362.5c-.052-.054-.105-.107-.158-.16l-36.818-36.817a3.086,3.086,0,0,0-4.364,0l-1.543,1.543a3.462,3.462,0,0,1-4.9-4.889l.007-.006,1.544-1.544a3.088,3.088,0,0,0,0-4.364l-7.078-7.077"></path><path class="f506cc86-81ec-4224-8fe2-e38b78c462fe" d="M209.653,344.415l7.077,7.077a3.087,3.087,0,0,0,4.365,0l1.543-1.543a3.461,3.461,0,0,1,4.9,4.889l-.007.006-1.542,1.543a3.086,3.086,0,0,0,0,4.364l36.818,36.818"></path><path class="a8e5f15b-8d54-4601-bdf6-cc87220ee9f1" d="M232.009,263.95l-67.593,67.592a36.445,36.445,0,0,0-7.231-.75,37.037,37.037,0,1,0,37.036,37.037,36.306,36.306,0,0,0-.75-7.232l16.182-16.182"></path><path class="f506cc86-81ec-4224-8fe2-e38b78c462fe" d="M277.559,394.146l17.053-17.054"></path><line class="f506cc86-81ec-4224-8fe2-e38b78c462fe" x1="178.789" y1="346.221" x2="246.69" y2="278.32"></line><line class="f506cc86-81ec-4224-8fe2-e38b78c462fe" x1="246.69" y1="346.228" x2="277.554" y2="377.092"></line><line class="f506cc86-81ec-4224-8fe2-e38b78c462fe" x1="216.463" y1="337.606" x2="239.725" y2="314.343"></line><path class="a8e5f15b-8d54-4601-bdf6-cc87220ee9f1" d="M51.879,272.72a75.3,75.3,0,0,0,31.044,143.9H325.789A92.327,92.327,0,0,0,351.426,235.6"></path><path class="f506cc86-81ec-4224-8fe2-e38b78c462fe" d="M351.426,235.6A104,104,0,0,0,148.45,207.837,70.415,70.415,0,0,0,51.879,272.72"></path></svg>
                                                    </div>
                                                    <?php
                                                    $var = $vac->name;
                                                    $str=strpos($var, "(");
                                                    if($str != null){
                                                        $newTitle=substr($var, 0, $str);
                                                    }else{
                                                        $newTitle = $var;
                                                    }
//                                                    echo $str;


//                                                    echo $newTitle;

                                                    preg_match('#\((.*?)\)#', $var, $match);


//                                                    print $match[1];

                                                    ?>
                                                    <h2 class="vacancy-title" style="height: 75px">
                                                        <span class="uc_style_adminslider_vacancy_hr_uc_items_attribute_title" style="color:#FFFFFF;">
                                                            {{$newTitle}}
                                                        </span>
                                                    </h2>
                                                    <h3 class="vacancy-subtitle" style="text-align: left; height: 30px">
                                                        @if(isset($match[1]))
                                                        <span class="uc_style_adminslider_vacancy_hr_uc_items_attribute_subtitle" style="color:#FFFFFF;">{{$match[1]}}</span>
                                                        @else
                                                        <span class="uc_style_adminslider_vacancy_hr_uc_items_attribute_subtitle" style="color:#FFFFFF;"></span>
                                                        @endif
                                                    </h3>
                                                    <p class="vacancy-description" style="height: 144px;">
                                                        <span class="uc_style_adminslider_vacancy_hr_uc_items_attribute_description" style="color:#FFFFFF;">
{{--                                                            {!! $vac->responsibility !!}--}}
{{--                                                            {{ strip_tags($vac->responsibility) }}--}}
{{--                                                            {{ str_limit(strip_tags($vac->responsibility), $limit = 100, $end = '...') }}--}}
                                                            {{ \Illuminate\Support\Str::limit(strip_tags($vac->responsibility), 175, $end='...') }}
{{--                                                            {!!html_entity_decode($vac->responsibility)!!}--}}
                                                        </span>
                                                    </p>
                                                    <div class="button-wrapper">
                                                        <button style="" id="work{{$key+1}}_btn">

                                                            <span class="uc_style_adminslider_vacancy_hr_uc_items_attribute_button" style="color:#FFFFFF;">
                                                                {{ __('content.Подробнее о вакансии') }}
                                                            </span>
                                                        </button>
                                                    </div>

                                                </div>
                                            @endforeach
                                            <div class="swiper-slide  swiper-slide-prev" data-swiper-slide-index="3" style="width: 390px; margin-right: 40px;">
                                                <div class="vacancy-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" id="bf041f12-40e5-436f-9ebf-42e6bfa6df15" data-name="Layer 4" viewBox="0 0 427.913 422.809"><defs><style>.a8e5f15b-8d54-4601-bdf6-cc87220ee9f1,.f506cc86-81ec-4224-8fe2-e38b78c462fe{fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px;}.f506cc86-81ec-4224-8fe2-e38b78c462fe{stroke:#fff;}.a8e5f15b-8d54-4601-bdf6-cc87220ee9f1{stroke:#ff006e;}</style></defs><path class="f506cc86-81ec-4224-8fe2-e38b78c462fe" d="M120.555,236.657l12.347,21.6a3.085,3.085,0,0,0,1.928,1.463l11.519,2.879,39.505,39.506"></path><path class="f506cc86-81ec-4224-8fe2-e38b78c462fe" d="M163.08,245.894,160.2,234.382a3.1,3.1,0,0,0-1.463-1.932l-21.606-12.345a3.085,3.085,0,0,0-3.7.5l-12.345,12.347a3.085,3.085,0,0,0-.529,3.709"></path><path class="f506cc86-81ec-4224-8fe2-e38b78c462fe" d="M202.586,285.4,163.08,245.894"></path><path class="f506cc86-81ec-4224-8fe2-e38b78c462fe" d="M169.09,350.808a3.087,3.087,0,0,0-2.646-1.5H147.926a3.084,3.084,0,0,0-2.645,1.5l-9.26,15.432a3.085,3.085,0,0,0,0,3.179l9.26,15.431a3.084,3.084,0,0,0,2.645,1.5h18.518a3.087,3.087,0,0,0,2.646-1.5l9.258-15.431a3.085,3.085,0,0,0,0-3.179Z"></path><path class="f506cc86-81ec-4224-8fe2-e38b78c462fe" d="M244.882,309.187l16.182-16.182a36.305,36.305,0,0,0,7.231.751,36.909,36.909,0,0,0,35.9-45.988,3.085,3.085,0,0,0-5.175-1.438l-19.213,19.2-15.243-5.08-5.084-15.24,19.213-19.216a3.086,3.086,0,0,0-1.448-5.179,36.922,36.922,0,0,0-45.987,35.9,36.3,36.3,0,0,0,.75,7.232"></path><path class="a8e5f15b-8d54-4601-bdf6-cc87220ee9f1" d="M262.808,397.569A24.91,24.91,0,1,0,298.194,362.5c-.052-.054-.105-.107-.158-.16l-36.818-36.817a3.086,3.086,0,0,0-4.364,0l-1.543,1.543a3.462,3.462,0,0,1-4.9-4.889l.007-.006,1.544-1.544a3.088,3.088,0,0,0,0-4.364l-7.078-7.077"></path><path class="f506cc86-81ec-4224-8fe2-e38b78c462fe" d="M209.653,344.415l7.077,7.077a3.087,3.087,0,0,0,4.365,0l1.543-1.543a3.461,3.461,0,0,1,4.9,4.889l-.007.006-1.542,1.543a3.086,3.086,0,0,0,0,4.364l36.818,36.818"></path><path class="a8e5f15b-8d54-4601-bdf6-cc87220ee9f1" d="M232.009,263.95l-67.593,67.592a36.445,36.445,0,0,0-7.231-.75,37.037,37.037,0,1,0,37.036,37.037,36.306,36.306,0,0,0-.75-7.232l16.182-16.182"></path><path class="f506cc86-81ec-4224-8fe2-e38b78c462fe" d="M277.559,394.146l17.053-17.054"></path><line class="f506cc86-81ec-4224-8fe2-e38b78c462fe" x1="178.789" y1="346.221" x2="246.69" y2="278.32"></line><line class="f506cc86-81ec-4224-8fe2-e38b78c462fe" x1="246.69" y1="346.228" x2="277.554" y2="377.092"></line><line class="f506cc86-81ec-4224-8fe2-e38b78c462fe" x1="216.463" y1="337.606" x2="239.725" y2="314.343"></line><path class="a8e5f15b-8d54-4601-bdf6-cc87220ee9f1" d="M51.879,272.72a75.3,75.3,0,0,0,31.044,143.9H325.789A92.327,92.327,0,0,0,351.426,235.6"></path><path class="f506cc86-81ec-4224-8fe2-e38b78c462fe" d="M351.426,235.6A104,104,0,0,0,148.45,207.837,70.415,70.415,0,0,0,51.879,272.72"></path></svg>
                                                </div>
                                                <h2 class="vacancy-title" style="height: 75px"><span class="uc_style_adminslider_vacancy_hr_uc_items_attribute_title" style="color:#FFFFFF;">{{ __('content.Руководитель ИТ-проектов') }}</span></h2>
                                                <h3 class="vacancy-subtitle" style="text-align: left; height: 30px"><span class="uc_style_adminslider_vacancy_hr_uc_items_attribute_subtitle" style="color:#FFFFFF;">Санкт-Петербург</span></h3>
                                                <p class="vacancy-description" style="height: 144px;"><span class="uc_style_adminslider_vacancy_hr_uc_items_attribute_description" style="color:#FFFFFF;">Формулировать цели внутренних проектов, взаимодействуя с заказчиками и сотрудниками компании. Разрабатывать устав и бюджет проекта и защищать их перед управляющим комитетом проекта. Планировать работы...
                                                </span></p>
                                                <div class="button-wrapper"><button style="" id="work994_btn"><span class="uc_style_adminslider_vacancy_hr_uc_items_attribute_button" style="color:#FFFFFF;">{{ __('content.Подробнее о вакансии') }}</span></button></div>

                                            </div>

                                            <div class="swiper-slide  swiper-slide-prev" data-swiper-slide-index="3" style="width: 390px; margin-right: 40px;">
                                                <div class="vacancy-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" id="a10ee083-1e6c-45ed-b32d-2c603e83cff9" data-name="Layer 3" viewBox="0 0 452.3 481.92"><line x1="66.19" y1="316.22" x2="141.2" y2="280.76" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line><line x1="336.36" y1="166" x2="336.36" y2="163.45" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line><line x1="115.56" y1="166.43" x2="115.56" y2="163.88" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line><path d="M336.36,166l-91.87-40.79-7.81-11.93c-.84-6.56-.72-14.45-7.53-12.42A15.4,15.4,0,0,0,226,102.2" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><path d="M443.84,303.26l-9.64-72a31,31,0,0,0-15.82-23.08l-47.86-26.29,0-10.79" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><path d="M385.42,457.83l8.22-.82L367.4,360.37c-.28-1,18.33-44.58,18.33-44.58l.39-87.64,15.62,7.08a21.71,21.71,0,0,1,12.45,16.2l5,29.64" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><path d="M328.56,457.83l13.52-.63-27.89-96.4,24.58-41.32-13.35,28.87a28,28,0,0,0-.5,22.29l35.65,87.18h-8.64a8.21,8.21,0,0,0-8.21,8.47,8.44,8.44,0,0,0,8.55,8h32.81a8.44,8.44,0,0,0,8.55-8,8.21,8.21,0,0,0-8.21-8.47" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><path d="M234.19,75.22V34.73" style="fill:none;stroke:#ff006e;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><path d="M258.66,89.29l22-21.94" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><path d="M204.9,77.66l-22-21.93" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><line x1="385.73" y1="315.79" x2="310.72" y2="280.33" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line><line x1="225.98" y1="102.2" x2="225.98" y2="134.83" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line><circle cx="359.88" cy="139.01" r="33.75" style="fill:none;stroke:#ff006e;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></circle><line x1="386.02" y1="190.8" x2="386.12" y2="228.15" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line><path d="M234.19,19V13" style="fill:none;stroke:#ff006e;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><path d="M173.54,45.39l-3.78-4.09" style="fill:none;stroke:#ff006e;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><path d="M115.56,166.43l91.87-40.79,7.81-11.93c.84-6.55.72-14.45,7.53-12.42a16.22,16.22,0,0,1,3.17,1.34" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><path d="M8.07,303.69l9.65-72a31,31,0,0,1,15.82-23.08L81.4,182.28l0-10.79" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><path d="M66.5,458.26l-8.22-.82L84.52,360.8c.28-1-18.33-44.58-18.33-44.58l-.4-87.64-15.61,7.09a21.69,21.69,0,0,0-12.45,16.19l-5,29.64" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><path d="M123.36,458.26l-13.52-.63,27.89-96.39-24.58-41.33,13.35,28.88a28,28,0,0,1,.5,22.29L91.35,458.26H100a8.22,8.22,0,0,1,8.21,8.47,8.44,8.44,0,0,1-8.55,8H66.84a8.44,8.44,0,0,1-8.55-8,8.22,8.22,0,0,1,8.21-8.47" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><line x1="143.07" y1="191.84" x2="141.2" y2="280.76" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line><line x1="225.94" y1="135.26" x2="143.07" y2="191.84" style="fill:none;stroke:#ff006e;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line><circle cx="92.03" cy="139.44" r="33.75" style="fill:none;stroke:#ff006e;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></circle><line x1="65.89" y1="191.24" x2="65.79" y2="228.58" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line><line x1="308.84" y1="191.41" x2="310.72" y2="280.33" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line><line x1="225.98" y1="134.83" x2="308.84" y2="191.41" style="fill:none;stroke:#ff006e;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line><path d="M419.16,281.07a31,31,0,0,0,13,20.43l6.85,4.72a3.1,3.1,0,0,0,4.83-3" style="fill:none;stroke:#ff006e;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><path d="M32.76,281.5a31,31,0,0,1-13,20.44l-6.85,4.72a3.11,3.11,0,0,1-4.84-3" style="fill:none;stroke:#ff006e;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><path d="M310.72,280.33l-36.9,68.72a28,28,0,0,0-1.4,23.42l33.51,85.36H295.41a8.44,8.44,0,0,0-8.56,8,8.22,8.22,0,0,0,8.21,8.47h33.15a8.45,8.45,0,0,0,8.56-8,8.21,8.21,0,0,0-8.21-8.47" style="fill:none;stroke:#ff006e;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><path d="M141.2,280.76l36.9,68.72a27.92,27.92,0,0,1,1.39,23.42L146,458.26h10.52a8.45,8.45,0,0,1,8.56,8,8.21,8.21,0,0,1-8.21,8.47H123.71a8.45,8.45,0,0,1-8.56-8,8.22,8.22,0,0,1,8.21-8.47" style="fill:none;stroke:#ff006e;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path></svg>
                                                </div>
                                                <h2 class="vacancy-title" style="height: 75px"><span class="uc_style_adminslider_vacancy_hr_uc_items_attribute_title" style="color:#FFFFFF;">Presale Engineer/Presale Manager</span></h2>
                                                <h3 class="vacancy-subtitle" style="text-align: left; height: 30px"><span class="uc_style_adminslider_vacancy_hr_uc_items_attribute_subtitle" style="color:#FFFFFF;">Санкт-Петербург, Москва</span></h3>
                                                <p class="vacancy-description" style="height: 144px;"><span class="uc_style_adminslider_vacancy_hr_uc_items_attribute_description" style="color:#FFFFFF;">Выявлять потребности и боли клиента. Готовить техническое решение и оценивать его бюджет. Обосновывать преимущества выбранного решения с точки зрения бизнеса клиента. Консультировать клиента...
                                                </span></p>
                                                <div class="button-wrapper"><button style="" id="work995_btn"><span class="uc_style_adminslider_vacancy_hr_uc_items_attribute_button" style="color:#FFFFFF;">{{ __('content.Подробнее о вакансии') }}</span></button></div>

                                            </div>

                                            <div class="swiper-slide  swiper-slide-prev" data-swiper-slide-index="3" style="width: 390px; margin-right: 40px;">
                                                <div class="vacancy-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" id="bf041f12-40e5-436f-9ebf-42e6bfa6df15" data-name="Layer 1" viewBox="0 0 427.913 422.809"><defs><style>.a8e5f15b-8d54-4601-bdf6-cc87220ee9f1,.f506cc86-81ec-4224-8fe2-e38b78c462fe{fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px;}.f506cc86-81ec-4224-8fe2-e38b78c462fe{stroke:#fff;}.a8e5f15b-8d54-4601-bdf6-cc87220ee9f1{stroke:#ff006e;}</style></defs><path class="f506cc86-81ec-4224-8fe2-e38b78c462fe" d="M120.555,236.657l12.347,21.6a3.085,3.085,0,0,0,1.928,1.463l11.519,2.879,39.505,39.506"></path><path class="f506cc86-81ec-4224-8fe2-e38b78c462fe" d="M163.08,245.894,160.2,234.382a3.1,3.1,0,0,0-1.463-1.932l-21.606-12.345a3.085,3.085,0,0,0-3.7.5l-12.345,12.347a3.085,3.085,0,0,0-.529,3.709"></path><path class="f506cc86-81ec-4224-8fe2-e38b78c462fe" d="M202.586,285.4,163.08,245.894"></path><path class="f506cc86-81ec-4224-8fe2-e38b78c462fe" d="M169.09,350.808a3.087,3.087,0,0,0-2.646-1.5H147.926a3.084,3.084,0,0,0-2.645,1.5l-9.26,15.432a3.085,3.085,0,0,0,0,3.179l9.26,15.431a3.084,3.084,0,0,0,2.645,1.5h18.518a3.087,3.087,0,0,0,2.646-1.5l9.258-15.431a3.085,3.085,0,0,0,0-3.179Z"></path><path class="f506cc86-81ec-4224-8fe2-e38b78c462fe" d="M244.882,309.187l16.182-16.182a36.305,36.305,0,0,0,7.231.751,36.909,36.909,0,0,0,35.9-45.988,3.085,3.085,0,0,0-5.175-1.438l-19.213,19.2-15.243-5.08-5.084-15.24,19.213-19.216a3.086,3.086,0,0,0-1.448-5.179,36.922,36.922,0,0,0-45.987,35.9,36.3,36.3,0,0,0,.75,7.232"></path><path class="a8e5f15b-8d54-4601-bdf6-cc87220ee9f1" d="M262.808,397.569A24.91,24.91,0,1,0,298.194,362.5c-.052-.054-.105-.107-.158-.16l-36.818-36.817a3.086,3.086,0,0,0-4.364,0l-1.543,1.543a3.462,3.462,0,0,1-4.9-4.889l.007-.006,1.544-1.544a3.088,3.088,0,0,0,0-4.364l-7.078-7.077"></path><path class="f506cc86-81ec-4224-8fe2-e38b78c462fe" d="M209.653,344.415l7.077,7.077a3.087,3.087,0,0,0,4.365,0l1.543-1.543a3.461,3.461,0,0,1,4.9,4.889l-.007.006-1.542,1.543a3.086,3.086,0,0,0,0,4.364l36.818,36.818"></path><path class="a8e5f15b-8d54-4601-bdf6-cc87220ee9f1" d="M232.009,263.95l-67.593,67.592a36.445,36.445,0,0,0-7.231-.75,37.037,37.037,0,1,0,37.036,37.037,36.306,36.306,0,0,0-.75-7.232l16.182-16.182"></path><path class="f506cc86-81ec-4224-8fe2-e38b78c462fe" d="M277.559,394.146l17.053-17.054"></path><line class="f506cc86-81ec-4224-8fe2-e38b78c462fe" x1="178.789" y1="346.221" x2="246.69" y2="278.32"></line><line class="f506cc86-81ec-4224-8fe2-e38b78c462fe" x1="246.69" y1="346.228" x2="277.554" y2="377.092"></line><line class="f506cc86-81ec-4224-8fe2-e38b78c462fe" x1="216.463" y1="337.606" x2="239.725" y2="314.343"></line><path class="a8e5f15b-8d54-4601-bdf6-cc87220ee9f1" d="M51.879,272.72a75.3,75.3,0,0,0,31.044,143.9H325.789A92.327,92.327,0,0,0,351.426,235.6"></path><path class="f506cc86-81ec-4224-8fe2-e38b78c462fe" d="M351.426,235.6A104,104,0,0,0,148.45,207.837,70.415,70.415,0,0,0,51.879,272.72"></path></svg>
                                                </div>
                                                <h2 class="vacancy-title" style="height: 75px"><span class="uc_style_adminslider_vacancy_hr_uc_items_attribute_title" style="color:#FFFFFF;">Системный администратор</span></h2>
                                                <h3 class="vacancy-subtitle" style="text-align: left; height: 30px"><span class="uc_style_adminslider_vacancy_hr_uc_items_attribute_subtitle" style="color:#FFFFFF;">Москва</span></h3>
                                                <p class="vacancy-description" style="height: 144px;"><span class="uc_style_adminslider_vacancy_hr_uc_items_attribute_description" style="color:#FFFFFF;">Поддержка и конфигурация внутренней инфраструктуры на базе ОС Microsoft (Active Directory, DNS, DHCP, Wsus, GPO, DFS, etc.) и Linux. Поддержка офисных программ на базе Microsoft Office365...
                                                </span></p>
                                                <div class="button-wrapper"><button style="" id="work996_btn"><span class="uc_style_adminslider_vacancy_hr_uc_items_attribute_button" style="color:#FFFFFF;">{{ __('content.Подробнее о вакансии') }}</span></button></div>

                                            </div>

                                            <div class="swiper-slide  swiper-slide-prev" data-swiper-slide-index="3" style="width: 390px; margin-right: 40px;">
                                                <div class="vacancy-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" id="ea8ceb4e-a879-4896-9879-73c801490404" data-name="Layer 2" viewBox="0 0 427.91 422.81"><path d="M221.31,234.15l13.76,2.43,45.76,28.11" style="fill:none;stroke:#ff006e;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><path d="M340.52,281.12l10.8,10.66a5.08,5.08,0,0,0,7,.1l23.9-22.34" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><path d="M90.68,313.18l19.56,11-2.16,3.49a21.1,21.1,0,0,0,24.48,31.15,21.08,21.08,0,0,0,27.37,16.89,21.09,21.09,0,0,0,27.37,16.9,21.09,21.09,0,0,0,38.83,7.9l3.43-5.55,2.82,1.73A21.32,21.32,0,0,0,257,394.84a21.59,21.59,0,0,0,4.41-5.12,21,21,0,0,0,3.07-12.32,21,21,0,0,0,22.9-9.48,20.84,20.84,0,0,0,3.09-12.31,20.94,20.94,0,0,0,4.87.59,21.28,21.28,0,0,0,18-10.07,21,21,0,0,0,3.08-12.32,21.1,21.1,0,0,0,16-38.5L329,293.19l11.55-12.07" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><path d="M44.7,323.77l32.16,11.39a5.08,5.08,0,0,0,6.36-2.91l7.46-19.07" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><line x1="129.43" y1="214.15" x2="90.68" y2="313.18" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line><path d="M259.06,200.75l-2.64,2.33-55.19-4.75a5,5,0,0,0-2.52.43L155,218.68a2.74,2.74,0,0,0-.39-.09l-25.16-4.44,2-5.2a5,5,0,0,0-2.82-6.5L48.24,170.29" style="fill:none;stroke:#ff006e;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><path d="M375.31,68.76,250.9,185.36a5.07,5.07,0,0,0-.1,7.24l8.26,8.15" style="fill:none;stroke:#ff006e;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><path d="M329,293.19,295.29,272.5" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><line x1="259.06" y1="200.75" x2="340.52" y2="281.12" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line><path d="M142.75,226.71a21.11,21.11,0,0,0,25.16,32.47l29.43-13.41a5.08,5.08,0,0,0,2.5-6.66" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><path d="M229.56,394.92l7.65-12.39A21.81,21.81,0,0,0,239.78,366a20.78,20.78,0,0,0-21.7-15.87A21.72,21.72,0,0,0,218,340a20.8,20.8,0,0,0-21.69-15.88,21.39,21.39,0,0,0-9.66-23.16,20.93,20.93,0,0,0-12.08-2.85A21,21,0,0,0,136.24,282l-26,42.13" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></path><line x1="187.3" y1="392.57" x2="218.08" y2="350.11" style="fill:none;stroke:#ff006e;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line><line x1="159.93" y1="375.67" x2="196.34" y2="324.09" style="fill:none;stroke:#ff006e;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line><line x1="132.56" y1="358.78" x2="174.6" y2="298.08" style="fill:none;stroke:#ff006e;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line><line x1="316.45" y1="333.81" x2="275.27" y2="308.49" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line><line x1="290.48" y1="355.61" x2="253.2" y2="333.81" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line><line x1="264.49" y1="377.4" x2="242.43" y2="364.43" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line><line x1="178.74" y1="176.39" x2="138.03" y2="106.16" style="fill:none;stroke:#ff006e;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line><line x1="200.28" y1="172.6" x2="200.28" y2="78.51" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line><line x1="226.57" y1="172.22" x2="245.66" y2="104.68" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line><line x1="249.03" y1="94" x2="251.22" y2="85.4" style="fill:none;stroke:#ff006e;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"></line></svg>

                                                </div>
                                                <h2 class="vacancy-title" style="height: 75px"><span class="uc_style_adminslider_vacancy_hr_uc_items_attribute_title" style="color:#FFFFFF;">Финансовый аналитик</span></h2>
                                                <h3 class="vacancy-subtitle" style="text-align: left; height: 30px"><span class="uc_style_adminslider_vacancy_hr_uc_items_attribute_subtitle" style="color:#FFFFFF;">Москва</span></h3>
                                                <p class="vacancy-description" style="height: 144px;"><span class="uc_style_adminslider_vacancy_hr_uc_items_attribute_description" style="color:#FFFFFF;">Участие в ежемесячной подготовке управленческой отчетности для акционеров Компании (на базе МСФО). Сбор информации по отделам продаж для подготовки ежемесячных прогнозов по выручке. Ежемесячная...
                                                </span></p>
                                                <div class="button-wrapper"><button style="" id="work997_btn"><span class="uc_style_adminslider_vacancy_hr_uc_items_attribute_button" style="color:#FFFFFF;">{{ __('content.Подробнее о вакансии') }}</span></button></div>

                                            </div>
{{--                                            123--}}


{{--                                            <div class="swiper-slide  swiper-slide-prev" data-swiper-slide-index="3" style="width: 390px; margin-right: 40px;">--}}
{{--                                                <div class="vacancy-icon">--}}
{{--                                                    <svg xmlns="http://www.w3.org/2000/svg" id="bf041f12-40e5-436f-9ebf-42e6bfa6df15" data-name="Layer 1" viewBox="0 0 427.913 422.809"><defs><style>.a8e5f15b-8d54-4601-bdf6-cc87220ee9f1,.f506cc86-81ec-4224-8fe2-e38b78c462fe{fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px;}.f506cc86-81ec-4224-8fe2-e38b78c462fe{stroke:#fff;}.a8e5f15b-8d54-4601-bdf6-cc87220ee9f1{stroke:#ff006e;}</style></defs><path class="f506cc86-81ec-4224-8fe2-e38b78c462fe" d="M120.555,236.657l12.347,21.6a3.085,3.085,0,0,0,1.928,1.463l11.519,2.879,39.505,39.506"></path><path class="f506cc86-81ec-4224-8fe2-e38b78c462fe" d="M163.08,245.894,160.2,234.382a3.1,3.1,0,0,0-1.463-1.932l-21.606-12.345a3.085,3.085,0,0,0-3.7.5l-12.345,12.347a3.085,3.085,0,0,0-.529,3.709"></path><path class="f506cc86-81ec-4224-8fe2-e38b78c462fe" d="M202.586,285.4,163.08,245.894"></path><path class="f506cc86-81ec-4224-8fe2-e38b78c462fe" d="M169.09,350.808a3.087,3.087,0,0,0-2.646-1.5H147.926a3.084,3.084,0,0,0-2.645,1.5l-9.26,15.432a3.085,3.085,0,0,0,0,3.179l9.26,15.431a3.084,3.084,0,0,0,2.645,1.5h18.518a3.087,3.087,0,0,0,2.646-1.5l9.258-15.431a3.085,3.085,0,0,0,0-3.179Z"></path><path class="f506cc86-81ec-4224-8fe2-e38b78c462fe" d="M244.882,309.187l16.182-16.182a36.305,36.305,0,0,0,7.231.751,36.909,36.909,0,0,0,35.9-45.988,3.085,3.085,0,0,0-5.175-1.438l-19.213,19.2-15.243-5.08-5.084-15.24,19.213-19.216a3.086,3.086,0,0,0-1.448-5.179,36.922,36.922,0,0,0-45.987,35.9,36.3,36.3,0,0,0,.75,7.232"></path><path class="a8e5f15b-8d54-4601-bdf6-cc87220ee9f1" d="M262.808,397.569A24.91,24.91,0,1,0,298.194,362.5c-.052-.054-.105-.107-.158-.16l-36.818-36.817a3.086,3.086,0,0,0-4.364,0l-1.543,1.543a3.462,3.462,0,0,1-4.9-4.889l.007-.006,1.544-1.544a3.088,3.088,0,0,0,0-4.364l-7.078-7.077"></path><path class="f506cc86-81ec-4224-8fe2-e38b78c462fe" d="M209.653,344.415l7.077,7.077a3.087,3.087,0,0,0,4.365,0l1.543-1.543a3.461,3.461,0,0,1,4.9,4.889l-.007.006-1.542,1.543a3.086,3.086,0,0,0,0,4.364l36.818,36.818"></path><path class="a8e5f15b-8d54-4601-bdf6-cc87220ee9f1" d="M232.009,263.95l-67.593,67.592a36.445,36.445,0,0,0-7.231-.75,37.037,37.037,0,1,0,37.036,37.037,36.306,36.306,0,0,0-.75-7.232l16.182-16.182"></path><path class="f506cc86-81ec-4224-8fe2-e38b78c462fe" d="M277.559,394.146l17.053-17.054"></path><line class="f506cc86-81ec-4224-8fe2-e38b78c462fe" x1="178.789" y1="346.221" x2="246.69" y2="278.32"></line><line class="f506cc86-81ec-4224-8fe2-e38b78c462fe" x1="246.69" y1="346.228" x2="277.554" y2="377.092"></line><line class="f506cc86-81ec-4224-8fe2-e38b78c462fe" x1="216.463" y1="337.606" x2="239.725" y2="314.343"></line><path class="a8e5f15b-8d54-4601-bdf6-cc87220ee9f1" d="M51.879,272.72a75.3,75.3,0,0,0,31.044,143.9H325.789A92.327,92.327,0,0,0,351.426,235.6"></path><path class="f506cc86-81ec-4224-8fe2-e38b78c462fe" d="M351.426,235.6A104,104,0,0,0,148.45,207.837,70.415,70.415,0,0,0,51.879,272.72"></path></svg> </div>--}}
{{--                                                <h2 class="vacancy-title" style="height: 75px"><span class="uc_style_adminslider_vacancy_hr_uc_items_attribute_title" style="color:#FFFFFF;">{{ __('content.Сетевой инженер') }}</span></h2>--}}
{{--                                                <h3 class="vacancy-subtitle" style="text-align: left; height: 30px"><span class="uc_style_adminslider_vacancy_hr_uc_items_attribute_subtitle" style="color:#FFFFFF;">{{ __('content.Москва, Санкт-Петербург') }}</span></h3>--}}
{{--                                                <p class="vacancy-description" style="height: 144px;"><span class="uc_style_adminslider_vacancy_hr_uc_items_attribute_description" style="color:#FFFFFF;">{{ __('content.Поддержка IP сети ЦОД и заказчиков, активное участие в предпроектных разработках решений по части IP сети, имплементация и траблшутинг текущих сетевых сервисов, активное участие в проектах по развитию сети компании и сетевых сервисов...') }}--}}
{{--                                                </span></p>--}}
{{--                                                <div class="button-wrapper"><button style="" id="work1_btn"><span class="uc_style_adminslider_vacancy_hr_uc_items_attribute_button" style="color:#FFFFFF;">{{ __('content.Подробнее о вакансии') }}</span></button></div>--}}

{{--                                            </div>--}}

                                        </div>
                                       </div>
                                     </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <section class="hr-section hr-top-section hr-element hr-element-fbd438e hr-section-full_width hr-section-height-default hr-section-height-default" data-id="fbd438e" data-element_type="section">
                <div class="hr-container hr-column-gap-no">
                    <div class="hr-column hr-col-100 hr-top-column hr-element hr-element-28380f3" data-id="28380f3" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="hr-widget-wrap hr-element-populated">
                            <section class="hr-section hr-inner-section hr-element hr-element-13c2174 hr-section-boxed hr-section-height-default hr-section-height-default" data-id="13c2174" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="hr-container hr-column-gap-default">
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <section class="hr-section hr-top-section hr-element hr-element-4e30cb0 hr-section-full_width hr-section-height-default hr-section-height-default" data-id="4e30cb0" data-element_type="section">
                <div class="hr-container hr-column-gap-no">
                    <div class="hr-column hr-col-100 hr-top-column hr-element hr-element-b064e95" data-id="b064e95" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">


                            <div class="hr-element hr-element-61433b0 hr-widget hr-widget-ucaddon_adminslider_team" data-id="61433b0" data-element_type="widget" data-widget_type="ucaddon_adminslider_team.default">
                                <div class="hr-widget-container  ">


                                    <div class="swiper-container team swiper-container-initialized swiper-container-horizontal owl-carousel1 owl-carousel">


                                            <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="1">   <div data-hr-type="page" data-hr-id="5014" class="hr hr-5014" data-hr-settings="[]">
                                                    <div class="hr-section-wrap">
                                                        <section class="hr-section hr-top-section hr-element hr-element-5476d20 hr-section-boxed hr-section-height-default hr-section-height-default" data-id="5476d20" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                            <div class="hr-container hr-column-gap-no">
                                                                <div class="hr-column hr-col-50 hr-top-column hr-element hr-element-cee1ad4" data-id="cee1ad4" data-element_type="column">
                                                                    <div class="hr-widget-wrap hr-element-populated">
                                                                        <div class="hr-element hr-element-4fd463a hr-widget hr-widget-spacer" data-id="4fd463a" data-element_type="widget" data-widget_type="spacer.default">
                                                                            <div class="hr-widget-container">
                                                                                <div class="hr-spacer">
                                                                                    <div class="hr-spacer-inner"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="hr-column hr-col-50 hr-top-column hr-element hr-element-43ec798 hr_text_col" data-id="43ec798" data-element_type="column">
                                                                    <div class="hr-widget-wrap hr-element-populated blurbb2">
                                                                        <div class="hr-element hr-element-c41a7d9 hr-widget hr-widget-heading" data-id="c41a7d9" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="hr-widget-container">
                                                                                <h2 class="hr-heading-title hr-size-default">{{ __('content.Не даю облаку упасть') }}</h2>    </div>
                                                                        </div>
                                                                        <div class="hr-element hr-element-6436a9c hr-widget hr-widget-heading" data-id="6436a9c" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="hr-widget-container">
                                                                                <h3 class="hr-heading-title hr-size-default">{{ __('content.Артем Клавдиев') }}
                                                                                </h3>   </div>
                                                                        </div>
                                                                        <div class="hr-element hr-element-d4a948e hr-widget hr-widget-heading" data-id="d4a948e" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="hr-widget-container">
                                                                                <h3 class="hr-heading-title hr-size-default">{{ __('content.облачный инженер') }}
                                                                                </h3>   </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div>
                                                </div>
                                            </div>


{{--                                            testwoman--}}
                                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-next swiper-slide-duplicate-prev prof_slide" data-swiper-slide-index="0">    <div data-hr-type="page" data-hr-id="5005" class="hr hr-5005" data-hr-settings="[]">
                                                <div class="hr-section-wrap">
                                                    <section  class="hr-section hr-top-section hr-element hr-element-a843d67my11 hr-section-boxed hr-section-height-default hr-section-height-default" data-id="11a843d67" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                        <div class="hr-container hr-column-gap-no">
                                                            <div class="hr-column hr-col-50 hr-top-column hr-element hr-element-a25d6ee" data-id="a25d6ee" data-element_type="column">
                                                                <div class="hr-widget-wrap hr-element-populated">
                                                                    <div class="hr-element hr-element-bb21a16 hr-widget hr-widget-spacer" data-id="bb21a16" data-element_type="widget" data-widget_type="spacer.default">
                                                                        <div class="hr-widget-container">
                                                                            <div class="hr-spacer">
                                                                                <div class="hr-spacer-inner"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="hr-column hr-col-50 hr-top-column hr-element hr-element-69173ee hr_text_col" data-id="69173ee" data-element_type="column">
                                                                <div class="hr-widget-wrap hr-element-populated blurbb">
                                                                    <div class="hr-element hr-element-9952109 hr-widget hr-widget-heading" data-id="9952109" data-element_type="widget" data-widget_type="heading.default">
                                                                        <div class="hr-widget-container">
                                                                            <h2 class="hr-heading-title hr-size-default">{{ __('content.Защищаю компанию от рисков') }}</h2>    </div>
                                                                    </div>
                                                                    <div class="hr-element hr-element-6a37133 hr-widget hr-widget-heading" data-id="6a37133" data-element_type="widget" data-widget_type="heading.default">
                                                                        <div class="hr-widget-container">
                                                                            <h3 class="hr-heading-title hr-size-default ">{{ __('content.Ольга Ермакова') }}
                                                                            </h3>   </div>
                                                                    </div>
                                                                    <div class="hr-element hr-element-2f38f9b hr-widget hr-widget-heading" data-id="2f38f9b" data-element_type="widget" data-widget_type="heading.default">
                                                                        <div class="hr-widget-container">
                                                                            <h3 class="hr-heading-title hr-size-default">{{ __('content.старший юрисконсульт и специалист по комплаенсу') }}
                                                                            </h3>   </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
{{--                                            testwoman--}}


                                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-next swiper-slide-duplicate-prev prof_slide" data-swiper-slide-index="0">    <div data-hr-type="page" data-hr-id="5005" class="hr hr-5005" data-hr-settings="[]">
                                                    <div class="hr-section-wrap">
                                                        <section class="hr-section hr-top-section hr-element hr-element-a843d67 hr-section-boxed hr-section-height-default hr-section-height-default" data-id="a843d67" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                            <div class="hr-container hr-column-gap-no">
                                                                <div class="hr-column hr-col-50 hr-top-column hr-element hr-element-a25d6ee" data-id="a25d6ee" data-element_type="column">
                                                                    <div class="hr-widget-wrap hr-element-populated">
                                                                        <div class="hr-element hr-element-bb21a16 hr-widget hr-widget-spacer" data-id="bb21a16" data-element_type="widget" data-widget_type="spacer.default">
                                                                            <div class="hr-widget-container">
                                                                                <div class="hr-spacer">
                                                                                    <div class="hr-spacer-inner"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="hr-column hr-col-50 hr-top-column hr-element hr-element-69173ee hr_text_col" data-id="69173ee" data-element_type="column">
                                                                    <div class="hr-widget-wrap hr-element-populated blurbb3">
                                                                        <div class="hr-element hr-element-9952109 hr-widget hr-widget-heading" data-id="9952109" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="hr-widget-container">
                                                                                <h2 class="hr-heading-title hr-size-default">{{ __('content.Обеспечиваю бесперебойную подачу энергии') }}</h2>    </div>
                                                                        </div>
                                                                        <div class="hr-element hr-element-6a37133 hr-widget hr-widget-heading" data-id="6a37133" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="hr-widget-container">
                                                                                <h3 class="hr-heading-title hr-size-default">{{ __('content.Александр Рыжиков') }}
                                                                                </h3>   </div>
                                                                        </div>
                                                                        <div class="hr-element hr-element-2f38f9b hr-widget hr-widget-heading" data-id="2f38f9b" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="hr-widget-container">
                                                                                <h3 class="hr-heading-title hr-size-default">{{ __('content.старший инженер-электрик') }}
                                                                                </h3>   </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                                    <!-- end admin vacancy team -->    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="hr-section hr-top-section hr-element hr-element-a103993 hr-section-boxed hr-section-height-default hr-section-height-default" data-id="a103993" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="hr-container hr-column-gap-no">
                    <div class="hr-column hr-col-100 hr-top-column hr-element hr-element-64db968" data-id="64db968" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <section class="hr-section hr-inner-section hr-element hr-element-2a67b46 hr-section-boxed hr-section-height-default hr-section-height-default" data-id="2a67b46" data-element_type="section">
                                <div class="hr-container hr-column-gap-no">
                                    <div class="hr-column hr-col-100 hr-inner-column hr-element hr-element-9f58a9c" data-id="9f58a9c" data-element_type="column">
                                        <div class="hr-widget-wrap hr-element-populated">
                                            <div class="hr-element hr-element-70f76da hr-widget hr-widget-heading" data-id="70f76da" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="hr-widget-container">
                                                    <h3 class="hr-heading-title hr-size-default">{{ __('content.Ты студент') }}</h3>    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="hr-section hr-inner-section hr-element hr-element-c94a2f3 hr-section-boxed hr-section-height-default hr-section-height-default" data-id="c94a2f3" data-element_type="section">
                                <div class="hr-container hr-column-gap-no">
                                    <div class="hr-column hr-col-100 hr-inner-column hr-element hr-element-127fd6f" data-id="127fd6f" data-element_type="column">
                                        <div class="hr-widget-wrap hr-element-populated">
                                            <div class="hr-element hr-element-5d15810 hr-widget-divider--view-line hr-widget hr-widget-divider" data-id="5d15810" data-element_type="widget" data-widget_type="divider.default">
                                                <div class="hr-widget-container">
                                                    <div class="hr-divider">
      <span class="hr-divider-separator">
            </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hr-element hr-element-7cdb526 hr-absolute hr-widget-divider--view-line hr-widget hr-widget-divider" data-id="7cdb526" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="divider.default">
                                                <div class="hr-widget-container">
                                                    <div class="hr-divider">
      <span class="hr-divider-separator">
            </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="hr-element hr-element-bf3acb3 hr-widget hr-widget-heading" data-id="bf3acb3" data-element_type="widget" data-widget_type="heading.default">
                                <div class="hr-widget-container">
                                    <h3 class="hr-heading-title hr-size-default">{{ __('content.и тебе не терпится узнать, каково это – работать по твоей специальности?') }}<br>{{ __('content.Стажировка в admindatacenter даст тебе возможность:') }}
                                    </h3>   </div>
                            </div>
                            <section class="hr-section hr-inner-section hr-element hr-element-bf91649 hr-section-full_width hr-section-height-default hr-section-height-default" data-id="bf91649" data-element_type="section">
                                <div class="hr-container hr-column-gap-no">
                                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-1bd5169" data-id="1bd5169" data-element_type="column">
                                        <div class="hr-widget-wrap hr-element-populated">
                                            <div class="hr-element hr-element-a2c9c60 hr-widget hr-widget-heading" data-id="a2c9c60" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="hr-widget-container">
                                                    <h2 class="hr-heading-title hr-size-default">{{ __('content.Хочешь к нам на стажировку?') }}</h2>
                                                </div>

                                                <button class="new-stagir-btn" style="" id="stagirovka_btn"><span class="uc_style_adminslider_vacancy_hr_uc_items_attribute_button" style="color:#FFFFFF;">
                                                        {{ __('content.Да, хочу!') }}
                                                    </span>
                                                </button>
                                            </div>
                                            <!--<div class="hr-element hr-element-4ad3fbe hr-align-justify hr-widget hr-widget-button" data-id="4ad3fbe" data-element_type="widget" data-widget_type="button.default">
                                                <div class="hr-widget-container">
                                                    <div class="hr-button-wrapper">
                                                        <a href="javascript:void(0);" id="study_form" class="hr-button-link hr-button hr-size-sm" role="button">
            <span class="hr-button-content-wrapper">
            <span class="hr-button-text">Да, хочу!</span>
    </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>-->
                                            <div class="hr-element hr-element-f50f5a3 hr-widget hr-widget-spacer" data-id="f50f5a3" data-element_type="widget" data-widget_type="spacer.default">
                                                <div class="hr-widget-container">
                                                    <div class="hr-spacer">
                                                        <div class="hr-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-9f4621a" data-id="9f4621a" data-element_type="column">
                                        <div class="hr-widget-wrap hr-element-populated">
                                            <div class=" pafe-equal-height-desktop pafe-equal-height-tablet pafe-equal-height-mobile hr-element hr-element-1238d7a hr-widget hr-widget-pp-timeline" data-pafe-equal-height="pp-timeline-card-title" data-pafe-equal-height-widget-container="" data-id="1238d7a" data-element_type="widget" data-settings="{&quot;layout&quot;:&quot;vertical&quot;,&quot;card_arrow&quot;:&quot;yes&quot;}" data-widget_type="pp-timeline.default" style="height: 323.2px;">
                                                <div class="hr-widget-container">
                                                    <div class="pp-timeline-wrapper">

                                                        <div class="pp-timeline pp-timeline-vertical pp-timeline-left pp-timeline-tablet-left pp-timeline-mobile-left pp-timeline-arrows-middle" data-timeline-layout="vertical">
                                                            <div class="pp-timeline-connector-wrap">
                                                                <div class="pp-timeline-connector" style="top: 7.69995px; bottom: 40.2px;">
                                                                    <div class="pp-timeline-connector-inner" style="height: 0px;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="pp-timeline-items">
                                                                <div class="pp-timeline-item hr-repeater-item-bf467a5">
                                                                    <div class="pp-timeline-card-wrapper">
                                                                        <div class="pp-timeline-arrow"></div>
                                                                        <div class="pp-timeline-card">
                                                                            <div class="pp-timeline-card-title-wrap">
                                                                                <h2 class="pp-timeline-card-title">
                                                                                    {{ __('content.Резюме') }}                  </h2>
                                                                            </div>
                                                                            <div class="pp-timeline-card-content">
                                                                                <p>{{ __('content.Подготовить резюме.') }}</p>              </div>
                                                                        </div>

                                                                    </div>

                                                                    <div class="pp-timeline-marker-wrapper">

                                                                        <div class="pp-timeline-marker">
                                                                            1     </div>
                                                                    </div>
                                                                    <div class="pp-timeline-card-date-wrapper">
                                                                    </div>
                                                                </div>
                                                                <div class="pp-timeline-item hr-repeater-item-bf25ef6">
                                                                    <div class="pp-timeline-card-wrapper">
                                                                        <div class="pp-timeline-arrow"></div>
                                                                        <div class="pp-timeline-card">
                                                                            <div class="pp-timeline-card-title-wrap">
                                                                                <h2 class="pp-timeline-card-title">
                                                                                    {{ __('content.Встреча') }}                </h2>
                                                                            </div>
                                                                            <div class="pp-timeline-card-content">
                                                                                <p>{{ __('content.Прийти на ознакомительную встречу: дата, время и место согласовываются индивидуально.') }}</p>             </div>
                                                                        </div>

                                                                    </div>

                                                                    <div class="pp-timeline-marker-wrapper">

                                                                        <div class="pp-timeline-marker">
                                                                            2     </div>
                                                                    </div>
                                                                    <div class="pp-timeline-card-date-wrapper">
                                                                    </div>
                                                                </div>
                                                                <div class="pp-timeline-item hr-repeater-item-5fdbb09">
                                                                    <div class="pp-timeline-card-wrapper">
                                                                        <div class="pp-timeline-arrow"></div>
                                                                        <div class="pp-timeline-card">
                                                                            <div class="pp-timeline-card-title-wrap">
                                                                                <h2 class="pp-timeline-card-title">
                                                                                    {{ __('content.Эпичность') }}                 </h2>
                                                                            </div>
                                                                            <div class="pp-timeline-card-content">
                                                                                <p>{{ __('content.Быть готовым показать свои навыки на высшем уровне.') }}</p>              </div>
                                                                        </div>

                                                                    </div>

                                                                    <div class="pp-timeline-marker-wrapper">

                                                                        <div class="pp-timeline-marker">
                                                                            3     </div>
                                                                    </div>
                                                                    <div class="pp-timeline-card-date-wrapper">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hr-element hr-element-a0e4193 hr-widget-divider--view-line hr-widget hr-widget-divider" data-id="a0e4193" data-element_type="widget" data-widget_type="divider.default">
                                                <div class="hr-widget-container">
                                                    <div class="hr-divider">
      <span class="hr-divider-separator">
            </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <section class="hr-section hr-inner-section hr-element hr-element-2dd5c69 hr-section-content-middle list hr-section-boxed hr-section-height-default hr-section-height-default" data-id="2dd5c69" data-element_type="section">
                                                <div class="hr-container hr-column-gap-no">
                                                    <div class="hr-column hr-col-25 hr-inner-column hr-element hr-element-d966e0d" data-id="d966e0d" data-element_type="column">
                                                        <div class="hr-widget-wrap hr-element-populated">
                                                            <div class="hr-element hr-element-13e489c hr-view-framed hr-shape-square hr-widget hr-widget-icon" data-id="13e489c" data-element_type="widget" data-widget_type="icon.default">
                                                                <div class="hr-widget-container">
                                                                    <div class="hr-icon-wrapper">
                                                                        <div class="hr-icon">
                                                                            <i aria-hidden="true" class="far fa-star"></i>      </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="hr-column hr-col-25 hr-inner-column hr-element hr-element-484d410" data-id="484d410" data-element_type="column">
                                                        <div class="hr-widget-wrap hr-element-populated">
                                                            <div class="hr-element hr-element-2bb296e hr-widget hr-widget-heading" data-id="2bb296e" data-element_type="widget" data-widget_type="heading.default">
                                                                <div class="hr-widget-container">
                                                                    <h2 class="hr-heading-title hr-size-default">{{ __('content.Тип занятости') }}

                                                                    </h2>   </div>
                                                            </div>
                                                            <div class="hr-element hr-element-493c0e5 hr-widget hr-widget-text-editor" data-id="493c0e5" data-element_type="widget" data-widget_type="text-editor.default">
                                                                <div class="hr-widget-container">
                                                                    <p>{{ __('content.Стажировка, гибкий график.') }}</p>           </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="hr-column hr-col-25 hr-inner-column hr-element hr-element-3c91b00" data-id="3c91b00" data-element_type="column">
                                                        <div class="hr-widget-wrap hr-element-populated">
                                                            <div class="hr-element hr-element-d3d3770 hr-view-framed hr-shape-square hr-widget hr-widget-icon" data-id="d3d3770" data-element_type="widget" data-widget_type="icon.default">
                                                                <div class="hr-widget-container">
                                                                    <div class="hr-icon-wrapper">
                                                                        <div class="hr-icon">
                                                                            <i aria-hidden="true" class="far fa-star"></i>      </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="hr-column hr-col-25 hr-inner-column hr-element hr-element-986c149" data-id="986c149" data-element_type="column">
                                                        <div class="hr-widget-wrap hr-element-populated">
                                                            <div class="hr-element hr-element-1bcfd9e hr-widget hr-widget-heading" data-id="1bcfd9e" data-element_type="widget" data-widget_type="heading.default">
                                                                <div class="hr-widget-container">
                                                                    <h2 class="hr-heading-title hr-size-default">{{ __('content.Место работы') }}

                                                                    </h2>   </div>
                                                            </div>
                                                            <div class="hr-element hr-element-a570ef0 hr-widget hr-widget-text-editor" data-id="a570ef0" data-element_type="widget" data-widget_type="text-editor.default">
                                                                <div class="hr-widget-container">
                                                                    <p>{{ __('content.admindatacenter Москва | admindatacenter Санкт-Петербург') }}</p>            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <section class="hr-section hr-top-section hr-element hr-element-a7d43d5 hr-hidden-desktop hr-hidden-tablet hr-hidden-phone hr-section-boxed hr-section-height-default hr-section-height-default" data-id="a7d43d5" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_bottom&quot;:&quot;triangle-asymmetrical&quot;,&quot;shape_divider_bottom_negative&quot;:&quot;yes&quot;}">
                <div class="hr-shape hr-shape-bottom" data-negative="true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                        <path class="hr-shape-fill" d="M737.9,94.7L0,0v100h1000V0L737.9,94.7z"></path>
                    </svg>    </div>
                <div class="hr-container hr-column-gap-no">
                    <div class="hr-column hr-col-50 hr-top-column hr-element hr-element-b8df31f" data-id="b8df31f" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <section class="hr-section hr-inner-section hr-element hr-element-a1967ef hr-section-content-middle list hr-section-boxed hr-section-height-default hr-section-height-default" data-id="a1967ef" data-element_type="section">
                                <div class="hr-container hr-column-gap-no">
                                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-3af1612" data-id="3af1612" data-element_type="column">
                                        <div class="hr-widget-wrap hr-element-populated">
                                            <div class="hr-element hr-element-d629def hr-view-framed hr-shape-square hr-widget hr-widget-icon" data-id="d629def" data-element_type="widget" data-widget_type="icon.default">
                                                <div class="hr-widget-container">
                                                    <div class="hr-icon-wrapper">
                                                        <div class="hr-icon">
                                                            <i aria-hidden="true" class="far fa-star"></i>      </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-dd2e008" data-id="dd2e008" data-element_type="column">
                                        <div class="hr-widget-wrap hr-element-populated">
                                            <div class="hr-element hr-element-62b7517 hr-widget hr-widget-heading" data-id="62b7517" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="hr-widget-container">
                                                    <h2 class="hr-heading-title hr-size-default">{{ __('content.Тип занятости') }}

                                                    </h2>   </div>
                                            </div>
                                            <div class="hr-element hr-element-ecbc38c hr-widget hr-widget-text-editor" data-id="ecbc38c" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="hr-widget-container">
                                                    <p>{{ __('content.Стажировка, гибкий график.') }}</p>           </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="hr-column hr-col-50 hr-top-column hr-element hr-element-948741c" data-id="948741c" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <section class="hr-section hr-inner-section hr-element hr-element-7632d48 hr-section-content-middle list hr-section-boxed hr-section-height-default hr-section-height-default" data-id="7632d48" data-element_type="section">
                                <div class="hr-container hr-column-gap-no">
                                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-2111f8d" data-id="2111f8d" data-element_type="column">
                                        <div class="hr-widget-wrap">
                                        </div>
                                    </div>
                                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-3808159" data-id="3808159" data-element_type="column">
                                        <div class="hr-widget-wrap">
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <section class="hr-section hr-top-section hr-element hr-element-9849f19 hr-section-boxed hr-section-height-default hr-section-height-default" data-id="9849f19" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="hr-container hr-column-gap-no">
                    <div class="hr-column hr-col-100 hr-top-column hr-element hr-element-b9fec89" data-id="b9fec89" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <section class="hr-section hr-inner-section hr-element hr-element-da1ee0e hr-section-full_width hr-section-content-middle hr-section-height-default hr-section-height-default" data-id="da1ee0e" data-element_type="section">
                                <div class="hr-container hr-column-gap-no">
                                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-f7f720a" data-id="f7f720a" data-element_type="column">
                                        <div class="hr-widget-wrap hr-element-populated">
                                            <div class="hr-element hr-element-6dc7da9 hr-view-framed hr-shape-square hr-widget__width-auto hr-widget hr-widget-icon" data-id="6dc7da9" data-element_type="widget" data-widget_type="icon.default">
                                                <div class="hr-widget-container">
                                                    <div class="hr-icon-wrapper">
                                                        <div class="hr-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" id="a77e5165-9322-49a6-b6c0-4147b7333e7d" data-name="bb8ba096-a947-4010-a50a-ef54504f3f3c" viewBox="0 0 427.913 422.809"><path d="M260.214,88.712H226.979l-11.14-33.441a5.935,5.935,0,0,0-11.259,0L193.433,88.712H160.2A5.935,5.935,0,0,0,156,98.845l22.406,22.41-11.333,34.024A5.935,5.935,0,0,0,176,162.092l34.211-22.806,34.211,22.806a5.935,5.935,0,0,0,8.922-6.813L242,121.255l22.41-22.41a5.935,5.935,0,0,0-4.195-10.133Z" style="fill:none;stroke:#009bff;stroke-miterlimit:10;stroke-width:11px"></path><path d="M273.806,334.319V305.49a5.932,5.932,0,0,0-5.932-5.931H244.726a98.79,98.79,0,0,1-12.548-43.245h6.4a5.931,5.931,0,0,0,5.935-5.927V227.234A93.0291,93.0291,0,0,0,282.341,199.9c31.6-10.136,103.009-39.338,124.459-101.153,9.634-27.7,4.971-50.649-12.785-62.935-16.678-11.557-42.231-11.191-63.25-.383l4.242-18.191a5.932,5.932,0,0,0-5.765-7.278H91.194a5.9309,5.9309,0,0,0-5.782,7.278l4.222,18.18C68.608,24.6,43.062,24.224,26.388,35.8,8.645,48.1,3.982,71.044,13.6,98.744c21.46,61.812,92.862,91.017,124.458,101.15a93,93,0,0,0,37.83,27.34v23.145a5.935,5.935,0,0,0,5.934,5.935h6.4a98.8434,98.8434,0,0,1-12.548,43.245H152.559a5.935,5.935,0,0,0-5.935,5.935v28.825" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:11px"></path><path d="M317.765,79.581c10.96-6.583,5.158-3.066,6.175-3.678,15.532-9.34,33.8-12.318,41.877-6.287,7.121,5.3,4.91,17.051,1.814,25.974-10.279,29.61-38.619,48.567-61.215,59.438-1.3.627-11.045,4.321-12.305,4.9" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:11px"></path><path d="M126.537,160.77c-1.193-.544-11.091-5.045-12.323-5.636C91.584,144.272,63.1,125.292,52.788,95.59c-3.1-8.923-5.3-20.687,1.815-25.974,8.21-6.144,26.93-2.957,42.62,6.741.764.472,4.761,3.048,5.509,3.551" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:11px"></path><path d="M273.806,334.316H124.839a5.9391,5.9391,0,0,0-5.687,4.239l-7.582,66.95a5.937,5.937,0,0,0,5.687,7.631H303.415a5.9329,5.9329,0,0,0,5.687-7.631l-7.834-66.95a5.94,5.94,0,0,0-5.687-4.239Z" style="fill:none;stroke:#009bff;stroke-miterlimit:10;stroke-width:11px"></path><path d="M188.218,256.318h43.96" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:11px"></path><path d="M187.763,231.009a93.6444,93.6444,0,0,0,44.893,0" style="fill:none;stroke:#009bff;stroke-miterlimit:10;stroke-width:11px"></path><line x1="89.634" y1="35.415" x2="138.054" y2="199.894" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:11px"></line><line x1="330.765" y1="35.426" x2="282.341" y2="199.897" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:11px"></line><line x1="187.52" y1="299.253" x2="232.178" y2="299.253" style="fill:none;stroke:#009bff;stroke-miterlimit:10;stroke-width:11px"></line><line x1="138.054" y1="373.727" x2="282.341" y2="373.727" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:11px"></line></svg>      </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-f225118" data-id="f225118" data-element_type="column">
                                        <div class="hr-widget-wrap hr-element-populated">
                                            <div class="hr-element hr-element-4689e23 hr-widget hr-widget-heading" data-id="4689e23" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="hr-widget-container">
                                                    <h3 class="hr-heading-title hr-size-default">{{ __('content.Лучшим стажерам будет предоставлена возможность последующего трудоустройства в admindatacenter (при наличии вакантных мест). Если ты хочешь развиваться в компании-лидере высокотехнологичной  IT-сферы — приходи на стажировку в admindatacenter!') }}
                                                    </h3>   </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="hr-section hr-inner-section hr-element hr-element-ea1c47c hr-section-full_width hr-section-content-middle hr-hidden-desktop hr-hidden-tablet hr-hidden-phone hr-section-height-default hr-section-height-default" data-id="ea1c47c" data-element_type="section">
                                <div class="hr-container hr-column-gap-no">
                                    <div class="hr-column hr-col-100 hr-inner-column hr-element hr-element-d8fed35" data-id="d8fed35" data-element_type="column">
                                        <div class="hr-widget-wrap hr-element-populated">
                                            <div class="hr-element hr-element-b3c3b70 hr-widget-divider--view-line hr-widget hr-widget-divider" data-id="b3c3b70" data-element_type="widget" data-widget_type="divider.default">
                                                <div class="hr-widget-container">
                                                    <div class="hr-divider">
      <span class="hr-divider-separator">
            </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hr-element hr-element-f7c8033 hr-absolute hr-widget-divider--view-line hr-widget hr-widget-divider" data-id="f7c8033" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="divider.default">
                                                <div class="hr-widget-container">
                                                    <div class="hr-divider">
      <span class="hr-divider-separator">
            </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <section class="hr-section hr-top-section hr-element hr-element-62964c7 hr-section-boxed hr-section-height-default hr-section-height-default" data-id="62964c7" data-element_type="section">
                <div class="hr-container hr-column-gap-no">
                    <div class="hr-column hr-col-100 hr-top-column hr-element hr-element-d4cc43c" data-id="d4cc43c" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class="hr-element hr-element-db66083 hr-aspect-ratio-169 hr-widget hr-widget-video" data-id="db66083" data-element_type="widget" data-settings="{&quot;video_type&quot;:&quot;hosted&quot;,&quot;controls&quot;:&quot;yes&quot;,&quot;aspect_ratio&quot;:&quot;169&quot;}" data-widget_type="video.default">
                                <div class="hr-widget-container">
                                    <div class="e-hosted-video hr-wrapper hr-fit-aspect-ratio hr-open-inline">
                                        <video class="hr-video" src="/hr_/--FullHD-convert-video-online.mp4" controls="controls" controlslist="nodownload" poster="/hr_/images/Screenshot-05.jpg"></video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="hr-section hr-top-section hr-element hr-element-19f5e4b hr-section-boxed hr-section-height-default hr-section-height-default" data-id="19f5e4b" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="hr-container hr-column-gap-no">
                    <div class="hr-column hr-col-50 hr-top-column hr-element hr-element-0371ae6" data-id="0371ae6" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class="hr-element hr-element-391553e hr-widget-divider--view-line_icon hr-view-framed hr-widget-divider--element-align-right hr-widget__width-auto hr-widget hr-widget-divider" data-id="391553e" data-element_type="widget" data-widget_type="divider.default">
                                <div class="hr-widget-container">
                                    <div class="hr-divider">
      <span class="hr-divider-separator">
              <div class="hr-icon hr-divider__element">
          <i aria-hidden="true" class="far fa-star"></i></div>
            </span>
                                    </div>
                                </div>
                            </div>
                            <div class="hr-element hr-element-a352088 hr-widget__width-auto hr-widget hr-widget-uael-dual-color-heading" data-id="a352088" data-element_type="widget" data-widget_type="uael-dual-color-heading.default">
                                <div class="hr-widget-container">
                                    <div class="uael-module-content uael-dual-color-heading uael-heading-stack-none">
                                        <h3>
                                            <span class="uael-before-heading"><span class="hr-inline-editing uael-dual-heading-text uael-first-text" data-hr-setting-key="before_heading_text" data-hr-inline-editing-toolbar="basic"></span></span><span class="uael-adv-heading-stack"><span class="hr-inline-editing uael-dual-heading-text uael-highlight-text" data-hr-setting-key="second_heading_text" data-hr-inline-editing-toolbar="basic">FAQ</span></span>                          </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="hr-element hr-element-4255d9f hr-widget hr-widget-heading" data-id="4255d9f" data-element_type="widget" data-widget_type="heading.default">
                                <div class="hr-widget-container">
                                    <h3 class="hr-heading-title hr-size-default">{{ __('content.Остались вопросы?') }}</h3>   </div>
                            </div>
                            <div class="hr-element hr-element-021e8e2 hr-align-justify hr-widget hr-widget-button" data-id="021e8e2" data-element_type="widget" data-widget_type="button.default">
                                <div class="hr-widget-container">
                                    <div class="hr-button-wrapper">
                                        <a href="mailto:jobs@admindatacenter.com" class="hr-button-link hr-button hr-size-sm" role="button">
            <span class="hr-button-content-wrapper">
            <span class="hr-button-text">jobs@admindatacenter.com </span>
    </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hr-column hr-col-50 hr-top-column hr-element hr-element-6a89ee6" data-id="6a89ee6" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class="hr-element hr-element-a9bb9f3 hr-widget hr-widget-jet-accordion" data-id="a9bb9f3" data-element_type="widget" data-widget_type="jet-accordion.default">
                                <div class="hr-widget-container">
                                    <div class="jet-accordion" data-settings="{&quot;collapsible&quot;:true,&quot;ajaxTemplate&quot;:false}" role="tablist">
                                        <div class="jet-accordion__inner">
                                            <div class="jet-accordion__item jet-toggle jet-toggle-fade-effect ">
                                                <div id="jet-toggle-control-1771" class="jet-toggle__control hr-menu-anchor" data-toggle="1" role="tab" aria-controls="jet-toggle-content-1771" aria-expanded="false" data-template-id="3456">
                                                    <div class="jet-toggle__label-icon jet-toggle-icon-position-left"><span class="jet-toggle__icon icon-normal jet-tabs-icon"><i aria-hidden="true" class="fas fa-plus"></i></span><span class="jet-toggle__icon icon-active jet-tabs-icon"><i aria-hidden="true" class="fas fa-minus"></i></span></div><div class="jet-toggle__label-text">{{ __('content.Как устроиться на работу в admindatacenter?') }} </div>              </div>
                                                <div id="jet-toggle-content-1771" class="jet-toggle__content" data-toggle="1" role="tabpanel" aria-hidden="true" data-template-id="3456">
                                                    <div class="jet-toggle__content-inner">   <div data-hr-type="page" data-hr-id="3456" class="hr hr-3456" data-hr-settings="[]">
                                                            <div class="hr-section-wrap">
                                                                <section class="hr-section hr-top-section hr-element hr-element-6eba40e hr-section-boxed hr-section-height-default hr-section-height-default" data-id="6eba40e" data-element_type="section">
                                                                    <div class="hr-container hr-column-gap-no">
                                                                        <div class="hr-column hr-col-100 hr-top-column hr-element hr-element-91eadbb" data-id="91eadbb" data-element_type="column">
                                                                            <div class="hr-widget-wrap hr-element-populated">
                                                                                <section class="hr-section hr-inner-section hr-element hr-element-7303124 hr-section-boxed hr-section-height-default hr-section-height-default" data-id="7303124" data-element_type="section">
                                                                                    <div class="hr-container hr-column-gap-no">
                                                                                        <div class="hr-column hr-col-100 hr-inner-column hr-element hr-element-e2ea39a" data-id="e2ea39a" data-element_type="column">
                                                                                            <div class="hr-widget-wrap hr-element-populated">
                                                                                                <div class="hr-element hr-element-810fec2 hr-widget-divider--view-line hr-widget hr-widget-divider" data-id="810fec2" data-element_type="widget" data-widget_type="divider.default">
                                                                                                    <div class="hr-widget-container">
                                                                                                        <div class="hr-divider">
      <span class="hr-divider-separator">
            </span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="hr-element hr-element-060a04c hr-absolute hr-widget-divider--view-line hr-widget hr-widget-divider" data-id="060a04c" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="divider.default">
                                                                                                    <div class="hr-widget-container">
                                                                                                        <div class="hr-divider">
      <span class="hr-divider-separator">
            </span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </section>
                                                                                <div class="hr-element hr-element-63b7f2e red-icon hr-icon-list--layout-traditional hr-list-item-link-full_width hr-widget hr-widget-icon-list" data-id="63b7f2e" data-element_type="widget" data-widget_type="icon-list.default">
                                                                                    <div class="hr-widget-container">
                                                                                        <ul class="hr-icon-list-items">
                                                                                            <li class="hr-icon-list-item">
                      <span class="hr-icon-list-icon">
                          <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg></span>
                                                                                                <span class="hr-icon-list-text">{{ __('content.Ознакомиться с вакансиями на сайте.') }}</span>
                                                                                            </li>
                                                                                            <li class="hr-icon-list-item">
                      <span class="hr-icon-list-icon">
             <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg></span>
                                                                                                <span class="hr-icon-list-text">{{ __('content.Откликнуться на вакансию, отвечающую вашему опыту, знаниям и навыкам.') }}</span>
                                                                                            </li>
                                                                                            <li class="hr-icon-list-item">
                      <span class="hr-icon-list-icon">
             <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg></span>
                                                                                                <span class="hr-icon-list-text">{{ __('content.Специалист отдела персонала свяжется с вами, и вы обсудите дальнейшие шаги.') }}</span>
                                                                                            </li>
                                                                                            <li class="hr-icon-list-item">
                      <span class="hr-icon-list-icon">
             <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg></span>
                                                                                                <span class="hr-icon-list-text">{{ __('content.Успешно пройти собеседования и получить предложение о работе.') }}</span>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><div class="jet-accordion__item jet-toggle jet-toggle-fade-effect ">
                                                <div id="jet-toggle-control-1772" class="jet-toggle__control hr-menu-anchor" data-toggle="2" role="tab" aria-controls="jet-toggle-content-1772" aria-expanded="false" data-template-id="3463">
                                                    <div class="jet-toggle__label-icon jet-toggle-icon-position-left"><span class="jet-toggle__icon icon-normal jet-tabs-icon"><i aria-hidden="true" class="fas fa-plus"></i></span><span class="jet-toggle__icon icon-active jet-tabs-icon"><i aria-hidden="true" class="fas fa-minus"></i></span></div><div class="jet-toggle__label-text">{{ __('content.Как устроиться на стажировку в admindatacenter?') }} </div>              </div>
                                                <div id="jet-toggle-content-1772" class="jet-toggle__content" data-toggle="2" role="tabpanel" aria-hidden="true" data-template-id="3463">
                                                    <div class="jet-toggle__content-inner">   <div data-hr-type="page" data-hr-id="3463" class="hr hr-3463" data-hr-settings="[]">
                                                            <div class="hr-section-wrap">
                                                                <section class="hr-section hr-top-section hr-element hr-element-3779957 hr-section-boxed hr-section-height-default hr-section-height-default" data-id="3779957" data-element_type="section">
                                                                    <div class="hr-container hr-column-gap-no">
                                                                        <div class="hr-column hr-col-100 hr-top-column hr-element hr-element-64506d6" data-id="64506d6" data-element_type="column">
                                                                            <div class="hr-widget-wrap hr-element-populated">
                                                                                <section class="hr-section hr-inner-section hr-element hr-element-7ab8d3d hr-section-boxed hr-section-height-default hr-section-height-default" data-id="7ab8d3d" data-element_type="section">
                                                                                    <div class="hr-container hr-column-gap-no">
                                                                                        <div class="hr-column hr-col-100 hr-inner-column hr-element hr-element-7f8519b" data-id="7f8519b" data-element_type="column">
                                                                                            <div class="hr-widget-wrap hr-element-populated">
                                                                                                <div class="hr-element hr-element-b0029d6 hr-widget-divider--view-line hr-widget hr-widget-divider" data-id="b0029d6" data-element_type="widget" data-widget_type="divider.default">
                                                                                                    <div class="hr-widget-container">
                                                                                                        <div class="hr-divider">
      <span class="hr-divider-separator">
            </span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="hr-element hr-element-e27a085 hr-absolute hr-widget-divider--view-line  hr-widget-divider" data-id="e27a085" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="divider.default">
                                                                                                    <div class="hr-widget-container">
                                                                                                        <div class="hr-divider">
      <span class="hr-divider-separator">
            </span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </section>
                                                                                <div class="hr-element hr-element-385e8a4 red-icon hr-icon-list--layout-traditional hr-list-item-link-full_width  hr-widget-icon-list" data-id="385e8a4" data-element_type="widget" data-widget_type="icon-list.default">
                                                                                    <div class="hr-widget-container">
                                                                                        <ul class="hr-icon-list-items">
                                                                                            <li class="hr-icon-list-item">
                      <span class="hr-icon-list-icon">
              <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg></span>
                                                                                                <span class="hr-icon-list-text">{{ __('content.Нужно заполнить специальную форму «Стажировки» на нашем сайте.') }}</span>
                                                                                            </li>
                                                                                            <li class="hr-icon-list-item">
                      <span class="hr-icon-list-icon">
            <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg></span>
                                                                                                <span class="hr-icon-list-text">{{ __('content.Дождаться отклика от специалиста отдела персонала и обсудить дальнейшие шаги.') }}</span>
                                                                                            </li>
                                                                                            <li class="hr-icon-list-item">
                      <span class="hr-icon-list-icon">
             <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg></span>
                                                                                                <span class="hr-icon-list-text">{{ __('content.Дождаться отклика от специалиста отдела персонала и обсудить дальнейшие шаги.') }}</span>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><div class="jet-accordion__item jet-toggle jet-toggle-fade-effect ">
                                                <div id="jet-toggle-control-1773" class="jet-toggle__control hr-menu-anchor" data-toggle="3" role="tab" aria-controls="jet-toggle-content-1773" aria-expanded="false" data-template-id="3470">
                                                    <div class="jet-toggle__label-icon jet-toggle-icon-position-left"><span class="jet-toggle__icon icon-normal jet-tabs-icon"><i aria-hidden="true" class="fas fa-plus"></i></span><span class="jet-toggle__icon icon-active jet-tabs-icon"><i aria-hidden="true" class="fas fa-minus"></i></span></div><div class="jet-toggle__label-text">{{ __('content.Рассматривает ли admindatacenter кандидатов из регионов?') }}</div>              </div>
                                                <div id="jet-toggle-content-1773" class="jet-toggle__content" data-toggle="3" role="tabpanel" aria-hidden="true" data-template-id="3470">
                                                    <div class="jet-toggle__content-inner">   <div data-hr-type="page" data-hr-id="3470" class="hr hr-3470" data-hr-settings="[]">
                                                            <div class="hr-section-wrap">
                                                                <section class="hr-section hr-top-section hr-element hr-element-21239b0 hr-section-boxed hr-section-height-default hr-section-height-default" data-id="21239b0" data-element_type="section">
                                                                    <div class="hr-container hr-column-gap-no">
                                                                        <div class="hr-column hr-col-100 hr-top-column hr-element hr-element-2920fb9" data-id="2920fb9" data-element_type="column">
                                                                            <div class="hr-widget-wrap hr-element-populated">
                                                                                <section class="hr-section hr-inner-section hr-element hr-element-a333b26 hr-section-boxed hr-section-height-default hr-section-height-default" data-id="a333b26" data-element_type="section">
                                                                                    <div class="hr-container hr-column-gap-no">
                                                                                        <div class="hr-column hr-col-100 hr-inner-column hr-element hr-element-813306c" data-id="813306c" data-element_type="column">
                                                                                            <div class="hr-widget-wrap hr-element-populated">
                                                                                                <div class="hr-element hr-element-cc4173d hr-widget-divider--view-line hr-widget hr-widget-divider" data-id="cc4173d" data-element_type="widget" data-widget_type="divider.default">
                                                                                                    <div class="hr-widget-container">
                                                                                                        <div class="hr-divider">
      <span class="hr-divider-separator">
            </span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="hr-element hr-element-7605167 hr-absolute hr-widget-divider--view-line hr-widget hr-widget-divider" data-id="7605167" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="divider.default">
                                                                                                    <div class="hr-widget-container">
                                                                                                        <div class="hr-divider">
      <span class="hr-divider-separator">
            </span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </section>
                                                                                <div class="hr-element hr-element-fe5dbf1 red-icon hr-icon-list--layout-traditional hr-list-item-link-full_width  hr-widget-icon-list" data-id="fe5dbf1" data-element_type="widget" data-widget_type="icon-list.default">
                                                                                    <div class="hr-widget-container">
                                                                                        <ul class="hr-icon-list-items">
                                                                                            <li class="hr-icon-list-item">
                      <span class="hr-icon-list-icon">
             <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg></span>
                                                                                                <span class="hr-icon-list-text">{{ __('content.Да, рассматриваем. Для кандидатов из регионов предусмотрена программа релокации. С успешным кандидатом условия обсуждаются индивидуально.') }}</span>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

@foreach($vacancy as $key=>$vac)
    <div class="modal_work" id="work{{$key+1}}">
        <div class="modal_work_block">
            <div class="dialog-message dialog-lightbox-message">
                <div class="work_content">
                    <h2>{{$vac->name}}</h2>
                    <div class="hr-container hr-column-gap-no">
                        <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-94b3bcb" data-id="94b3bcb" data-element_type="column">
                            <div class="hr-widget-wrap hr-element-populated">
                                <div class="hr-element hr-element-3073736 hr-view-framed hr-shape-square hr-widget hr-widget-icon" data-id="3073736" data-element_type="widget" data-widget_type="icon.default">
                                    <div class="hr-widget-container">
                                        <div class="hr-icon-wrapper">
                                            <div class="hr-icon">
                                                <i aria-hidden="true" class="far fa-address-book"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-6c67e78" data-id="6c67e78" data-element_type="column">
                            <div class="hr-widget-wrap hr-element-populated">
                                <div class="hr-element hr-element-cd24cf7 hr-widget-divider--view-line_text hr-widget-divider--element-align-left hr-widget hr-widget-divider" data-id="cd24cf7" data-element_type="widget" data-widget_type="divider.default">
                                    <div class="hr-widget-container">
                                        <div class="hr-divider">
                                        <span class="hr-divider-separator">
                                            <span class="hr-divider__text hr-divider__element">Обязанности</span>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="work_prop_list">
                        {!! $vac->responsibility !!}
{{--                        <ul>--}}
{{--                            <li>--}}
{{--                            <span class="hr-icon-list-icon">--}}
{{--                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>--}}
{{--                            </span>--}}
{{--                                <span class="hr-icon-list-text">Поддержка IP сети ЦОД и заказчиков.</span>--}}
{{--                            </li>--}}

{{--                        </ul>--}}
                    </div>
                    <div class="hr-container hr-column-gap-no">
                        <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-94b3bcb" data-id="94b3bcb" data-element_type="column">
                            <div class="hr-widget-wrap hr-element-populated">
                                <div class="hr-element hr-element-3073736 hr-view-framed hr-shape-square hr-widget hr-widget-icon" data-id="3073736" data-element_type="widget" data-widget_type="icon.default">
                                    <div class="hr-widget-container">
                                        <div class="hr-icon-wrapper">
                                            <div class="hr-icon">
                                                <i aria-hidden="true" class="far fa-address-book"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-6c67e78" data-id="6c67e78" data-element_type="column">
                            <div class="hr-widget-wrap hr-element-populated">
                                <div class="hr-element hr-element-cd24cf7 hr-widget-divider--view-line_text hr-widget-divider--element-align-left hr-widget hr-widget-divider" data-id="cd24cf7" data-element_type="widget" data-widget_type="divider.default">
                                    <div class="hr-widget-container">
                                        <div class="hr-divider">
                                        <span class="hr-divider-separator">
                                            <span class="hr-divider__text hr-divider__element">Требования</span>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="work_prop_list">
                        {!! $vac->requirement !!}
{{--                        <ul>--}}
{{--                            <li>--}}
{{--                            <span class="hr-icon-list-icon">--}}
{{--                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>--}}
{{--                            </span>--}}
{{--                                <span class="hr-icon-list-text">Высшее техническое образование.</span>--}}
{{--                            </li>--}}
{{--                            --}}
{{--                        </ul>--}}
                    </div>

                    <div class="hr-container hr-column-gap-no">
                        <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-94b3bcb" data-id="94b3bcb" data-element_type="column">
                            <div class="hr-widget-wrap hr-element-populated">
                                <div class="hr-element hr-element-3073736 hr-view-framed hr-shape-square hr-widget hr-widget-icon" data-id="3073736" data-element_type="widget" data-widget_type="icon.default">
                                    <div class="hr-widget-container">
                                        <div class="hr-icon-wrapper">
                                            <div class="hr-icon">
                                                <i aria-hidden="true" class="far fa-address-book"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-6c67e78" data-id="6c67e78" data-element_type="column">
                            <div class="hr-widget-wrap hr-element-populated">
                                <div class="hr-element hr-element-cd24cf7 hr-widget-divider--view-line_text hr-widget-divider--element-align-left hr-widget hr-widget-divider" data-id="cd24cf7" data-element_type="widget" data-widget_type="divider.default">
                                    <div class="hr-widget-container">
                                        <div class="hr-divider">
                                        <span class="hr-divider-separator">
                                            <span class="hr-divider__text hr-divider__element">Условия</span>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="work_prop_list">
                        {!! $vac->conditions !!}
{{--                        <ul>--}}
{{--                            <li>--}}
{{--                            <span class="hr-icon-list-icon">--}}
{{--                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>--}}
{{--                            </span>--}}
{{--                                <span class="hr-icon-list-text">Опыт работы с VMware vCloud Director, Veeam B&R, CommVault Simpana.</span>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
                    </div>

                    <div class="new-pop-form-block">
                        <div class="new-semi-form-bloock">
                            <div class="first-semi-section">
                                <div class="first-section-input">
                                    <input type="text" class="mf-input " id="mf-input-text-4d0c6c1" name="mf-text" placeholder="Имя " aria-invalid="false">
                                </div>
                            </div>
                            <div class="second-semi-section">
                                <div class="second-section-input">
                                    <input type="tel" class="mf-input " id="mf-input-telephone-66047ac" name="mf-telephone" placeholder="Телефон " aria-invalid="false">
                                </div>
                            </div>
                            <div class="third-semi-section">
                                <div class="third-section-input">
                                    <input type="email" class="mf-input " id="mf-input-email-78a26fb" name="mf-email" placeholder="Email " aria-invalid="false" value="">
                                </div>
                            </div>
                            <div class="fourth-semi-section">
                                <div class="fourth-section-input">
                                    {{--                                <input type="file" class="mf-input mf-input-file-upload " id="mf-input-file-upload-39affcc" name="mf-file-upload" accept=".jpg, .jpeg, .gif, .png, .pdf, .doc, .docx, .zip" aria-invalid="false">--}}
                                    <input type="file" class="mf-input mf-input-file-upload " id="mf-input-file-upload-39affcc" name="mf-file-upload" accept=".pdf" aria-invalid="false">
                                    <label><span>Резюме (PDF)</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="new-second-semi-form-block">
                            <div class="new-container-form-b">
                                <div class="left-new-cont-b">
                                    <label>
                                        <input type="checkbox" class="mf-input mf-checkbox-input " name="mf-checkbox" data-checked="" aria-invalid="false" value="value-1">
                                        <span>

                                    </span>
                                    </label>
                                    <p>Предоставляя свои персональные данные, Вы соглашаетесь на их обработку с соответствии с <span style="color: rgb(255, 0, 119);"><a href="https://ru.admindatacenter.com/upload/Privacy_policy.pdf" target="_blank" rel="noopener" style="color: rgb(255, 0, 119);">Политикой обработки персональных данных ООО «Связь ВСД»</a>.</span> Пожалуйста, внимательно ознакомьтесь с документом, доступным по ссылке, перед направлением своих персональных данных компании</p>

                                </div>
                                <div class="right-new-cont-b">
                                    <div class="right-btn-semi-section">
                                        <button type="submit" class="metform-btn metform-submit-btn " id=""><span>Отправить </span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="dialog-close-button dialog-lightbox-close-button"><i class="fas fa-times"></i></div>
        </div>
    </div>
@endforeach
<div class="modal_work" id="work99799">
    <div class="modal_work_block">
        <div class="dialog-message dialog-lightbox-message">
            <div class="work_content">
                <h2>Сетевой инженер (Москва, Санкт-Петербург)</h2>
                <div class="hr-container hr-column-gap-no">
                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-94b3bcb" data-id="94b3bcb" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class="hr-element hr-element-3073736 hr-view-framed hr-shape-square hr-widget hr-widget-icon" data-id="3073736" data-element_type="widget" data-widget_type="icon.default">
                                <div class="hr-widget-container">
                                    <div class="hr-icon-wrapper">
                                        <div class="hr-icon">
                                            <i aria-hidden="true" class="far fa-address-book"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-6c67e78" data-id="6c67e78" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class="hr-element hr-element-cd24cf7 hr-widget-divider--view-line_text hr-widget-divider--element-align-left hr-widget hr-widget-divider" data-id="cd24cf7" data-element_type="widget" data-widget_type="divider.default">
                                <div class="hr-widget-container">
                                    <div class="hr-divider">
                                        <span class="hr-divider-separator">
                                            <span class="hr-divider__text hr-divider__element">Обязанности</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="work_prop_list">
                    <ul>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Поддержка IP сети ЦОД и заказчиков.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Активное участие в предпроектных разработках решений по части IP сети.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Имплементация и траблшутинг текущих сетевых сервисов.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Активное участие в проектах по развитию сети компании и сетевых сервисов.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Разработка и внедрение новых продуктов компании по услугам передачи данных и информационной безопасности.</span>
                        </li>
                    </ul>
                </div>
                <div class="hr-container hr-column-gap-no">
                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-94b3bcb" data-id="94b3bcb" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class="hr-element hr-element-3073736 hr-view-framed hr-shape-square hr-widget hr-widget-icon" data-id="3073736" data-element_type="widget" data-widget_type="icon.default">
                                <div class="hr-widget-container">
                                    <div class="hr-icon-wrapper">
                                        <div class="hr-icon">
                                            <i aria-hidden="true" class="far fa-address-book"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-6c67e78" data-id="6c67e78" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class="hr-element hr-element-cd24cf7 hr-widget-divider--view-line_text hr-widget-divider--element-align-left hr-widget hr-widget-divider" data-id="cd24cf7" data-element_type="widget" data-widget_type="divider.default">
                                <div class="hr-widget-container">
                                    <div class="hr-divider">
                                        <span class="hr-divider-separator">
                                            <span class="hr-divider__text hr-divider__element">Требования</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="work_prop_list">
                    <ul>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Высшее техническое образование.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Опыт администрирования IP сетей (Cisco и Juniper) на уровне CCNP / JNCIS.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Понимание возможностей и принципов функционирования средств обеспечения ИБ основных производителей в рамках подсистем; межсетевое экранирование, предотвращение вторжений, антивирусная защита, контентная фильтрация, криптографическая защита, мониторинг, контроль доступа, защита мобильных устройств и т.д.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Опыт участия в проектах по построению систем информационной безопасности и выполнению требований ФЗ-152, ISO 27001 будет дополнительным преимуществом.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Знание английского на уровне Intermediate.</span>
                        </li>
                    </ul>
                </div>

                <div class="hr-container hr-column-gap-no">
                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-94b3bcb" data-id="94b3bcb" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class="hr-element hr-element-3073736 hr-view-framed hr-shape-square hr-widget hr-widget-icon" data-id="3073736" data-element_type="widget" data-widget_type="icon.default">
                                <div class="hr-widget-container">
                                    <div class="hr-icon-wrapper">
                                        <div class="hr-icon">
                                            <i aria-hidden="true" class="far fa-address-book"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-6c67e78" data-id="6c67e78" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class="hr-element hr-element-cd24cf7 hr-widget-divider--view-line_text hr-widget-divider--element-align-left hr-widget hr-widget-divider" data-id="cd24cf7" data-element_type="widget" data-widget_type="divider.default">
                                <div class="hr-widget-container">
                                    <div class="hr-divider">
                                        <span class="hr-divider-separator">
                                            <span class="hr-divider__text hr-divider__element">Условия</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="work_prop_list">
                    <ul>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Опыт работы с VMware vCloud Director, Veeam B&R, CommVault Simpana.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Наличие сертификатов VCP. CCNA, VMCE, Commvault Certified Professional - будут преимуществом.</span>
                        </li>

                    </ul>
                </div>

                <div class="new-pop-form-block">
                    <div class="new-semi-form-bloock">
                        <div class="first-semi-section">
                            <div class="first-section-input">
                                <input type="text" class="mf-input " id="mf-input-text-4d0c6c1" name="mf-text" placeholder="Имя " aria-invalid="false">
                            </div>
                        </div>
                        <div class="second-semi-section">
                            <div class="second-section-input">
                                <input type="tel" class="mf-input " id="mf-input-telephone-66047ac" name="mf-telephone" placeholder="Телефон " aria-invalid="false">
                            </div>
                        </div>
                        <div class="third-semi-section">
                            <div class="third-section-input">
                                <input type="email" class="mf-input " id="mf-input-email-78a26fb" name="mf-email" placeholder="Email " aria-invalid="false" value="">
                            </div>
                        </div>
                        <div class="fourth-semi-section">
                            <div class="fourth-section-input">
{{--                                <input type="file" class="mf-input mf-input-file-upload " id="mf-input-file-upload-39affcc" name="mf-file-upload" accept=".jpg, .jpeg, .gif, .png, .pdf, .doc, .docx, .zip" aria-invalid="false">--}}
                                <input type="file" class="mf-input mf-input-file-upload " id="mf-input-file-upload-39affcc" name="mf-file-upload" accept=".pdf" aria-invalid="false">
                                <label><span>Резюме (PDF)</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="new-second-semi-form-block">
                        <div class="new-container-form-b">
                            <div class="left-new-cont-b">
                                <label>
                                    <input type="checkbox" class="mf-input mf-checkbox-input " name="mf-checkbox" data-checked="" aria-invalid="false" value="value-1">
                                    <span>

                                    </span>
                                </label>
                                <p>Предоставляя свои персональные данные, Вы соглашаетесь на их обработку с соответствии с <span style="color: rgb(255, 0, 119);"><a href="https://ru.admindatacenter.com/upload/Privacy_policy.pdf" target="_blank" rel="noopener" style="color: rgb(255, 0, 119);">Политикой обработки персональных данных ООО «Связь ВСД»</a>.</span> Пожалуйста, внимательно ознакомьтесь с документом, доступным по ссылке, перед направлением своих персональных данных компании</p>

                            </div>
                            <div class="right-new-cont-b">
                                <div class="right-btn-semi-section">
                                    <button type="submit" class="metform-btn metform-submit-btn " id=""><span>Отправить </span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="dialog-close-button dialog-lightbox-close-button"><i class="fas fa-times"></i></div>
    </div>
</div>
<div class="modal_work" id="work99899999">
    <div class="modal_work_block">
        <div class="dialog-message dialog-lightbox-message">
            <div class="work_content">
                <h2>Digital Marketing Manager (Москва, Санкт-Петербург)</h2>
                <div class="hr-container hr-column-gap-no">
                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-94b3bcb" data-id="94b3bcb" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class="hr-element hr-element-3073736 hr-view-framed hr-shape-square hr-widget hr-widget-icon" data-id="3073736" data-element_type="widget" data-widget_type="icon.default">
                                <div class="hr-widget-container">
                                    <div class="hr-icon-wrapper">
                                        <div class="hr-icon">
                                            <i aria-hidden="true" class="far fa-address-book"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-6c67e78" data-id="6c67e78" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class="hr-element hr-element-cd24cf7 hr-widget-divider--view-line_text hr-widget-divider--element-align-left hr-widget hr-widget-divider" data-id="cd24cf7" data-element_type="widget" data-widget_type="divider.default">
                                <div class="hr-widget-container">
                                    <div class="hr-divider">
                                        <span class="hr-divider-separator">
                                            <span class="hr-divider__text hr-divider__element">Обязанности</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="work_prop_list">
                    <ul>
                        <p>Реклама и продвижение в digital-каналах:</p>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Участие в создании эффективных рекламных воронок: генерация трафика и входящих заявок во всех онлайн каналах: РСЯ, КМС, Поиск.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Плотное взаимодействие с подрядчиками по запуску, ведению РК.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Постановка задач подрядчикам, отвечающим за продвижение в digital- каналах (контроль сроков и результатов.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Предложения по улучшению и оптимизации РК (анализ и корректировка текстов).</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Поисковая оптимизация (SEO, SEM).</span>
                        </li>
                    </ul>
                    <ul>
                        <p>SMM:</p>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Развитие бренда в соцсетях: ведение страницы компании в Facebook & Instagram.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Подготовка и платное продвижение постов по рубрикам: поиск инфоповодов, подготовка и редактура контента, взаимодействие с PR-агентством по сбору контента.</span>
                        </li>
                    </ul>
                    <ul>
                        <p>Аналитика:</p>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">WEB-аналитика: Ведение отчетности на всех этапах рекламного online-продвижения, работа с системами аналитики (Google Analytics и Яндекс Метрика: Вордстат, Keywords Planner) настройка, анализ эффективности каналов продвижения, работа с данными).</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Анализ входящих лидов с рекламных кампаний по digital-каналам (Amo CRM).</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Настройка и понимание основ сквозной аналитики (Roistat).</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Изучение поведения потребителей на основе метрик.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Подготовка ежемесячной отчетности отдела маркетинга.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Отслеживание активности конкурентов в соцсетях и анализ РК конкурентов.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Знание основ маркетинга, форматов рекламных объявлений, терминов и метрик интернет-рекламы (ROI, CTR, CPA, CPI, LTV и т.д.).</span>
                        </li>
                    </ul>
                </div>
                <div class="hr-container hr-column-gap-no">
                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-94b3bcb" data-id="94b3bcb" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class="hr-element hr-element-3073736 hr-view-framed hr-shape-square hr-widget hr-widget-icon" data-id="3073736" data-element_type="widget" data-widget_type="icon.default">
                                <div class="hr-widget-container">
                                    <div class="hr-icon-wrapper">
                                        <div class="hr-icon">
                                            <i aria-hidden="true" class="far fa-address-book"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-6c67e78" data-id="6c67e78" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class="hr-element hr-element-cd24cf7 hr-widget-divider--view-line_text hr-widget-divider--element-align-left hr-widget hr-widget-divider" data-id="cd24cf7" data-element_type="widget" data-widget_type="divider.default">
                                <div class="hr-widget-container">
                                    <div class="hr-divider">
                                        <span class="hr-divider-separator">
                                            <span class="hr-divider__text hr-divider__element">Требования</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="work_prop_list">
                    <ul>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Навыки проектного менеджмента: умение ставить задачи агентствам и контролировать результат.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Умение анализировать работу сайта по показателям и предлагать идеи по улучшениям / доработкам.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Внимательность и аккуратность при выполнении задач, высокий уровень самоорганизации и ответственности.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Понимание digital-трендов, креативность, нестандартное мышление.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Умение работать в рамках дедлайнов.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Высокий уровень владения Power Point, пакетом MS Office.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Умение работать в команде и в режиме многозадачности.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Высокая скорость работы, стрессоустойчивость, аккуратность, усидчивость, грамотность, внимание к деталям.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Вовлеченность, продуктивность, умение генерить идеи.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Профессиональная зрелость.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text"><b>Опыт работы в B2B компаниях ИТ отрасли – ваше преимущество.</b></span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Английский язык - уровень Upper intermediate.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Структурированность, системность.</span>
                        </li>
                    </ul>
                </div>

                <div class="hr-container hr-column-gap-no">
                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-94b3bcb" data-id="94b3bcb" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class="hr-element hr-element-3073736 hr-view-framed hr-shape-square hr-widget hr-widget-icon" data-id="3073736" data-element_type="widget" data-widget_type="icon.default">
                                <div class="hr-widget-container">
                                    <div class="hr-icon-wrapper">
                                        <div class="hr-icon">
                                            <i aria-hidden="true" class="far fa-address-book"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-6c67e78" data-id="6c67e78" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class="hr-element hr-element-cd24cf7 hr-widget-divider--view-line_text hr-widget-divider--element-align-left hr-widget hr-widget-divider" data-id="cd24cf7" data-element_type="widget" data-widget_type="divider.default">
                                <div class="hr-widget-container">
                                    <div class="hr-divider">
                                        <span class="hr-divider-separator">
                                            <span class="hr-divider__text hr-divider__element">Условия</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="work_prop_list">
                    <ul>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Опыт работы с VMware vCloud Director, Veeam B&R, CommVault Simpana.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Наличие сертификатов VCP. CCNA, VMCE, Commvault Certified Professional - будут преимуществом.</span>
                        </li>

                    </ul>
                </div>

                <div class="new-pop-form-block">
                    <div class="new-semi-form-bloock">
                        <div class="first-semi-section">
                            <div class="first-section-input">
                                <input type="text" class="mf-input " id="mf-input-text-4d0c6c1" name="mf-text" placeholder="Имя " aria-invalid="false">
                            </div>
                        </div>
                        <div class="second-semi-section">
                            <div class="second-section-input">
                                <input type="tel" class="mf-input " id="mf-input-telephone-66047ac" name="mf-telephone" placeholder="Телефон " aria-invalid="false">
                            </div>
                        </div>
                        <div class="third-semi-section">
                            <div class="third-section-input">
                                <input type="email" class="mf-input " id="mf-input-email-78a26fb" name="mf-email" placeholder="Email " aria-invalid="false" value="">
                            </div>
                        </div>
                        <div class="fourth-semi-section">
                            <div class="fourth-section-input">
                                <input type="file" class="mf-input mf-input-file-upload " id="mf-input-file-upload-39affcc" name="mf-file-upload" accept=".jpg, .jpeg, .gif, .png, .pdf, .doc, .docx, .zip" aria-invalid="false">
                                <label><span>Резюме (PDF)</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="new-second-semi-form-block">
                        <div class="new-container-form-b">
                            <div class="left-new-cont-b">
                                <label>
                                    <input type="checkbox" class="mf-input mf-checkbox-input " name="mf-checkbox" data-checked="" aria-invalid="false" value="value-1">
                                    <span>

                                    </span>
                                </label>
                                <p>Предоставляя свои персональные данные, Вы соглашаетесь на их обработку с соответствии с <span style="color: rgb(255, 0, 119);"><a href="https://ru.admindatacenter.com/upload/Privacy_policy.pdf" target="_blank" rel="noopener" style="color: rgb(255, 0, 119);">Политикой обработки персональных данных ООО «Связь ВСД»</a>.</span> Пожалуйста, внимательно ознакомьтесь с документом, доступным по ссылке, перед направлением своих персональных данных компании</p>

                            </div>
                            <div class="right-new-cont-b">
                                <div class="right-btn-semi-section">
                                    <button type="submit" class="metform-btn metform-submit-btn " id=""><span>Отправить </span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="dialog-close-button dialog-lightbox-close-button"><i class="fas fa-times"></i></div>
    </div>
</div>
<div class="modal_work" id="work999999993">
    <div class="modal_work_block">
        <div class="dialog-message dialog-lightbox-message">
            <div class="work_content">
                <h2>Presale Менеджер г. Санкт-Петербург</h2>
                <div class="hr-container hr-column-gap-no">
                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-94b3bcb" data-id="94b3bcb" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class="hr-element hr-element-3073736 hr-view-framed hr-shape-square hr-widget hr-widget-icon" data-id="3073736" data-element_type="widget" data-widget_type="icon.default">
                                <div class="hr-widget-container">
                                    <div class="hr-icon-wrapper">
                                        <div class="hr-icon">
                                            <i aria-hidden="true" class="far fa-address-book"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-6c67e78" data-id="6c67e78" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class="hr-element hr-element-cd24cf7 hr-widget-divider--view-line_text hr-widget-divider--element-align-left hr-widget hr-widget-divider" data-id="cd24cf7" data-element_type="widget" data-widget_type="divider.default">
                                <div class="hr-widget-container">
                                    <div class="hr-divider">
                                        <span class="hr-divider-separator">
                                            <span class="hr-divider__text hr-divider__element">Обязанности</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="work_prop_list">
                    <ul>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Техническое консультирование отдела продаж и клиентов по предоставляемым услугам.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Анализ технического задания, требований заказчика к инфраструктуре и услугам.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Подготовка технико-коммерческих предложений.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Расчёт стоимости услуг.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Взаимодействие с профильными подразделениями компании и подрядчиками в рамках подготовки ТКП.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Ведение проектов по организации услуг для клиентов компании – облачные сервисы (IaaS, PaaS, SaaS и др.), телеком сервисы, услуги ЦОД.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Ведение контрактной документации и обновление электронных баз данных.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Подготовка регулярной ежемесячной отчетности по предоставляемым услугам и взаимодействие с финансовой службой для выставления счетов и проведения оплат.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Подготовка и согласование технико-коммерческих предложений.</span>
                        </li>
                    </ul>
                </div>
                <div class="hr-container hr-column-gap-no">
                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-94b3bcb" data-id="94b3bcb" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class="hr-element hr-element-3073736 hr-view-framed hr-shape-square hr-widget hr-widget-icon" data-id="3073736" data-element_type="widget" data-widget_type="icon.default">
                                <div class="hr-widget-container">
                                    <div class="hr-icon-wrapper">
                                        <div class="hr-icon">
                                            <i aria-hidden="true" class="far fa-address-book"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-6c67e78" data-id="6c67e78" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class="hr-element hr-element-cd24cf7 hr-widget-divider--view-line_text hr-widget-divider--element-align-left hr-widget hr-widget-divider" data-id="cd24cf7" data-element_type="widget" data-widget_type="divider.default">
                                <div class="hr-widget-container">
                                    <div class="hr-divider">
                                        <span class="hr-divider-separator">
                                            <span class="hr-divider__text hr-divider__element">Требования</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="work_prop_list">
                    <ul>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Опыт работы в IT-сфере от 3х лет.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Понимание принципов построения ИТ инфраструктуры.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Опыт подготовки ТКП.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Знания в области серверного оборудования, облачных сервисов, телекоммуникаций, ЦОД, как преимущество.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Знания принципов предоставления облачных услуг (IaaS, SaaS, PaaS), как преимущество.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Понимание рынка облачных сервисов, знание актуальных тенденций и направлений развития.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Эффективная коммуникация с коллегами, клиентами и партнерами.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Навыки планирования, декомпозиции задач, оценки рисков.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Вовлечение людей в проект, их координация и контроль результата.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Навыки коммерческих переговоров и презентаций.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Эффективная работа в условиях сжатых сроков.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Знание английского языка не ниже Upper-Intermediate.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Желание обучаться и самостоятельно осваивать новые технологии.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Высшее техническое.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Наличие сертификатов VMware, Cisco, Microsoft будет преимуществом.</span>
                        </li>
                    </ul>
                </div>

                <div class="hr-container hr-column-gap-no">
                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-94b3bcb" data-id="94b3bcb" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class="hr-element hr-element-3073736 hr-view-framed hr-shape-square hr-widget hr-widget-icon" data-id="3073736" data-element_type="widget" data-widget_type="icon.default">
                                <div class="hr-widget-container">
                                    <div class="hr-icon-wrapper">
                                        <div class="hr-icon">
                                            <i aria-hidden="true" class="far fa-address-book"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-6c67e78" data-id="6c67e78" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class="hr-element hr-element-cd24cf7 hr-widget-divider--view-line_text hr-widget-divider--element-align-left hr-widget hr-widget-divider" data-id="cd24cf7" data-element_type="widget" data-widget_type="divider.default">
                                <div class="hr-widget-container">
                                    <div class="hr-divider">
                                        <span class="hr-divider-separator">
                                            <span class="hr-divider__text hr-divider__element">Условия</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="work_prop_list">
                    <ul>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Опыт работы с VMware vCloud Director, Veeam B&R, CommVault Simpana.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Наличие сертификатов VCP. CCNA, VMCE, Commvault Certified Professional - будут преимуществом.</span>
                        </li>

                    </ul>
                </div>

                <div class="new-pop-form-block">
                    <div class="new-semi-form-bloock">
                        <div class="first-semi-section">
                            <div class="first-section-input">
                                <input type="text" class="mf-input " id="mf-input-text-4d0c6c1" name="mf-text" placeholder="Имя " aria-invalid="false">
                            </div>
                        </div>
                        <div class="second-semi-section">
                            <div class="second-section-input">
                                <input type="tel" class="mf-input " id="mf-input-telephone-66047ac" name="mf-telephone" placeholder="Телефон " aria-invalid="false">
                            </div>
                        </div>
                        <div class="third-semi-section">
                            <div class="third-section-input">
                                <input type="email" class="mf-input " id="mf-input-email-78a26fb" name="mf-email" placeholder="Email " aria-invalid="false" value="">
                            </div>
                        </div>
                        <div class="fourth-semi-section">
                            <div class="fourth-section-input">
                                <input type="file" class="mf-input mf-input-file-upload " id="mf-input-file-upload-39affcc" name="mf-file-upload" accept=".jpg, .jpeg, .gif, .png, .pdf, .doc, .docx, .zip" aria-invalid="false">
                                <label><span>Резюме (PDF)</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="new-second-semi-form-block">
                        <div class="new-container-form-b">
                            <div class="left-new-cont-b">
                                <label>
                                    <input type="checkbox" class="mf-input mf-checkbox-input " name="mf-checkbox" data-checked="" aria-invalid="false" value="value-1">
                                    <span>

                                    </span>
                                </label>
                                <p>Предоставляя свои персональные данные, Вы соглашаетесь на их обработку с соответствии с <span style="color: rgb(255, 0, 119);"><a href="https://ru.admindatacenter.com/upload/Privacy_policy.pdf" target="_blank" rel="noopener" style="color: rgb(255, 0, 119);">Политикой обработки персональных данных ООО «Связь ВСД»</a>.</span> Пожалуйста, внимательно ознакомьтесь с документом, доступным по ссылке, перед направлением своих персональных данных компании</p>

                            </div>
                            <div class="right-new-cont-b">
                                <div class="right-btn-semi-section">
                                    <button type="submit" class="metform-btn metform-submit-btn " id=""><span>Отправить </span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="dialog-close-button dialog-lightbox-close-button"><i class="fas fa-times"></i></div>
    </div>
</div>
<div class="modal_work" id="work994">
    <div class="modal_work_block">
        <div class="dialog-message dialog-lightbox-message">
            <div class="work_content">
                <h2>Руководитель ИТ-проектов (Санкт-Петербург)</h2>
                <div class="hr-container hr-column-gap-no">
                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-94b3bcb" data-id="94b3bcb" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class="hr-element hr-element-3073736 hr-view-framed hr-shape-square hr-widget hr-widget-icon" data-id="3073736" data-element_type="widget" data-widget_type="icon.default">
                                <div class="hr-widget-container">
                                    <div class="hr-icon-wrapper">
                                        <div class="hr-icon">
                                            <i aria-hidden="true" class="far fa-address-book"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-6c67e78" data-id="6c67e78" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class="hr-element hr-element-cd24cf7 hr-widget-divider--view-line_text hr-widget-divider--element-align-left hr-widget hr-widget-divider" data-id="cd24cf7" data-element_type="widget" data-widget_type="divider.default">
                                <div class="hr-widget-container">
                                    <div class="hr-divider">
                                        <span class="hr-divider-separator">
                                            <span class="hr-divider__text hr-divider__element">Обязанности</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="work_prop_list">
                    <ul>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Формулировать цели внутренних проектов, взаимодействуя с заказчиками и сотрудниками компании.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Разрабатывать устав и бюджет проекта и защищать их перед управляющим комитетом проекта.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Планировать работы и ресурсы, необходимые для выполнения проекта.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Управлять ресурсами, выделенными для участия в проекте.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Управлять рисками проекта.</span>
                        </li>

                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Систематизировать знания и данные, накопленные при выполнении проекта.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Принимать текущие и стратегические решения по управлению проектами.</span>
                        </li>


                    </ul>
                </div>
                <div class="hr-container hr-column-gap-no">
                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-94b3bcb" data-id="94b3bcb" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class="hr-element hr-element-3073736 hr-view-framed hr-shape-square hr-widget hr-widget-icon" data-id="3073736" data-element_type="widget" data-widget_type="icon.default">
                                <div class="hr-widget-container">
                                    <div class="hr-icon-wrapper">
                                        <div class="hr-icon">
                                            <i aria-hidden="true" class="far fa-address-book"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-6c67e78" data-id="6c67e78" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class="hr-element hr-element-cd24cf7 hr-widget-divider--view-line_text hr-widget-divider--element-align-left hr-widget hr-widget-divider" data-id="cd24cf7" data-element_type="widget" data-widget_type="divider.default">
                                <div class="hr-widget-container">
                                    <div class="hr-divider">
                                        <span class="hr-divider-separator">
                                            <span class="hr-divider__text hr-divider__element">Требования</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="work_prop_list">
                    <ul>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Знание основ проектирования и внедрения автоматизированных систем в соответствии с ГОСТ серии 34.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Наличие технического опыта в ИТ технологиях (системное, прикладное ПО, физическое оборудование).</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Нацеленность на результат и умение брать за него ответственность.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Умение мотивировать участников команды.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Умение вести отчётность по проектам.</span>
                        </li>

                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Знание основ проектирования и внедрения автоматизированных систем в соответствии с ГОСТ серии 34.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Умение выявлять и разрешать конфликтные ситуации.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Наличие опыта управления средними проектами.</span>
                        </li>


                    </ul>
                </div>
{{--                знание принципов и методик управления проектами в соответствии с PMBOK будет плюсом--}}
                <div class="hr-container hr-column-gap-no">
                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-94b3bcb" data-id="94b3bcb" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class="hr-element hr-element-3073736 hr-view-framed hr-shape-square hr-widget hr-widget-icon" data-id="3073736" data-element_type="widget" data-widget_type="icon.default">
                                <div class="hr-widget-container">
                                    <div class="hr-icon-wrapper">
                                        <div class="hr-icon">
                                            <i aria-hidden="true" class="far fa-address-book"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-6c67e78" data-id="6c67e78" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class="hr-element hr-element-cd24cf7 hr-widget-divider--view-line_text hr-widget-divider--element-align-left hr-widget hr-widget-divider" data-id="cd24cf7" data-element_type="widget" data-widget_type="divider.default">
                                <div class="hr-widget-container">
                                    <div class="hr-divider">
                                        <span class="hr-divider-separator">
                                            <span class="hr-divider__text hr-divider__element">Будет плюсом</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="work_prop_list">
                    <ul>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Знание принципов и методик управления проектами в соответствии с PMBOK.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Опыт ведения проектов разработки ПО.</span>
                        </li>

                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Практический опыт методологий SCRUM, DevOps.</span>
                        </li>



                    </ul>
                </div>
{{--                знание принципов и методик управления проектами в соответствии с PMBOK--}}



                <div class="new-pop-form-block">
                    <div class="new-semi-form-bloock">
                        <div class="first-semi-section">
                            <div class="first-section-input">
                                <input type="text" class="mf-input " id="mf-input-text-4d0c6c1" name="mf-text" placeholder="Имя " aria-invalid="false">
                            </div>
                        </div>
                        <div class="second-semi-section">
                            <div class="second-section-input">
                                <input type="tel" class="mf-input " id="mf-input-telephone-66047ac" name="mf-telephone" placeholder="Телефон " aria-invalid="false">
                            </div>
                        </div>
                        <div class="third-semi-section">
                            <div class="third-section-input">
                                <input type="email" class="mf-input " id="mf-input-email-78a26fb" name="mf-email" placeholder="Email " aria-invalid="false" value="">
                            </div>
                        </div>
                        <div class="fourth-semi-section">
                            <div class="fourth-section-input">
                                {{--                                <input type="file" class="mf-input mf-input-file-upload " id="mf-input-file-upload-39affcc" name="mf-file-upload" accept=".jpg, .jpeg, .gif, .png, .pdf, .doc, .docx, .zip" aria-invalid="false">--}}
                                <input type="file" class="mf-input mf-input-file-upload " id="mf-input-file-upload-39affcc" name="mf-file-upload" accept=".pdf" aria-invalid="false">
                                <label><span>Резюме (PDF)</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="new-second-semi-form-block">
                        <div class="new-container-form-b">
                            <div class="left-new-cont-b">
                                <label>
                                    <input type="checkbox" class="mf-input mf-checkbox-input " name="mf-checkbox" data-checked="" aria-invalid="false" value="value-1">
                                    <span>

                                    </span>
                                </label>
                                <p>Предоставляя свои персональные данные, Вы соглашаетесь на их обработку с соответствии с <span style="color: rgb(255, 0, 119);"><a href="https://ru.admindatacenter.com/upload/Privacy_policy.pdf" target="_blank" rel="noopener" style="color: rgb(255, 0, 119);">Политикой обработки персональных данных ООО «Связь ВСД»</a>.</span> Пожалуйста, внимательно ознакомьтесь с документом, доступным по ссылке, перед направлением своих персональных данных компании</p>

                            </div>
                            <div class="right-new-cont-b">
                                <div class="right-btn-semi-section">
                                    <button type="submit" class="metform-btn metform-submit-btn " id=""><span>Отправить </span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="dialog-close-button dialog-lightbox-close-button"><i class="fas fa-times"></i></div>
    </div>
</div>
<div class="modal_work" id="work995">
    <div class="modal_work_block">
        <div class="dialog-message dialog-lightbox-message">
            <div class="work_content">
                <h2>Presale Engineer/Presale Manager (Санкт-Петербург, Москва)</h2>
                <div class="hr-container hr-column-gap-no">
                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-94b3bcb" data-id="94b3bcb" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class="hr-element hr-element-3073736 hr-view-framed hr-shape-square hr-widget hr-widget-icon" data-id="3073736" data-element_type="widget" data-widget_type="icon.default">
                                <div class="hr-widget-container">
                                    <div class="hr-icon-wrapper">
                                        <div class="hr-icon">
                                            <i aria-hidden="true" class="far fa-address-book"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-6c67e78" data-id="6c67e78" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class="hr-element hr-element-cd24cf7 hr-widget-divider--view-line_text hr-widget-divider--element-align-left hr-widget hr-widget-divider" data-id="cd24cf7" data-element_type="widget" data-widget_type="divider.default">
                                <div class="hr-widget-container">
                                    <div class="hr-divider">
                                        <span class="hr-divider-separator">
                                            <span class="hr-divider__text hr-divider__element">Ожидаем, что сотрудник будет:</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="work_prop_list">
                    <ul>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Выявлять потребности и боли клиента.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Готовить техническое решение и оценивать его бюджет.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Обосновывать преимущества выбранного решения с точки зрения бизнеса клиента.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Консультировать клиента по возможностям и характеристикам решения.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Выстраивать отношение с клиентом и помогать в закрытии сделок.</span>
                        </li>

                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Разрабатывать и сопровождать техническую документацию по предлагаемым решениям.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Работать в связке с отделом продаж, отделом управления проектами и инженерами компании.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Привлекать в проект партнеров, дистрибьюторов и вендоров.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Сопровождать решение на всех стадиях проекта: внедрение, сдача и поддержка.</span>
                        </li>


                    </ul>
                </div>
                <div class="hr-container hr-column-gap-no">
                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-94b3bcb" data-id="94b3bcb" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class="hr-element hr-element-3073736 hr-view-framed hr-shape-square hr-widget hr-widget-icon" data-id="3073736" data-element_type="widget" data-widget_type="icon.default">
                                <div class="hr-widget-container">
                                    <div class="hr-icon-wrapper">
                                        <div class="hr-icon">
                                            <i aria-hidden="true" class="far fa-address-book"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-6c67e78" data-id="6c67e78" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class="hr-element hr-element-cd24cf7 hr-widget-divider--view-line_text hr-widget-divider--element-align-left hr-widget hr-widget-divider" data-id="cd24cf7" data-element_type="widget" data-widget_type="divider.default">
                                <div class="hr-widget-container">
                                    <div class="hr-divider">
                                        <span class="hr-divider-separator">
                                            <span class="hr-divider__text hr-divider__element">Ожидаем, что кандидат обладает:</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="work_prop_list">
                    <ul>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Широкой технической экспертизой в ИТ инфраструктуре (виртуализация, сеть, серверы, СХД).</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Умением подготовки и проведения презентаций.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Отличными коммуникативными навыками.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Умением готовить технической документации.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Опытом работы и выстраивания отношений с ЛПР.</span>
                        </li>

                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Английским языком на уровне Intermediate.</span>
                        </li>


                    </ul>
                </div>



                <div class="new-pop-form-block">
                    <div class="new-semi-form-bloock">
                        <div class="first-semi-section">
                            <div class="first-section-input">
                                <input type="text" class="mf-input " id="mf-input-text-4d0c6c1" name="mf-text" placeholder="Имя " aria-invalid="false">
                            </div>
                        </div>
                        <div class="second-semi-section">
                            <div class="second-section-input">
                                <input type="tel" class="mf-input " id="mf-input-telephone-66047ac" name="mf-telephone" placeholder="Телефон " aria-invalid="false">
                            </div>
                        </div>
                        <div class="third-semi-section">
                            <div class="third-section-input">
                                <input type="email" class="mf-input " id="mf-input-email-78a26fb" name="mf-email" placeholder="Email " aria-invalid="false" value="">
                            </div>
                        </div>
                        <div class="fourth-semi-section">
                            <div class="fourth-section-input">
                                {{--                                <input type="file" class="mf-input mf-input-file-upload " id="mf-input-file-upload-39affcc" name="mf-file-upload" accept=".jpg, .jpeg, .gif, .png, .pdf, .doc, .docx, .zip" aria-invalid="false">--}}
                                <input type="file" class="mf-input mf-input-file-upload " id="mf-input-file-upload-39affcc" name="mf-file-upload" accept=".pdf" aria-invalid="false">
                                <label><span>Резюме (PDF)</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="new-second-semi-form-block">
                        <div class="new-container-form-b">
                            <div class="left-new-cont-b">
                                <label>
                                    <input type="checkbox" class="mf-input mf-checkbox-input " name="mf-checkbox" data-checked="" aria-invalid="false" value="value-1">
                                    <span>

                                    </span>
                                </label>
                                <p>Предоставляя свои персональные данные, Вы соглашаетесь на их обработку с соответствии с <span style="color: rgb(255, 0, 119);"><a href="https://ru.admindatacenter.com/upload/Privacy_policy.pdf" target="_blank" rel="noopener" style="color: rgb(255, 0, 119);">Политикой обработки персональных данных ООО «Связь ВСД»</a>.</span> Пожалуйста, внимательно ознакомьтесь с документом, доступным по ссылке, перед направлением своих персональных данных компании</p>

                            </div>
                            <div class="right-new-cont-b">
                                <div class="right-btn-semi-section">
                                    <button type="submit" class="metform-btn metform-submit-btn " id=""><span>Отправить </span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="dialog-close-button dialog-lightbox-close-button"><i class="fas fa-times"></i></div>
    </div>
</div>
<div class="modal_work" id="work996">
    <div class="modal_work_block">
        <div class="dialog-message dialog-lightbox-message">
            <div class="work_content">
                <h2>ИТ инженер инфраструктуры/Системный администратор (Москва)</h2>
                <div class="hr-container hr-column-gap-no">
                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-94b3bcb" data-id="94b3bcb" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class="hr-element hr-element-3073736 hr-view-framed hr-shape-square hr-widget hr-widget-icon" data-id="3073736" data-element_type="widget" data-widget_type="icon.default">
                                <div class="hr-widget-container">
                                    <div class="hr-icon-wrapper">
                                        <div class="hr-icon">
                                            <i aria-hidden="true" class="far fa-address-book"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-6c67e78" data-id="6c67e78" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class="hr-element hr-element-cd24cf7 hr-widget-divider--view-line_text hr-widget-divider--element-align-left hr-widget hr-widget-divider" data-id="cd24cf7" data-element_type="widget" data-widget_type="divider.default">
                                <div class="hr-widget-container">
                                    <div class="hr-divider">
                                        <span class="hr-divider-separator">
                                            <span class="hr-divider__text hr-divider__element">Основные обязанности:</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="work_prop_list">
                    <ul>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Поддержка и конфигурация внутренней инфраструктуры на базе ОС Microsoft (Active Directory, DNS, DHCP, Wsus, GPO, DFS, etc.) и Linux.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Поддержка офисных программ на базе Microsoft Office365 (Office, Teams, Exchange).</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Поддержка рабочих станций пользователей на основе Microsoft Windows 10.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Ведение учётных записей пользователей.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Учёт оборудования.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Ведение документации.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Резервное копирование.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Участие во внутренних проектах.</span>
                        </li>
                    </ul>
                </div>
                <div class="hr-container hr-column-gap-no">
                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-94b3bcb" data-id="94b3bcb" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class="hr-element hr-element-3073736 hr-view-framed hr-shape-square hr-widget hr-widget-icon" data-id="3073736" data-element_type="widget" data-widget_type="icon.default">
                                <div class="hr-widget-container">
                                    <div class="hr-icon-wrapper">
                                        <div class="hr-icon">
                                            <i aria-hidden="true" class="far fa-address-book"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-6c67e78" data-id="6c67e78" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class="hr-element hr-element-cd24cf7 hr-widget-divider--view-line_text hr-widget-divider--element-align-left hr-widget hr-widget-divider" data-id="cd24cf7" data-element_type="widget" data-widget_type="divider.default">
                                <div class="hr-widget-container">
                                    <div class="hr-divider">
                                        <span class="hr-divider-separator">
                                            <span class="hr-divider__text hr-divider__element">Ключевые требования:</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="work_prop_list">
                    <ul>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Опыт работы от 3-х лет.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Работа с Enterprise решениями.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Поддержки территориально распределённой офисной инфраструктуры > 200 пользователей.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Уверенное знание ОС: Windows server 2016/2019, Windows 8/8.1/10.</span>
                        </li>

                    </ul>
                </div>

                <div class="hr-container hr-column-gap-no">
                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-94b3bcb" data-id="94b3bcb" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class="hr-element hr-element-3073736 hr-view-framed hr-shape-square hr-widget hr-widget-icon" data-id="3073736" data-element_type="widget" data-widget_type="icon.default">
                                <div class="hr-widget-container">
                                    <div class="hr-icon-wrapper">
                                        <div class="hr-icon">
                                            <i aria-hidden="true" class="far fa-address-book"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-6c67e78" data-id="6c67e78" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class="hr-element hr-element-cd24cf7 hr-widget-divider--view-line_text hr-widget-divider--element-align-left hr-widget hr-widget-divider" data-id="cd24cf7" data-element_type="widget" data-widget_type="divider.default">
                                <div class="hr-widget-container">
                                    <div class="hr-divider">
                                        <span class="hr-divider-separator">
                                            <span class="hr-divider__text hr-divider__element">Будет плюсом:</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="work_prop_list">
                    <ul>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Работа с системами виртуализации (MS Hyper-v, VMWare, KVM)</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">MDT.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Терминальный доступ.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Наличие профильных сертификатов.</span>
                        </li>


                    </ul>
                </div>

                <div class="new-pop-form-block">
                    <div class="new-semi-form-bloock">
                        <div class="first-semi-section">
                            <div class="first-section-input">
                                <input type="text" class="mf-input " id="mf-input-text-4d0c6c1" name="mf-text" placeholder="Имя " aria-invalid="false">
                            </div>
                        </div>
                        <div class="second-semi-section">
                            <div class="second-section-input">
                                <input type="tel" class="mf-input " id="mf-input-telephone-66047ac" name="mf-telephone" placeholder="Телефон " aria-invalid="false">
                            </div>
                        </div>
                        <div class="third-semi-section">
                            <div class="third-section-input">
                                <input type="email" class="mf-input " id="mf-input-email-78a26fb" name="mf-email" placeholder="Email " aria-invalid="false" value="">
                            </div>
                        </div>
                        <div class="fourth-semi-section">
                            <div class="fourth-section-input">
                                {{--                                <input type="file" class="mf-input mf-input-file-upload " id="mf-input-file-upload-39affcc" name="mf-file-upload" accept=".jpg, .jpeg, .gif, .png, .pdf, .doc, .docx, .zip" aria-invalid="false">--}}
                                <input type="file" class="mf-input mf-input-file-upload " id="mf-input-file-upload-39affcc" name="mf-file-upload" accept=".pdf" aria-invalid="false">
                                <label><span>Резюме (PDF)</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="new-second-semi-form-block">
                        <div class="new-container-form-b">
                            <div class="left-new-cont-b">
                                <label>
                                    <input type="checkbox" class="mf-input mf-checkbox-input " name="mf-checkbox" data-checked="" aria-invalid="false" value="value-1">
                                    <span>

                                    </span>
                                </label>
                                <p>Предоставляя свои персональные данные, Вы соглашаетесь на их обработку с соответствии с <span style="color: rgb(255, 0, 119);"><a href="https://ru.admindatacenter.com/upload/Privacy_policy.pdf" target="_blank" rel="noopener" style="color: rgb(255, 0, 119);">Политикой обработки персональных данных ООО «Связь ВСД»</a>.</span> Пожалуйста, внимательно ознакомьтесь с документом, доступным по ссылке, перед направлением своих персональных данных компании</p>

                            </div>
                            <div class="right-new-cont-b">
                                <div class="right-btn-semi-section">
                                    <button type="submit" class="metform-btn metform-submit-btn " id=""><span>Отправить </span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="dialog-close-button dialog-lightbox-close-button"><i class="fas fa-times"></i></div>
    </div>
</div>
<div class="modal_work" id="work997">
    <div class="modal_work_block">
        <div class="dialog-message dialog-lightbox-message">
            <div class="work_content">
                <h2>Финансовый аналитик (Москва)</h2>
                <div class="hr-container hr-column-gap-no">
                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-94b3bcb" data-id="94b3bcb" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class="hr-element hr-element-3073736 hr-view-framed hr-shape-square hr-widget hr-widget-icon" data-id="3073736" data-element_type="widget" data-widget_type="icon.default">
                                <div class="hr-widget-container">
                                    <div class="hr-icon-wrapper">
                                        <div class="hr-icon">
                                            <i aria-hidden="true" class="far fa-address-book"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-6c67e78" data-id="6c67e78" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class="hr-element hr-element-cd24cf7 hr-widget-divider--view-line_text hr-widget-divider--element-align-left hr-widget hr-widget-divider" data-id="cd24cf7" data-element_type="widget" data-widget_type="divider.default">
                                <div class="hr-widget-container">
                                    <div class="hr-divider">
                                        <span class="hr-divider-separator">
                                            <span class="hr-divider__text hr-divider__element">Обязанности</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="work_prop_list">
                    <ul>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Участие в ежемесячной подготовке управленческой отчетности для акционеров Компании (на базе МСФО).</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Сбор информации по отделам продаж для подготовки ежемесячных прогнозов по выручке.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Ежемесячная сверка данных между финансовой системой (1С) и внутренней системой учёта проектов в Компании в части доходов.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Подготовка и периодическое обновление финансовых моделей по новым проектам и стандартных прайс-листов, принятых в Компании.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Согласование цен, направляемых клиентам, проверка правильности расчётов, соответствия актуальному прайс-листу, ожидаемой прибыльности и сроков окупаемости проектов.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Контроль выполнения прогноза продаж, проведение встреч с отделами продаж для анализа результатов на регулярной основе.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Ежегодное бюджетирование выручки от продаж.</span>
                        </li>
                    </ul>
                </div>
                <div class="hr-container hr-column-gap-no">
                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-94b3bcb" data-id="94b3bcb" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class="hr-element hr-element-3073736 hr-view-framed hr-shape-square hr-widget hr-widget-icon" data-id="3073736" data-element_type="widget" data-widget_type="icon.default">
                                <div class="hr-widget-container">
                                    <div class="hr-icon-wrapper">
                                        <div class="hr-icon">
                                            <i aria-hidden="true" class="far fa-address-book"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hr-column hr-col-50 hr-inner-column hr-element hr-element-6c67e78" data-id="6c67e78" data-element_type="column">
                        <div class="hr-widget-wrap hr-element-populated">
                            <div class="hr-element hr-element-cd24cf7 hr-widget-divider--view-line_text hr-widget-divider--element-align-left hr-widget hr-widget-divider" data-id="cd24cf7" data-element_type="widget" data-widget_type="divider.default">
                                <div class="hr-widget-container">
                                    <div class="hr-divider">
                                        <span class="hr-divider-separator">
                                            <span class="hr-divider__text hr-divider__element">Требования</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="work_prop_list">
                    <ul>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Высшее экономическое образование.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Знание основ МСФО.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Продвинутое знание Excel.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Знание английского языка – не ниже Intermediate.</span>
                        </li>
                        <li>
                            <span class="hr-icon-list-icon">
                                <svg  viewBox="-18 -18 572.00902 572"  xmlns="http://www.w3.org/2000/svg"><path d="m279.628906 143.855469c-4.851562-4.855469-12.722656-4.855469-17.582031 0-4.855469 4.851562-4.855469 12.726562 0 17.582031l94.164063 94.164062h-250.191407c-6.886719 0-12.472656 5.585938-12.472656 12.472657 0 6.890625 5.585937 12.472656 12.472656 12.472656h250.066407l-94.164063 94.164063c-2.335937 2.328124-3.648437 5.496093-3.648437 8.792968 0 3.300782 1.3125 6.460938 3.648437 8.792969 2.335937 2.355469 5.535156 3.660156 8.855469 3.617187 3.308594-.015624 6.484375-1.3125 8.851562-3.617187l115.367188-115.363281c2.347656-2.351563 3.65625-5.542969 3.621094-8.859375-.023438-3.308594-1.320313-6.472657-3.621094-8.851563zm0 0"/><path d="m268.15625-.0742188c-108.457031-.0195312-206.242188 65.3085938-247.746094 165.5117188-41.496094 100.207031-18.542968 215.542969 58.171875 292.210938 104.703125 104.703124 274.453125 104.703124 379.152344 0 104.699219-104.695313 104.699219-274.445313 0-379.148438-50.167969-50.453125-118.429687-78.746094-189.578125-78.5742188zm0 511.3554688c-134.074219 0-243.203125-109.132812-243.203125-243.207031s109.128906-243.203125 243.203125-243.203125 243.207031 109.128906 243.207031 243.203125-109.132812 243.207031-243.207031 243.207031zm0 0"/></svg>
                            </span>
                            <span class="hr-icon-list-text">Отличные коммуникативные навыки.</span>
                        </li>


                    </ul>
                </div>



                <div class="new-pop-form-block">
                    <div class="new-semi-form-bloock">
                        <div class="first-semi-section">
                            <div class="first-section-input">
                                <input type="text" class="mf-input " id="mf-input-text-4d0c6c1" name="mf-text" placeholder="Имя " aria-invalid="false">
                            </div>
                        </div>
                        <div class="second-semi-section">
                            <div class="second-section-input">
                                <input type="tel" class="mf-input " id="mf-input-telephone-66047ac" name="mf-telephone" placeholder="Телефон " aria-invalid="false">
                            </div>
                        </div>
                        <div class="third-semi-section">
                            <div class="third-section-input">
                                <input type="email" class="mf-input " id="mf-input-email-78a26fb" name="mf-email" placeholder="Email " aria-invalid="false" value="">
                            </div>
                        </div>
                        <div class="fourth-semi-section">
                            <div class="fourth-section-input">
                                {{--                                <input type="file" class="mf-input mf-input-file-upload " id="mf-input-file-upload-39affcc" name="mf-file-upload" accept=".jpg, .jpeg, .gif, .png, .pdf, .doc, .docx, .zip" aria-invalid="false">--}}
                                <input type="file" class="mf-input mf-input-file-upload " id="mf-input-file-upload-39affcc" name="mf-file-upload" accept=".pdf" aria-invalid="false">
                                <label><span>Резюме (PDF)</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="new-second-semi-form-block">
                        <div class="new-container-form-b">
                            <div class="left-new-cont-b">
                                <label>
                                    <input type="checkbox" class="mf-input mf-checkbox-input " name="mf-checkbox" data-checked="" aria-invalid="false" value="value-1">
                                    <span>

                                    </span>
                                </label>
                                <p>Предоставляя свои персональные данные, Вы соглашаетесь на их обработку с соответствии с <span style="color: rgb(255, 0, 119);"><a href="https://ru.admindatacenter.com/upload/Privacy_policy.pdf" target="_blank" rel="noopener" style="color: rgb(255, 0, 119);">Политикой обработки персональных данных ООО «Связь ВСД»</a>.</span> Пожалуйста, внимательно ознакомьтесь с документом, доступным по ссылке, перед направлением своих персональных данных компании</p>

                            </div>
                            <div class="right-new-cont-b">
                                <div class="right-btn-semi-section">
                                    <button type="submit" class="metform-btn metform-submit-btn " id=""><span>Отправить </span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="dialog-close-button dialog-lightbox-close-button"><i class="fas fa-times"></i></div>
    </div>
</div>



<div id="block_study">
    <div class="dialog_block">
        <div class="dialog_msg">
            <div class="dialog_left">
                <div class="left_bl1">
                    <div class="left_bl9">
                        <div class="left_bl10">
                            <div class="left_bl11">
                                <div class="left_bl12">
                                    <div class="left_bl13">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 497.78 343.09"><g id="b8828796-c9ee-446c-b852-82415f4522cb" data-name="Layer 2"><g id="b7408b96-247d-475f-b3ab-5e54b9e52003" data-name="Layer 1"><g id="a1829bb6-5d3a-488a-bbf9-ebe20dcb9521" data-name="Layer 2"><g id="ef010664-f4ee-4b14-b166-fbacdfc41f44" data-name="Layer 2-2"><polyline points="328.72 17.5 480.12 169 17.5 169" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:35px"></polyline><line x1="323.85" y1="325.59" x2="480.28" y2="169.16" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:35px"></line></g></g></g></g></svg>			</div>
                                </div>
                            </div>
                            <div class="left_bl16">
                                <div class="left_bl14">
                                    <h2 class="left_bl15">3</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="left_bl2">
                        <h2 class="left_bl3">{{ __('content.простых шага') }}</h2>
                    </div>
                    <section class="left_bl4">
                        <div class="left_bl5"></div>
                        <div class="left_bl6"></div>
                    </section>
                    <div class="left_bl7">
                        <h2 class="left_bl8">{{ __('content.чтобы стать стажером в admindatacenter') }}</h2>
                    </div>
                </div>
            </div>
            <div class="dialog_right">
                <div class="right_bl1 newscrl">
                    <div class="right_bl2" id="close_study_form"><i class="fas fa-times"></i></div>
                    <div  class="new-study-form-container first">
                        <div class="new-steb-by-step">
                            <div class="n1-num-spn">
                                <span style="border-color:#fff;">1</span>
                            </div>
                            <div class="n2-num-spn">
                                <span>2</span>
                            </div>
                            <div class="n3-num-spn">
                                <span>3</span>
                            </div>
                        </div>

                        <div class="new-surname-input">
                            <input type="text" class="mf-input " id="mf-input-text-5728c3f7" name="surname" placeholder="{{ __('content.Фамилия') }}" aria-invalid="false">
                        </div>
                        <div class="new-name-input">
                            <input type="text" class="mf-input "  name="name" placeholder="{{ __('content.Имя') }}" aria-invalid="false">
                        </div>
                        <div class="new-dadname-input">
                            <input type="text" class="mf-input " id="mf-input-text-5a3e31d" name="name" placeholder="{{ __('content.Отчество') }}" aria-invalid="false">
                        </div>
                        <div class="new-birthday-input">
{{--                            123--}}

                            <input name="mf-date" class="mf-input mf-date-input mf-left-parent flatpickr-input" placeholder="{{ __('content.Дата рождения') }}" aria-invalid="false" value="" type="text">
                        </div>
                        <div class="new-phone-input">
                            <input type="tel" class="mf-input " id="mf-input-telephone-d27ceda" name="mf-telephone" placeholder="{{ __('content.Телефон') }}" aria-invalid="false">
                        </div>
                        <div class="new-checkbox-inputs">
                            <div class="name-checkbox-inputs">
                                {{ __('content.Телефон') }}
                            </div>
                            <div class="new-checkbox-block">


                                <label>
                                    <input type="checkbox" class="mf-input mf-checkbox-input " name="mf-checkbox" data-checked="" aria-invalid="false" value="value-1">
                                    <span>

                                    </span>
                                </label>
                                <p>{{ __('content.Москва') }}</p>

                            </div>
                            <div class="new-checkbox-block">


                                <label>
                                    <input type="checkbox" class="mf-input mf-checkbox-input " name="mf-checkbox" data-checked="" aria-invalid="false" value="value-1">
                                    <span>

                                    </span>
                                </label>
                                <p class="spb-p-class">{{ __('content.Санкт-Петербург') }}</p>

                            </div>
                        </div>
                        <div class="new-btn-success-study-form">
                            <button type="button" class="metform-btn metfrom-next-step " data-direction="next">
                                {{ __('content.Следующий шаг') }}
                            </button>
                        </div>
                    </div>
{{--                    this second--}}
                    <div style="display: none" class="new-study-form-container second">
                        <div class="new-steb-by-step">
                            <div class="n1-num-spn">
                                <span>1</span>
                            </div>
                            <div class="n2-num-spn">
                                <span style="border-color:#fff;">2</span>
                            </div>
                            <div class="n3-num-spn">
                                <span>3</span>
                            </div>
                        </div>

                        <div class="new-surname-input">
                            <input type="text" class="mf-input " name="studyname" placeholder="{{ __('content.Название учебного заведения') }}" aria-invalid="false">
                        </div>
                        <div class="new-name-input">
                            <input type="text" class="mf-input "  name="facultet" placeholder="{{ __('content.Факультет') }}" aria-invalid="false">
                        </div>
                        <div class="new-dadname-input">
                            <input type="text" class="mf-input "  name="specname" placeholder="{{ __('content.Специальность') }}" aria-invalid="false">
                        </div>
                        <div class="new-birthday-input">
                            {{--                            123--}}

                            <input name="start-study" class="mf-input mf-date-input mf-left-parent flatpickr-input" placeholder="{{ __('content.Год поступления') }}" aria-invalid="false" value="" type="text">
                        </div>
                        <div class="new-phone-input">
                            <input type="text" class="mf-input " id="mf-input-telephone-d27ceda" name="end-study" placeholder="{{ __('content.Год окончания') }}" aria-invalid="false">
                        </div>

                        <div class="new-btn-success-study-form">
                            <button type="button" class="metform-btn metfrom-next-step  firstprevbtn" data-direction="prev">
                                {{ __('content.Предыдущий шаг') }}
                            </button>

                            <button type="button" class="metform-btn metfrom-next-step  firstnextbtn" data-direction="next">
                                {{ __('content.Следующий шаг') }}
                            </button>
                        </div>
                    </div>

                    {{--                    this second end--}}
{{--                    this third--}}
                    <div style="display: none" class="new-study-form-container third">
                        <div class="new-steb-by-step">
                            <div class="n1-num-spn">
                                <span>1</span>
                            </div>
                            <div class="n2-num-spn">
                                <span>2</span>
                            </div>
                            <div class="n3-num-spn">
                                <span style="border-color:#fff;">3</span>
                            </div>
                        </div>

                        <div class="new-surname-input">
                            <textarea class="mf-input mf-textarea " id="mf-input-text-area-d52135e" name="request-message" placeholder="{{ __('content.Опыт работы') }}... " cols="30" rows="10" aria-invalid="false" style="height: 125px;"></textarea>                        </div>
                        <div class="new-name-input">
                            <textarea class="mf-input mf-textarea " id="mf-input-text-area-4903523" name="request-message" placeholder="{{ __('content.Информация об участии в стажировках других компаний') }}... " cols="30" rows="10" aria-invalid="false" style="margin-top: 0px; margin-bottom: 0px; height: 125px;"></textarea>                        </div>

                        <div class="new-checkbox-inputs">
                            <div class="left-new-cont-b">
                                <label>
                                    <input type="checkbox" class="mf-input mf-checkbox-input " name="mf-checkbox" data-checked="" aria-invalid="false" value="value-1">
                                    <span>

                                    </span>
                                </label>
                                <p>{{ __('content.Предоставляя свои персональные данные, Вы соглашаетесь на их обработку с соответствии с') }} <span style="color: rgb(255, 0, 119);"><a href="https://ru.admindatacenter.com/upload/Privacy_policy.pdf" target="_blank" rel="noopener" style="color: rgb(255, 0, 119);">{{ __('content.Политикой обработки персональных данных ООО «Связь ВСД»') }}</a>.</span> {{ __('content.Пожалуйста, внимательно ознакомьтесь с документом, доступным по ссылке, перед направлением своих персональных данных компании') }} </p>

                            </div>
                        </div>
                        <div class="new-btn-success-study-form">
                            <button type="button" class="metform-btn metfrom-next-step  firstprevbtn" data-direction="prev">
                                {{ __('content.Предыдущий шаг') }}
                            </button>

                            <button type="button" class="metform-btn metfrom-next-step  firstnextbtn" data-direction="next">
                                {{ __('content.Отправить') }}
                            </button>
                        </div>
                    </div>

                    {{--                    this third end--}}
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/hr_/js/jquery-3.6.0.min.js"></script>
<script src="/hr_/js/owl.carousel.min.js"></script>
<script src="/hr_/js/lottie.js" type="text/javascript"></script>
<script>
    $( document ).ready(function() {
        $('#close_study_form').click(function() {
            $('#block_study').removeClass('study_form_active');
        });
        $('#study_form').click(function() {
            $('#block_study').addClass('study_form_active');
        });


        $('.new-study-form-container.first button').click(function() {
            $('.new-study-form-container.first').css('display', 'none');
            $('.new-study-form-container.second').css('display', 'block');

        });
        $('.new-study-form-container.second .firstprevbtn').click(function() {
            $('.new-study-form-container.second').css('display', 'none');
            $('.new-study-form-container.first').css('display', 'block');



        });

        $('.new-study-form-container.second .firstnextbtn').click(function() {
            $('.new-study-form-container.second').css('display', 'none');
            $('.new-study-form-container.third').css('display', 'block');


        });

        $('.new-study-form-container.third .firstprevbtn').click(function() {
            $('.new-study-form-container.third').css('display', 'none');
            $('.new-study-form-container.second').css('display', 'block');


        });





        $( "#jet-toggle-control-1771" ).click(function() {

            $("#jet-toggle-control-1772").parent().removeClass("active-toggle");
            $("#jet-toggle-control-1773").parent().removeClass("active-toggle");
           var  par_it = $( this ).parent();
           $(par_it).toggleClass("active-toggle");

        });
        $( "#jet-toggle-control-1772" ).click(function() {
            $("#jet-toggle-control-1771").parent().removeClass("active-toggle");
            $("#jet-toggle-control-1773").parent().removeClass("active-toggle");
            var  par_it = $( this ).parent();
            $(par_it).toggleClass("active-toggle");
        });
        $( "#jet-toggle-control-1773" ).click(function() {
            $("#jet-toggle-control-1772").parent().removeClass("active-toggle");
            $("#jet-toggle-control-1771").parent().removeClass("active-toggle");
            var  par_it = $( this ).parent();
            $(par_it).toggleClass("active-toggle");
        });
        $( "#text_more" ).click(function() {
            var  par_it = $( "#text_more" ).parent().parent();
            $(par_it).toggleClass("active-toggle");
        });



        $( "#stagirovka_btn" ).click(function() {
            // $('#work1').css('display', 'flex');
            $('#block_study').addClass("study_form_active");
        });



        $( "#work1_btn" ).click(function() {
            $('#work1').css('display', 'flex');
        });
        $( "#work2_btn" ).click(function() {
            $('#work2').css('display', 'flex');
        });
        $( "#work3_btn" ).click(function() {
            $('#work3').css('display', 'flex');
        });
        $( "#work4_btn" ).click(function() {
            $('#work4').css('display', 'flex');
        });
        $( "#work5_btn" ).click(function() {
            $('#work5').css('display', 'flex');
        });
        $( "#work6_btn" ).click(function() {
            $('#work6').css('display', 'flex');
        });
        $( "#work7_btn" ).click(function() {
            $('#work7').css('display', 'flex');
        });
        $( "#work8_btn" ).click(function() {
            $('#work8').css('display', 'flex');
        });
        $( "#work9_btn" ).click(function() {
            $('#work9').css('display', 'flex');
        });
        $( "#work10_btn" ).click(function() {
            $('#work10').css('display', 'flex');
        });
        $( "#work11_btn" ).click(function() {
            $('#work11').css('display', 'flex');
        });


        $( "#work994_btn" ).click(function() {
            $('#work994').css('display', 'flex');
        });
        $( "#work995_btn" ).click(function() {
            $('#work995').css('display', 'flex');
        });
        $( "#work996_btn" ).click(function() {
            $('#work996').css('display', 'flex');
        });
        $( "#work997_btn" ).click(function() {
            $('#work997').css('display', 'flex');
        });



        $( ".dialog-close-button" ).click(function() {
            $('.modal_work').each(function() {
                $(this).css('display', 'none');
            });
        });
        $('.owl-carousel2').owlCarousel({
            loop:true,
            margin:0,
            nav: true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            }
        })
        $('.owl-carousel3').owlCarousel({
            loop:true,
            margin:0,
            nav: true,
            dots:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        })
        $('.owl-carousel1').owlCarousel({
            loop:true,
            dots:false,
            margin:0,
            nav:false,
            pullDrag:true,
            autoplay:true,
            autoplayTimeout:5000,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        })
    });
    lottie.loadAnimation({
        container: document.getElementById('e-lottie__animation'), // the dom element that will contain the animation
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: '/hr_/Cool-04.json' // the path to the animation json
    });
</script>
@endsection
