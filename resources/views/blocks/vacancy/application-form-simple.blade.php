<div class="content modal__form">
    <h2>{{ __('content.Стать частью нашей команды') }}</h2>
    <form action="{{ route('form.applicationSimple') }}" method="POST" name="applicationSimple"
          id="applicationSimple" enctype="multipart/form-data">
        <input type="hidden" name="type" value="resume"/>
        <input type="hidden" name="page" value="{{ url()->full() }}">
        <div class="vacancy__row">
            <div class="text-input before-people">
                <input id="app-simple-name_{{ $key }}" name="name" placeholder="{{ __('content.Ваше имя') }}" type="text"
                       autocomplete="name" required>
                <label for="app-simple-name_{{ $key }}">{{ __('content.Ваше имя') }} <span class="required">*</span></label>
            </div>
            <div class="text-input before-phone-pink">
                <input id="app-simple-phone_{{ $key }}" name="phone" placeholder="+7 (___) ___ __ __" type="tel" autocomplete="tel" data-mask="phone"
                       required>
                <label for="app-simple-phone_{{ $key }}">{{ __('content.Телефон') }} <span class="required">*</span></label>
            </div>
            <div class="text-input before-mail-pink">
                <input id="app-simple-email_{{ $key }}" name="email" placeholder="E-mail" type="email" autocomplete="email" data-mask="email" required>
                <label for="app-simple-email_{{ $key }}">Email <span class="required">*</span></label>
            </div>
        </div>
        <div class="policy">
            <label class="radio__container">
                {{ __('content.Предоставляя свои персональные данные, Вы соглашаетесь на их обработку с соответствии с') }}
                <a target="_blank"
                   href="{{ route('privacy_' . app()->getLocale()) }}">{{ __('content.Политикой обработки персональных данных ООО «Связь ВСД»') }}</a>.
                {{ __('content.Пожалуйста, внимательно ознакомьтесь
                с документом, доступным по ссылке, перед направлением своих персональных данных компании') }}
                <input name="policy" type="checkbox" required>
                <span class="checkmark"></span>
            </label>
        </div>
        <input type="submit" class="btn gradient mt-1" value="{{ __('content.Отправить') }}"
               onclick="metrikaCounter('job')">
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
