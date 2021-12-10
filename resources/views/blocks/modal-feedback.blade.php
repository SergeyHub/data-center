<div id="modal-feedback" class="modal__container feedback">
    <button class="close">
        <img src="/images/icons/close.svg" alt="">
    </button>
    <div class="content modal__form">
        <h2>{{ __('content.Форма обратной связи') }}</h2>
        <form action="{{ route('feedback.create') }}" method="post">
            @csrf
            <input type="hidden" name="type" value="feedback"/>
            <input type="hidden" name="page" value="{{ url()->full() }}" />
            <div class="text-input">
                <input id="fb-consultation-organization" name="company" placeholder="{{ __('content.Наименование компании') }}" type="text">
                <label for="fb-consultation-organization">{{ __('content.Организация') }} </label>
            </div>
            <div class="text-input">
                <input id="fb-consultation-email" name="email" placeholder="email" type="text">
                <label for="fb-consultation-email">Business email <span class="required">*</span></label>
            </div>
            <div class="estimate">
                <div class="title">{{ __('content.Оцените общее качество услуг') }}</div>
                <div class="estimate-content">
                    <div class="value" data-num="1">
                    </div>
                    <div class="value" data-num="2">
                    </div>
                    <div class="value" data-num="3">
                    </div>
                    <div class="value" data-num="4">
                    </div>
                    <div class="value" data-num="5">
                    </div>
                </div>
                <input type="hidden" name="estimate">
            </div>
            <div class="textarea">
                <textarea placeholder="{{ __('content.Сообщение') }}" name="message" id="" cols="30" rows="5"></textarea>
                {{--<span class="placeholder"></span>--}}
            </div>
            <div class="policy">
                <label class="radio__container">{{ __('content.Предоставляя свои персональные данные, Вы соглашаетесь на их обработку в соответствии с') }}
                    <a target="_blank" href="{{ route('privacy_' . app()->getLocale()) }}">{{ __('content.Политикой обработки персональных данных ООО «Связь ВСД»') }}</a>. {{ __('content.Пожалуйста, внимательно ознакомьтесь
                    с документом, доступным по ссылке, перед направлением своих персональных данных компании') }}
                    <input name="policy" type="checkbox" checked>
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
