@section('styles')
    @parent
    <link rel="stylesheet" href="{{  mix('/css/research/form.css') }}">
@endsection
<div class="content research-form" id="research-form">
    <h2>{{ __('content.Заполните форму, чтобы скачать отчет') }}</h2>
    <form action="{{ route('form.research') }}" method="POST" name="research_request">
        <input type="hidden" name="type" value="research"/>
        <input type="hidden" name="page" value="{{ url()->full() }}" >
        <div class="grid">
            <div class="text-input">
                <input name="name" placeholder="{{ __('content.Ваше имя') }}" type="text" autocomplete="name"
                       required>
            </div>
            <div class="text-input">
                <input name="company" placeholder="{{ __('content.Компания') }}" type="text" autocomplete="organization"
                       required>
            </div>
            <div class="text-input">
                <input name="email" placeholder="{{ __('content.Пожалуйста, укажите вашу рабочую почту') }}" type="email"
                       autocomplete="email"
                       required>
            </div>
            <div class="policy">
                <label class="radio__container">
                    {{ __('content.Предоставляя свои персональные данные, Вы соглашаетесь на их обработку с соответствии с') }}
                    <a target="_blank" href="{{ route('privacy_' . app()->getLocale()) }}">{{ __('content.Политикой обработки персональных данных ООО «Связь ВСД»') }}</a>. {{ __('content.Пожалуйста, внимательно ознакомьтесь
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
        </div>
    </form>
</div>
