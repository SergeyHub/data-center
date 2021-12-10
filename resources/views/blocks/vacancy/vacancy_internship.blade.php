<div class="text-banner text-center bg-gradient">
    <div class="row content">
        <div class="col-lg-12">
            <h2 class="benefits__title benefits__title_text-banner"><span
                        class="blue">{{ $content['heading'] }}</span>
            </h2>
            <div class="text-banner__caption vacancy-text">
                {!! $content['description'] !!}
            </div>
            <div class="dropdown dropdown_careers vacancy-text" id="careersDropdown">
                {!! $content['text'] !!}
                <div class="vacancies-form js-stash-form container">
                    @include('blocks.vacancy.internship-form')
                </div>
            </div>
        </div>
        <div class="text-banner__action">
            <a class="arrow-before showDropdown">{{ __('content.Подробнее') }}</a>
        </div>
    </div>
</div>
</div>
