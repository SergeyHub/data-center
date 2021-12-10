<div id="modal-tell-us" class="modal__container">
    <button class="close">
        <img src="/images/icons/close.svg" alt="{{ __('content.Закрыть окно') }}">
    </button>
    <div class="content modal__form">
        <h2>{{ __('content.Напишите нам') }}</h2>
        <div class="row">
            <div class="col-6 col-offset-3">
                <form action="{{ route('form.tellUs') }}" name="corporate-feedback"
                      id="corporate-feedback">
                    <input type="hidden" name="type" value="tell us"/>
                    <input type="hidden" name="page" value="{{ url()->full() }}">
                    <div class="form-group">
                        <div class="text-input before-people">
                            <input id="tu-name" name="name" placeholder="{{ __('content.Ваше имя') }}" type="text"
                                   autocomplete="name">
                            <label for="tu-name">{{ __('content.Ваше имя') }}</label>
                        </div>
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="text-input before-phone-pink">
                            <input id="tu-phone" name="phone" placeholder="+7 (___) ___ __ __" type="tel"
                                   autocomplete="tel" data-mask="phone">
                            <label for="tu-phone">{{ __('content.Телефон') }}</label>
                        </div>
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="text-input before-mail-pink">
                            <input id="tu-email" name="email" placeholder="E-mail" type="email" autocomplete="email" data-mask="email">
                            <label for="tu-email">Email</label>
                        </div>
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="text-input before-organization">
                            <input id="tu-organization" name="organization" placeholder="{{ __('content.Компания') }}"
                                   type="text"
                                   autocomplete="organization">
                            <label for="tu-organization">{{ __('content.Компания') }}</label>
                        </div>
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="textarea">
                        <textarea placeholder="{{ __('content.Сообщение') }}" name="message" id="" cols="30" rows="10"
                                  required></textarea>
                        <span class="placeholder"></span>
                    </div>
                    <div class="invalid-feedback">
                    </div>
                    <div class="form-group form-group_100">
                        <div class="policy">
                            <label class="radio__container">
                                {{ __('content.Предоставляя свои персональные данные, Вы соглашаетесь на их обработку с соответствии с') }}
                                <a target="_blank"
                                   href="{{ route('privacy_' . app()->getLocale()) }}">{{ __('content.Политикой обработки персональных данных ООО «Связь ВСД»') }}</a>.
                                {{ __('content.Пожалуйста, внимательно ознакомьтесь с документом, доступным по ссылке, перед направлением своих персональных данных компании') }}
                                .
                                {{ __('content.Согласие распространяется на ситуации, когда какое-либо из полей выше содержит персональные данные.') }}
                                <input name="agreement" type="checkbox" required checked>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="captcha">
                        <span class="alert">{{ __('content.Пожалуйста, подтвердите, что вы не робот') }}</span>
                        {!! Captcha::displayJs(['lang' => app()->getLocale()], []) !!}
                        {!! Captcha::display([], ['lang' => app()->getLocale()]) !!}
                    </div>
                    <button class="btn gradient">
                        {{ __('content.Отправить') }}
                    </button>
                    <div class="modal">
                        <div class="modal-content">
                            <div class="success-message">
                                <p>{{ __('content.Спасибо за обращение!') }}</p>
                                <p>
                                    {!! __('content.Мы рассмотрим ваше обращение в соответствии с внутренними комплаенс-процедурами компании и&nbsp;свяжемся с вами при необходимости и в случае, если вы оставили данные для обратной связи.') !!}</p>
                            </div>
                            <div class="errors">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
