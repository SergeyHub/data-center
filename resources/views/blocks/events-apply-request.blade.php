<div id="events-apply-request" class="free-consultation">
    <div class="content">
        <h2>{{ __('content.Зарегистрироваться на мероприятие') }}</h2>
        <form action="{{ route('event.register') }}">
            <input type="hidden" name="type" value="event"/>
            <input type="hidden" name="page" value="{{ url()->full() }}"/>
            <div class="text-input before-people">
                <input id="event-name" name="name" name="name" placeholder="{{ __('content.Ваше имя') }}" type="text">
                <label for="event-name">{{ __('content.Ваше имя') }} <span class="required">*</span></label>
            </div>
            <div class="text-input before-organization">
                <input id="event-organization" name="organization" placeholder="{{ __('content.Организация') }}"
                       type="text">
                <label for="event-organization">{{ __('content.Организация') }} <span class="required">*</span></label>
            </div>
            <div class="text-input before-phone-pink">
                <input id="event-phone" name="phone" placeholder="+7 (___) ___ __ __" type="tel" data-mask="phone">
                <label for="event-phone">{{ __('content.Телефон') }} <span class="required">*</span></label>
            </div>
            <div class="text-input before-mail-pink">
                <input id="event-email" name="email" placeholder="E-mail" type="email" data-mask="email">
                <label for="event-email">Email <span class="required">*</span></label>
            </div>
            <div class="text-input">
                <input id="event-position" name="position" placeholder="{{ __('content.Начальник отдела') }}"
                       type="text" required>
                <label for="event-position">{{ __('content.Должность') }} <span class="required">*</span></label>
            </div>
            <div class="select-input">
                <select name="source" id="event-source" required>
                    <option value="newsletter_admin">{{ __('content.Рассылка admindatacenter') }}</option>
                    <option value="newsletter_x">{{ __('content.Рассылка/ анонс ИКС-Медиа') }}</option>
                    <option value="network">{{ __('content.Соцсети') }}</option>
                    <option value="other">{{ __('content.Другое') }}</option>
                </select>
                <label for="event-source">{{ __('content.Откуда вы узнали о мероприятии?') }} <span
                            class="required">*</span></label>
            </div>
            <div class="text-input popup-field" id="event-source_other-wrap">
                <input id="event-source_other" name="source_other" placeholder="{{ __('content.Друг рассказал') }}"
                       type="text">
                <label for="event-source_other">{{ __('content.Другое') }}
                    <span class="required">*</span></label>
            </div>
            <textarea placeholder="{{ __('content.Вопросы для спикеров') }}" name="message" id="" cols="30" rows="10"></textarea>
            <div class="policy">
                <label class="radio__container">
                    {{ __('content.Предоставляя свои персональные данные, Вы соглашаетесь на их обработку в соответствии с') }}
                    <a target="_blank"
                       href="{{ route('privacy_' . app()->getLocale()) }}">{{ __('content.Политикой обработки персональных данных ООО «Связь ВСД»') }}</a>
                    {{ __('content.Пожалуйста, внимательно ознакомьтесь
                    с документом, доступным по ссылке, перед направлением своих персональных данных компании') }}.
                    <input name="agreement" type="checkbox" checked>
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="captcha">
                <span class="alert">{{ __('content.Пожалуйста, подтвердите, что вы не робот') }}</span>
                {!! Captcha::displayJs(['lang' => app()->getLocale()], []) !!}
                {!! Captcha::display([], ['lang' => app()->getLocale()]) !!}
            </div>
            <button class="btn gradient" aria-describedby="submitHelp">
                {{ __('content.Зарегистрироваться') }}
            </button>
            <small id="submitHelp" class="form-text text-muted text-center">
                {{ __('content.Если у вас возникли сложности с отправкой заявки на регистрацию или вы не получили от нас ответа, напишите нам на') }}
                <a href="mailto:news@admindatacenter.com">news@admindatacenter.com</a>
            </small>
            <div class="modal">
                <button type="button" class="close">
                    <img src="/images/icons/close.svg" />
                </button>
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
