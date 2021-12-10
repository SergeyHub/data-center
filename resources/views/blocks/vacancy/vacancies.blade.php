@inject('vacancyRepository', 'App\Services\VacancyRepository')
@if ($vacancyRepository->getAllVacancies()->count() > 0)
    <h2 class="benefits__title benefits__title_text-banner">
        <span class="blue">{{ __('content.Открытые вакансии') }}</span>
    </h2>
@endif
@if ($vacancyRepository->getAllVacancies()->count() > 0)
    <div class="content vacancies">
        @foreach ($vacancyRepository->getAllVacancies() as $key => $vacancy)
            <div class="vacancies__item" id="bx_3218110189_{{ $vacancy->id }}">
                <div class="vacancies__title">
                    {!! $vacancy->name !!}
                </div>
                <div class="vacancies__caption">
                </div>
                <div class="vacancies__collapse-content js-vacancies-item-info">
                    <div id="vacancy{{ $vacancy->id }}" class="vacancies__collapse-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="vacancies__title vacancies__title_inner">
                                    {!! $vacancy->name !!}
                                </div>
                                <div class="popup-close"></div>
                            </div>
                            @if (!empty($vacancy->responsibility))
                                <div class="col-lg-6 col-md-12">
                                    <h4 class="toggler active">{{ __('content.Обязанности') }}</h4>
                                    <div class="item-circs show">
                                        {!! $vacancy->responsibility !!}
                                    </div>
                                </div>
                            @endif
                            @if (!empty($vacancy->requirement))
                                <div class="col-lg-6 col-md-12">
                                    <h4 class="toggler active">{{ __('content.Требования') }}</h4>
                                    <div class="item-circs show">
                                        {!! $vacancy->requirement !!}
                                    </div>
                                </div>
                            @endif
                            @if (!empty($vacancy->conditions))
                                <div class="col-lg-6 col-md-12">
                                    <h4 class="toggler active">{{ __('content.Условия') }}</h4>
                                    <div class="item-circs show">
                                        {!! $vacancy->conditions !!}
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="row">
                            @include('blocks.vacancy.application-form-simple', ['key' => $key])
                        </div>
                    </div>
                </div>
                <div class="vacancies__action">
                    <a data-id="vacancy{{ $vacancy->id }}" class="btn btn_high gradient vacancies__show" href="#"
                       data-on=""
                       data-off="{{ __('content.Узнать больше') }}" tabindex="0">{{ __('content.Узнать больше') }}</a>
                </div>
            </div>
        @endforeach
    </div>
@endif
<div class="vacancies__collapse">
    @foreach ($vacancyRepository->getAllVacancies() as $vacancy)
        <div id="vacancy{{ $vacancy->id }}" class="vacancies__collapse-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="vacancies__title vacancies__title_inner">
                        {{ $vacancy->name }}
                    </div>
                    <div class="vacancies__caption">
                        <p>
                        </p>
                        <p>
                        </p>
                    </div>
                    <div class="popup-close"></div>
                </div>
                @if (!empty($vacancy->responsibility))
                    <div class="col-lg-6 col-md-12">
                        <h4 class="toggler active">{{ __('content.Обязанности') }}</h4>
                        <div class="item-circs show">
                            {!! $vacancy->responsibility !!}
                        </div>
                    </div>
                @endif
                @if (!empty($vacancy->requirement))
                    <div class="col-lg-6 col-md-12">
                        <h4 class="toggler active">{{ __('content.Требования') }}</h4>
                        <div class="item-circs show">
                            {!! $vacancy->requirement !!}
                        </div>
                    </div>
                @endif
                @if (!empty($vacancy->conditions))
                    <div class="col-lg-6 col-md-12">
                        <h4 class="toggler active">{{ __('content.Условия') }}<</h4>
                        <div class="item-circs show">
                            {!! $vacancy->conditions !!}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    @endforeach
</div>

