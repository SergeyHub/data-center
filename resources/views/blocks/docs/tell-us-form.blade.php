<div class="company-office__form">
    <div class="col-md-6 col-sm-12 company-ermakova" style="display: inline-block;">
        @if (!empty($content['name']))
            <img src="{{ $content['photo'] ?? '' }}" alt="{{ $content['name'] ?? '' }}" class="document__image">
            <p><strong>{{ $content['name'] ?? '' }}</strong></p>
            <p>{{ $content['title'] ?? '' }}</p>
            <a href="#modal-certificate" data-target="modal-certificate"
               class="docs-popup-form">{{ $content['cert_name'] ?? '' }}</a>
            <div id="modal-certificate" class="modal__container">
                <button class="close">
                    <img src="/images/icons/close.svg" alt="{{ __('Закрыть окно') }}">
                </button>
                <div class="content">
                    <img src="{{ $content['cert_photo'] ?? '' }}" alt="{{ $content['cert_name'] ?? '' }}"
                         class="docs-image">
                </div>
            </div>
    </div>
    <div class="col-md-6 col-sm-12 company-office__form-right" style="display: grid;row-gap: 7px;">
        <div class="company-office__form__label">
            {!! $content['text'] !!}
        </div>
        <div class="company-office__form__text">
            {{ __('content.Или заполните форму:') }}
        </div>
        <div class="company-office__form__btn">
            <a data-target="modal-tell-us"
               class="btn docs-popup-form"
               href="#">{{ __('content.Сообщите нам') }}</a>
        </div>
        @endif
    </div>
</div>
