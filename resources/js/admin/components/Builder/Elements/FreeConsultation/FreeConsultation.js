import React, { useContext, useEffect } from 'react';
import { ContextBuilder } from '../../../../context/builder/reducers';
import Input from '../Input';

const FreeConsultation = (props) => {
  const { state, dispatch } = useContext(ContextBuilder);
  useEffect(() => {
    if (!props.content) {
      const data = state.data;
      data.value[props.index].content = { title: '' };
      dispatch({ type: 'data', payload: { data: data } });
    }
  });

  const content = props.content || { title: '' };

  const dispatchChanges = (data) => {
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onTitleChange = (index, name, text) => {
    const data = state.data;
    data.value[props.index].content.title = text;
    dispatchChanges(data);
  };

  return (
    <div>
      <h2>Бесплатная консультация</h2>
      <div className='form-group'>
        <label>Заголовок</label>
        <Input
          value={content.title}
          onChange={onTitleChange}
          placeholder="Оставьте поле пустым, чтобы заголовок блока не отображался"
        />
      </div>
    </div>
  );
};

export default FreeConsultation;
