import React, { useContext, useEffect } from 'react';
import { ContextBuilder } from '../../../../context/builder/reducers';
import UploadButton from '../UploadButton';
import TextArea from '../TextArea';
import Input from '../Input';

const QuoteComponent = (props) => {
  const { state, dispatch } = useContext(ContextBuilder);
  const defaultData = { img: '', quote: '', name: '', post: '' };

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

  const uploadHandler = (index, url) => {
    const data = state.data;
    data.value[props.index].content.img = url;
    dispatchChanges(data);
  };

  const onNameChange = (index, name, text) => {
    const data = state.data;
    data.value[props.index].content.name = text;
    dispatchChanges(data);
  };

  const onPostChange = (index, name, text) => {
    const data = state.data;
    data.value[props.index].content.post = text;
    dispatchChanges(data);
  };

  const onTextChange = (index, name, text) => {
    const data = state.data;
    data.value[props.index].content.quote = text;
    dispatchChanges(data);
  };

  return (
    <div className={`quote-component col`}>
      <div className='form-group'>
        <label>Имя</label>
        <Input
          value={content.name}
          onChange={onNameChange}
          placeholder="Оставьте поле пустым, чтобы заголовок блока не отображался"
        />
      </div>
      <div className='form-group'>
        <label>Должность</label>
        <Input
          value={content.post}
          onChange={onPostChange}
          placeholder="Оставьте поле пустым, чтобы заголовок блока не отображался"
        />
      </div>
      <div className='form-group'>
        <label>Цитата</label>
        <TextArea onChange={onTextChange} value={content.quote} />
      </div>
      <label>Изображение</label>
      <div className="images">
        <div className="img-container">
          <div className="img-wrap">
            <img src={content.img} alt=""/>
          </div>
        </div>
      </div>
      <div className="images">
        <div className="image-container">
          <div className="uploader">
            <UploadButton onClick={uploadHandler} />
          </div>
        </div>
      </div>
    </div>
  );
};

export default QuoteComponent;
