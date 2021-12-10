import moment from 'moment';
import 'moment/locale/es';
const $ = require('jquery');
const $eventCalendar = $('#event-calendar');
const locale = $eventCalendar.data('locale');
moment.locale(locale);

const weekDays = moment.weekdaysShort(true);

let events = [];

const curMoment = moment();

const viewDate = moment();

$.ajax({
  url: '/about/events/data',
  method: 'get'
}).done(function (data) {
  events = data;
  showEvents(curMoment);
});

const eventElement = (date, title, link) => {
  const m = moment(date);
  return `<li id="40">
    <time datetime="${m}">
    <em>${m.format('DD MMMM YYYY HH:mm')}</em><small>${m.format('HH:mm')}</small></time>
    <a href="${link}" target="_blank" class="event-calendar-event-title">${title}</a>
    <p class="event-calendar-event-desc"></p>
    </li>`;
};
const noEventsContent = locale === 'ru' ? 'Нет запланированных событий' : 'No scheduled events';

const noEvents = `<li class="event-calendar-noEvents" style=""><p>${noEventsContent}</p></li>`;

weekDays.forEach(day => {
  $('.day-names ul').append(`<li class="event-calendar-day-header">${day}</li>`);
});

const startWeekDay = (moment) => {
  return moment.clone().startOf('month').format('d');
};

function showMonth (moment) {
  const countMonthDays = moment.daysInMonth();

  const calendarDays = $('#event-calendar .calendar-days ul');
  const getDay = (day) => $(`<li id="day-list_${day}" rel="${day}" class="event-calendar-day "><a href="#">${day}</a></li>`);
  const emptyDay = $('<li class="event-calendar-day event-calendar-empty"></li>');
  $('.event-calendar-monthTitle').html(moment.format('MMMM YYYY'));
  $('#event-calendar .date').html(curMoment.date());
  $('#event-calendar .month').html(curMoment.format('MMMM'));

  calendarDays.html('');

  for (let i = 1; i < startWeekDay(moment); i++) {
    calendarDays.append(emptyDay.clone());
  }

  for (let i = 1; i <= countMonthDays; i++) {
    const day = getDay(i);
    if (moment.date() === i && moment.month() === curMoment.month()) {
      day.addClass('today');
    }
    calendarDays.append(day);
  }
  showEvents(moment);
}

showMonth(moment());

$('.event-calendar-next').click(function (e) {
  e.preventDefault();
  viewDate.add(1, 'M');
  showMonth(viewDate);
});

$('.event-calendar-prev').click(function (e) {
  e.preventDefault();
  viewDate.subtract(1, 'M');
  showMonth(viewDate);
});

function showEvents (calendarMoment) {
  const eventListElement = $('.event-calendar-list');
  eventListElement.html('');

  const eventsDate = events.filter(item => {
    return moment(item.time_start).format('MM-YYYY') === calendarMoment.format('MM-YYYY');
  });

  if (eventsDate.length === 0) {
    eventListElement.append(noEvents);
  }

  eventsDate.forEach(item => {
    const evtElement = eventElement(item.time_start, item.name, `/about/events/${item.slug}`);
    eventListElement.append($(evtElement));
    $(`#day-list_${moment(item.time_start).date()}`).addClass('event-calendar-day-with-events');
  });
}
