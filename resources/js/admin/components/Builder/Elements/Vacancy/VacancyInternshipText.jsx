import React, { useContext, useEffect } from 'react';
import { ContextBuilder } from '../../../../context/builder/reducers';
import Input from '../Input';
import TinyMce from '../TinyMce';

const VacancyInternshipText = (props) => {
  const { state, dispatch } = useContext(ContextBuilder);
  const defaultData = { heading: '', text: '' };

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

  const onHeadingChange = (index, name, text) => {
    const data = state.data;
    data.value[props.index].content.heading = text;
    dispatchChanges(data);
  };

  const onTinyMceChange = (index, name, text) => {
    const data = state.data;
    data.value[props.index].content.text = text;
    dispatchChanges(data);
  };

  const onDescriptionChange = (index, name, text) => {
    const data = state.data;
    data.value[props.index].content.description = text;
    dispatchChanges(data);
  };

  return (
    <div className={`quote-component col`}>
      <h3>Вакансии: Стажировка</h3>
      <div className='form-group'>
        <label>Заголовок</label>
        <Input
          value={content.heading}
          onChange={onHeadingChange}
        />
      </div>
      <div className='form-group'>
        <label>Краткое описание</label>
        <TinyMce
          value={content.description}
          onChange={onDescriptionChange}
        />
      </div>
      <div className='form-group'>
        <label>Текст</label>
        <TinyMce
          value={content.text}
          onChange={onTinyMceChange}
        />
      </div>
    </div>
  );
};

export default VacancyInternshipText;
