import React from 'react';
import DateTime from 'react-datetime';
import ReactDOM from 'react-dom';
import moment from 'moment';

require('moment/locale/ru');
const $ = require('jquery');

const DatePicker = (props) => {
  const [value, setValue] = React.useState(props.value);
  return (
    <DateTime dateFormat="DD.MM.YYYY"
      inputProps={{ name: props.name, autoComplete: 'off' }}
      locale="ru"
      onChange={setValue}
      timeFormat="HH:mm"
      value={value}/>);
};

$(document).ready(function () {
  $('.datepicker').each(function () {
    const date = $(this).attr('value');
    const dateM = moment(date, 'YYYY-MM-DD HH:mm:SS');
    if (dateM.isValid()) {
      $(this).attr('value', dateM.format('DD.MM.YYYY HH:mm'));
    }
  });
  $('.datepicker').each(function () {
    const value = $(this).attr('value');
    const name = $(this).attr('name');
    ReactDOM.render(
      <DatePicker value={value} name={name} />, $(this).get()[0]);
  });
});
