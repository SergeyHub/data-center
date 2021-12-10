<div id="event-calendar" class="event-calendar-wrap" data-current-month="6" data-current-year="2020" data-locale="{{ app()->getLocale() }}">
    <div class="event-calendar-slider">
        <div class="event-calendar-today">
            <div class="date"></div>
            <div class="month"></div>
        </div>
        <div class="event-calendar-monthWrap event-calendar-currentMonth">
            <div class="event-calendar-currentTitle"><a href="#" class="event-calendar-monthTitle"></a></div>
            <div class="day-names">
                <ul class="event-calendar-daysList event-calendar-showAsWeek event-calendar-showDayNames">
                </ul>
            </div>
            <div class="calendar-days">
                <ul class="event-calendar-daysList event-calendar-showAsWeek event-calendar-showDayNames">
                </ul>
            </div>
        </div>
        <a href="#" class="event-calendar-arrow event-calendar-prev"><span>prev</span></a>
        <a href="#" class="event-calendar-arrow event-calendar-next"><span>next</span></a>
    </div>
    <div class="event-calendar-list-wrap" style="width: 380px;"><p class="event-calendar-subtitle">{{ __('content.Следующие события') }}:</p>
        <span class="event-calendar-loading" style="display: none;">loading...</span>
        <div class="event-calendar-list-content">
            <ul class="event-calendar-list" style="opacity: 1; left: 0px; height: auto; display: block;">
                <li class="event-calendar-noEvents"><p>{{ __('content.Нет запланированных событий') }}</p></li>
            </ul>
        </div>
    </div>
</div>
