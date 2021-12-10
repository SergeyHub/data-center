import React, { useContext, useEffect } from 'react';
import { ContextBuilder } from './../../../context/builder/reducers';
import Input from './Input';

const Map = (props) => {
  const { state, dispatch } = useContext(ContextBuilder);
  const defaultData = { name: '', lon: '', lat: '' };

  useEffect(() => {
    if (!props.content) {
      const data = state.data;
      data.value[props.index].content = { ...defaultData };
      dispatch({ type: 'data', payload: { data: data } });
    }
  });

  const content = props.content || { ...defaultData };

  const dispatchChanges = (data) => {
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onNameChange = (index, name, text) => {
    const data = state.data;
    data.value[props.index].content.name = text;
    dispatchChanges(data);
  };

  const onLonChange = (index, name, text) => {
    const data = state.data;
    data.value[props.index].content.lon = text;
    dispatchChanges(data);
  };

  const onLatChange = (index, name, text) => {
    const data = state.data;
    data.value[props.index].content.lat = text;
    dispatchChanges(data);
  };

  return (
    <div className={`map-component col`}>
      <div className='form-group'>
        <label>Имя</label>
        <Input
          value={content.name}
          onChange={onNameChange}
          placeholder="Оставьте поле пустым, чтобы заголовок блока не отображался"
        />
      </div>
      <div className='form-group'>
        <label>Широта</label>
        <Input
          value={content.lat}
          onChange={onLatChange}
        />
      </div>
      <div className='form-group'>
        <label>Долгота</label>
        <Input
          value={content.lon}
          onChange={onLonChange}
        />
      </div>
    </div>
  );
};

export default Map;
