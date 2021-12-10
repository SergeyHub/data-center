<div id="resume-form" class="gray">
    <div class="content modal__form">
        <h2>{{ __('content.Стать частью нашей команды') }}</h2>
        <form action="{{ route('form.application') }}" method="POST" name="application"
              id="application" enctype="multipart/form-data">
            <input type="hidden" name="type" value="resume"/>
            <input type="hidden" name="page" value="{{ url()->full() }}" >
            <div class="vacancy__row">
                <div class="text-input before-people">
                    <input id="vacancy-name" name="name" placeholder="{{ __('content.Ваше имя') }}" type="text" autocomplete="name">
                    <label for="vacancy-name">{{ __('content.Ваше имя') }} <span class="required">*</span></label>
                </div>
                <div class="text-input before-phone-pink">
                    <input id="vacancy-phone" name="phone" placeholder="+7 (___) ___ __ __" type="tel" autocomplete="true" data-mask="phone">
                    <label for="vacancy-phone">{{ __('content.Телефон') }} <span class="required">*</span></label>
                </div>
                <div class="text-input before-mail-pink">
                    <input id="consultation-email" name="email" placeholder="E-mail" type="email" autocomplete="email" data-mask="email">
                    <label for="consultation-email">Email <span class="required">*</span></label>
                </div>
                <div class="text-input before-organization">
                    <input type="file"
                           id="cv" name="cv"
                           placeholder="{{ __('content.Резюме') }}">
                    <label for="cv">{{ __('content.Резюме') }} <span class="attache-icon"><img src="/images/icons/attach_file-24px.svg"></span></label>
                </div>
            </div>
            <div class="policy">
                <label class="radio__container">
                    {{ __('content.Предоставляя свои персональные данные, Вы соглашаетесь на их обработку с соответствии с') }}
                    <a target="_blank" href="{{ route('privacy_' . app()->getLocale()) }}">{{ __('content.Политикой обработки персональных данных ООО «Связь ВСД»') }}</a>.
                    {{ __('content.Пожалуйста, внимательно ознакомьтесь
                    с документом, доступным по ссылке, перед направлением своих персональных данных компании') }}
                    <input name="policy" type="checkbox" required>
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="captcha">
                <span class="alert">{{ __('content.Пожалуйста, подтвердите, что вы не робот') }}</span>
                {!! Captcha::displayJs(['lang' => app()->getLocale()], []) !!}
                {!! Captcha::display([], ['lang' => app()->getLocale()]) !!}
            </div>
            <button class="btn gradient" >{{ __('content.Отправить') }}</button>
            <div class="modal">
                <div class="modal-content">
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
