@inject('langHelper', 'App\Services\LangHelper')

<nav class="lang-select">
    <ul class="lang-select__current-lang">
        @if (app()->isLocale('ru'))
            <li>
                {{ __('content.Рус') }}
            </li>
        @elseif(app()->isLocale('en'))
            <li>
                {{ __('content.Eng') }}
            </li>
        @endif
    </ul>
    <ul class="links__children lang-select__langs">
        <li>
            <a class="lang-select__lang" href="{{ $langHelper->getRuRoute() }}"
               title="{{ __('content.Переключить на ') }}{{ __('content.Русский') }}">{{ __('content.Русский') }}</a>
        </li>
        <li>
            <a class="lang-select__lang" href="{{ $langHelper->getEnRoute() }}"
               title="{{ __('content.Switch to ') }}{{ __('content.English') }}">{{ __('content.English') }}</a>
        </li>
        <li>
            <a class="lang-select__lang" href="https://cn.admindatacenter.com/"
               title="{{ __('content.Switch to ') }}{{ __('content.Chinese') }}">{{ __('content.Chinese') }}</a>
        </li>
    </ul>
    <ul class="lang-select__mobile-langs">
        <li>
            <a class="lang-select__lang {{ app()->getLocale() === 'ru' ? 'active' : '' }}"
               href="{{ $langHelper->getRuRoute() }}"
               title="{{ __('content.Переключить на ') }}{{ __('content.Русский') }}">{{ __('content.Рус') }}</a>
        </li>
        <li>
            <a class="lang-select__lang {{ app()->getLocale() === 'en' ? 'active' : '' }}"
               href="{{ $langHelper->getEnRoute() }}"
               title="{{ __('content.Switch to ') }}{{ __('content.English') }}">{{ __('content.Eng') }}</a>
        </li>
        <li>
            <a class="lang-select__lang" href="https://cn.admindatacenter.com/"
               title="{{ __('content.Switch to ') }}{{ __('content.Chinese') }}">{{ __('content.Cn') }}</a>
        </li>
    </ul>
</nav>
