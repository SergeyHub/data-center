import React, { useContext, useEffect } from 'react';
import { ContextBuilder } from '../../../../context/builder/reducers';
import UploadButton from '../UploadButton';
import Input from '../Input';

const ImageComponent = (props) => {
  const { state, dispatch } = useContext(ContextBuilder);
  useEffect(() => {
    if (!props.content) {
      const data = state.data;
      data.value[props.index].content = { img: '', title: '', subTitle: '' };
      dispatch({ type: 'data', payload: { data: data } });
    }
  });

  const content = props.content || { img: '', title: '', subTitle: '' };

  const dispatchChanges = (data) => {
    dispatch({ type: 'data', payload: { data: data } });
  };

  const uploadHandler = (index, url) => {
    const data = state.data;
    data.value[props.index].content.img = url;
    dispatchChanges(data);
  };

  const onTitleChange = (index, name, text) => {
    const data = state.data;
    data.value[props.index].content.title = text;
    dispatchChanges(data);
  };

  const onSubtitleChange = (index, name, text) => {
    const data = state.data;
    data.value[props.index].content.subTitle = text;
    dispatchChanges(data);
  };

  return (
    <div className={`image-component col`}>
      <label>Заголовок</label>
      <Input
        onChange={onTitleChange}
        value={content.title}
        placeholder="Оставьте поле пустым, чтобы заголовок блока не отображался"
      />
      <label>Подзаголовок</label>
      <Input
        onChange={onSubtitleChange}
        value={content.subTitle}
        placeholder="Оставьте поле пустым, чтобы заголовок блока не отображался"
      />
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
            <UploadButton onClick={uploadHandler}/>
          </div>
        </div>
      </div>
    </div>
  );
};

export default ImageComponent;
