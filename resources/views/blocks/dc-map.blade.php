<section class="geografy">
    <div class="containermy">
    <picture>
        @if (app()->isLocale('ru'))
            <source
                media="(max-width: 850px)"
                srcset="/img/rugeografy-m.svg"
            />
            <img
                class="lazyload geografy__img"
                data-src="/img/map1.svg"
                alt="География нашего бизнеса"
                src="/img/map1.svg"
            />
    </picture>
    @elseif(app()->isLocale('en'))
        <source
            media="(max-width: 850px)"
            srcset="/img/engeografy-m.svg"
        />
        <img
            class="lazyload geografy__img"
            data-src="/img/map2.svg"
            alt="География нашего бизнеса"
            src="/img/map2.svg"
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
