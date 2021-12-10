<div class="text-input before-people">
    <input id="name" placeholder="{{ __('content.Ваше имя') }}" name="name" type="text">
    <label for="name">{{ __('content.Ваше имя') }} <span class="required">*</span></label>
</div>
<div class="text-input before-organization">
    <input id="organization" name="organization" type="text" placeholder="{{ __('content.Организация') }}">
    <label for="organization">{{ __('content.Организация') }}</label>
</div>
<div class="text-input before-phone-pink">
    <input id="phone" name="phone" data-mask="phone" type="text" placeholder="{{ __('content.Телефон') }}">
    <label for="phone">{{ __('content.Телефон') }} <span class="required">*</span></label>
</div>
<div class="text-input before-mail-pink">
    <input id="email" name="email" type="text" placeholder="Email" data-mask="email" >
    <label for="email">Business email  <span class="required">*</span></label>
</div>
<div class="textarea">
    <textarea placeholder="{{ __('content.Сообщение') }}" name="message" id="" cols="30" rows="10"></textarea>
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

        {{ __('content.Предоставляя свои персональные данные, Вы соглашаетесь на их обработку с соответствии с') }}
        <a target="_blank" href="{{ route('privacy_' . app()->getLocale()) }}">{{__('content.Политикой обработки персональных данных ООО «Связь ВСД».')}}</a>
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
<button class="btn gradient">
    {{ __('content.Отправить') }}
</button>
