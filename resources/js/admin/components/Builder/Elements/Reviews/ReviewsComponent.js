import React, { useContext, useEffect } from 'react';
import { ContextBuilder } from '../../../../context/builder/reducers';
import Input from '../Input';
import TextArea from '../TextArea';

const ReviewsComponent = (props) => {
  const { state, dispatch } = useContext(ContextBuilder);
  const defaultData = { title: '', caption: '' };

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

  const onTitleChange = (index, name, text) => {
    const data = state.data;
    data.value[props.index].content.title = text;
    dispatchChanges(data);
  };

  const onCaptionChange = (index, name, text) => {
    const data = state.data;
    data.value[props.index].content.caption = text;
    dispatchChanges(data);
  };

  return (
    <div className="reviews">
      <h2>Отзывы наших клиентов</h2>
      <div className='form-group'>
        <label>Заголовок</label>
        <Input
          value={content.title}
          onChange={onTitleChange}
          placeholder="Оставьте поле пустым, чтобы заголовок блока не отображался"
        />
      </div>
      <div className='form-group'>
        <label>Подпись</label>
        <TextArea onChange={onCaptionChange} value={content.caption} />
      </div>
    </div>
  );
};

export default ReviewsComponent;
