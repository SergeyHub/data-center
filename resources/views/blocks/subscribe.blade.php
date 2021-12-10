<div id="news-subscribe" class="subscribe bg-grey block">
    <div class="content">
        <h2>{{ __('content.Будь в тренде IT-технологий') }}</h2>
        <span>{{ __('content.Подпишись  на наши новости по e-mail') }}</span>
        <form action="{{ route('form.subscribe') }}">
            <input type="hidden" name="type" value="news subscribe" />
            <input type="hidden" name="page" value="{{ url()->full() }}" >
            <div class="text-input before-mail">
                <input name="email" placeholder="E-mail" type="email">
            </div>
            <button class="btn gradient">{{ __('content.Подписаться') }}</button>
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
