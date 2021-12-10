<div id="free-consultation" class="free-consultation">
    <div class="content">
        <h2>
            @if(!empty(trim($content['title'] ?? '')))
                {{ $content['title'] ?? '' }}
            @else
                {{ __('content.Запрос на бесплатную консультацию') }}
            @endif
        </h2>
        <form action="{{ route('form.submit') }}">
            <input type="hidden" name="type" value="free consultation"/>
            <input type="hidden" name="page" value="{{ url()->full() }}">
            <div class="text-input before-people">
                <input id="consultation-name" placeholder="{{ __('content.Ваше имя') }}" name="name" type="text">
                <label for="consultation-name">{{ __('content.Ваше имя') }} <span class="required">*</span></label>
            </div>
            <div class="text-input before-organization">
                <input id="consultation-organization" name="organization" type="text"
                       placeholder="{{ __('content.Организация') }}">
                <label for="consultation-organization">{{ __('content.Организация') }} </label>
            </div>
            <div class="text-input before-phone-pink">
                <input id="consultation-phone" name="phone" type="text" placeholder="{{ __('content.Телефон') }}" data-mask="phone">
                <label for="consultation-phone">{{ __('content.Телефон') }}<span
                            class="required">*</span></label>
            </div>
            <div class="text-input before-mail-pink">
                <input id="consultation-email" name="email" type="text" placeholder="Business email" data-mask="email">
                <label for="consultation-email">Business email <span class="required">*</span></label>
            </div>
            <div class="textarea">
                <textarea placeholder="{{ __('content.Сообщение') }}" name="message" id="" cols="30"
                          rows="10"></textarea>
                {{--<span class="placeholder"></span>--}}
            </div>
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
            <div class="policy">
                <label class="radio__container">
                    {{ __('content.Предоставляя свои персональные данные, Вы соглашаетесь на их обработку в соответствии с') }}
                    <a target="_blank"
                       href="{{ route('privacy_' . app()->getLocale()) }}">{{ __('content.Политикой обработки персональных данных ООО «Связь ВСД»') }}
                        .</a>
                    {{ __('content.Пожалуйста, внимательно ознакомьтесь с документом, доступным по ссылке, перед направлением своих персональных данных компании') }}.
                    <input name="agreement" type="checkbox" checked>
                    <span class="checkmark"></span>
                </label>
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
