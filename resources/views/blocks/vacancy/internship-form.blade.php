<div class="content">
    <h2>{{ __('content.Анкета на стажировку') }}</h2>
    <form action="{{ route('form.internship') }}" method="POST"
          id="internship" >
        <input type="hidden" name="type" value="internship"/>
        <input type="hidden" name="page" value="{{ url()->full() }}" >
        <div class="grid grid_2">
            <div class="text-input">
                <input name="last_name" placeholder="{{ __('content.Фамилия') }}" type="text" autocomplete="family-name"
                       required>

            </div>
            <div class="text-input">
                <input name="name" placeholder="{{ __('content.Имя') }}" type="text" autocomplete="given-name" required>
            </div>
            <div class="text-input">
                <input name="middle_name" placeholder="{{ __('content.Отчество') }}" type="text" autocomplete="additional-name"
                       required>
            </div>
            <div class="text-input">
                <input name="birthday" placeholder="{{ __('content.Дата рождения') }}" title="{{ __('content.Дата рождения') }}" type="date" autocomplete="bday" required>
            </div>
            <div class="checkboxes">
                <div>
                    <span>{{ __('content.Ваш регион') }}</span>
                </div>
                <div>
                    <label class="radio__container">{{ __('content.Москва') }}
                        <input name="city_id" type="radio" value="1" checked>
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div>
                    <label class="radio__container">{{ __('content.Санкт-Петербург') }}
                        <input name="city_id" type="radio" value="2">
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>
            <div class="text-input before-phone-pink">
                <input name="phone" placeholder="+7 (___) ___ __ __" type="tel" autocomplete="tel" required>
            </div>
        </div>
        <hr>
        <div class="grid grid_2">
            <div class="text-input">
                <input name="uni_name" placeholder="{{ __('content.Название учебного заведения') }}" type="text">
            </div>
            <div class="text-input">
                <input name="faculty" placeholder="{{ __('content.Факультет') }}" type="text">
            </div>
        </div>
        <div class="grid grid_3">
            <div class="text-input">
                <input name="speciality" placeholder="{{ __('content.Специальность') }}" type="text">
            </div>
            <div class="text-input">
                <input name="enroll_year" placeholder="{{ __('content.Год поступления') }}" type="number">
            </div>
            <div class="text-input">
                <input name="graduate_year" placeholder="{{ __('content.Год окончания') }}" type="number">
            </div>
        </div>
        <div class="grid grid_2">
            <textarea placeholder="{{ __('content.Опыт работы') }}" name="work_experience" id="work_experience" cols="30" rows="10"></textarea>
            <textarea placeholder="{{ __('content.Информация об участии в стажировках других компаний') }}"
                      name="other_internships" id="other_internships"
                      cols="30"
                      rows="10"></textarea>
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
            {{ __('content.Отклик') }}
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
    </form>
</div>
