@inject('priceRepository', 'App\Services\PriceRepository')
<div id="calculator" class="calculator bg-grey">
    <div class="content">
        <div class="header">
            <h2>{{ __('content.Рассчитайте стоимость услуги') }}</h2>
        </div>
        <div class="block-content">
            <form action="{{ route('form.submitCalc') }}" method="post">
                <input type="hidden" name="type" value="mailCalculator">
                <input type="hidden" name="page" value="{{ url()->full() }}">
                <div class="row location">
                    <div class="check">
                        <div class="subtitle">
                            {{ __('content.Выберите площадку') }}
                        </div>
                    </div>

                    <div class="choose">
                        <div class="toggle">
                            <div data-id="moscow" class="active">{{ __('content.Москва') }}</div>
                            <div data-id="saint-petersburg">{{ __('content.Санкт-Петербург') }}</div>
                            {{-- <div data-id="warsaw">{{ __('content.Варшава') }}</div> --}}
                        </div>
                    </div>
                    <div class="block-button-modal-warsaw">
                        <button class="btn button-modal-warsaw open-model-id" data-modal-id="modal-warsaw">{{ __('content.Рассчитать услуги в Варшаве') }}</button>
                    </div>
                    <input type="hidden" name="location" value="moscow">
                </div>
                @include('blocks.calculator.virtual-resource')
                @include('blocks.calculator.backup-copying')
                <div class="row">
                    <div class="check ai">
                        <label class="radio__container">
                            <input name="internet_access" type="checkbox"
                                   class="check_resource"
                                   data-price="{{ $priceRepository->getPrice('internet_access')->value }}">
                            <span class="checkmark"></span>
                            {{ __('content.Доступ в интернет') }}
                        </label>
                    </div>
                    <div class="choose">
                        <div class="access-internet-description">
                            {{ __('content.Предоставляется канал на скорости 100 Мбит/сек и регистрируемый IP-адрес') }}.
                        </div>
                    </div>
                    <div class="result">
                        <input type="hidden" name="internet_access" value="0">
                        <div class="subtitle">{{ __('content.Стоимость') }}</div>
                        <div class="item-sum"><span>0</span> {{ __('content.руб') }}.</div>
                    </div>
                </div>

                <div class="row sum">
                    <div class="check">
                        <div class="subtitle">
                            <span class="sum">{{ __('content.ИТОГО') }}</span>
                        </div>
                    </div>
                    <div class="choose">
                    </div>
                    <div class="result">
                        <input type="hidden" name="total" value="0">
                        <span class="sum">0</span> {{ __('content.руб') }}.
                    </div>
                </div>
                <div class="additional-fields">
                    @include('blocks.calculator.additional-fields');
                </div>
                <div class="offer">
                    <button type="button" class="btn">{{ __('content.Отправить запрос') }}</button>
                </div>
                <div class="calc-disclaimer">
                    @php /*
                    {{ __('content.*Правила предоставления Услуг регулируется') }}
                    @if (app()->getLocale() === 'ru')
                        <a target="_blank" href="/upload/IaaS_2020_terms_rus.pdf">
                    @else
                        <a target="_blank" href="/upload/IaaS_2020_terms_eng.pdf">
                    @endif
                    {{ __('content.Условиями проведения рекламной акции «IaaS 2020»') }}</a>
                    {{ __('content..Период проведения Акции – с 01.04.2020 г. по 31.12.2020 г. Условия Акции применяются, если клиент направляет запрос на подключение Услуги в указанный период. Для получения расчёта стоимости и коммерческого предложения просьба связаться с менеджером ООО «Связь ВСД», отправив заявку через форму на данной странице. Услуги предоставляются при наличии технической возможности и после осуществления ООО «Связь ВСД» проверки потенциального клиента в порядке, установленном действующими в ООО «Связь ВСД» правилами и процедурами, и на основании заключаемого сторонами договора. ООО «Связь ВСД» вправе в любое время и без предварительного уведомления изменять условия предоставления скидок, в том числе приостанавливать или прекращать предоставление скидок.') }}
                    */
                    @endphp
                </div>
                <div class="modal">
                    <div class="modal-content">
                        <button type="button" class="close">
                            <img src="/images/icons/close.svg" />
                        </button>
                        <div class="success-message">
                            <p>{{ __('content.Спасибо за обращение!') }}</p>
                            <p>{{ __('content.В ближайшее время мы свяжемся с вами.') }}</p>
                        </div>
                        <div class="errors">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@include('blocks.modal-warsaw')
