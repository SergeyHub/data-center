import React, { useContext, useEffect } from 'react';
import Input from '../Input';
import { ContextBuilder } from '../../../../context/builder/reducers';
import UploadButton from '../UploadButton';

const HeaderService = (props) => {
  const { state, dispatch } = useContext(ContextBuilder);
  const defaultData = { title: null, subtitle: null, img: null };

  const dispatchChanges = (data) => {
    dispatch({ type: 'data', payload: { data: data } });
  };

  useEffect(() => {
    if (!props.content) {
      const data = state.data;
      data.value[props.index].content = { ...defaultData };
      dispatchChanges(data);
    }
  });

  const onTitleChange = (index, name, text) => {
    const data = state.data;
    data.value[props.index].content.title = text;
    dispatchChanges(data);
  };

  const onSubTitleChange = (index, name, text) => {
    const data = state.data;
    data.value[props.index].content.subTitle = text;
    dispatchChanges(data);
  };

  const content = props.content || { ...defaultData };

  const uploadHandler = (index, url) => {
    const data = state.data;
    data.value[props.index].content.img = url;
    dispatchChanges(data);
  };

  return (
    <div className="header-service-component">
      <div className='form-group'>
        <label>Заголовок</label>
        <Input
          value={content.title || ''}
          onChange={onTitleChange}
          placeholder="Оставьте поле пустым, чтобы заголовок блока не отображался"
        />
      </div>
      <div className='form-group'>
        <label>Подзаголовок</label>
        <Input
          value={content.subTitle || ''}
          onChange={onSubTitleChange}
          placeholder="Оставьте поле пустым, чтобы заголовок блока не отображался"
        />
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
            <UploadButton onClick={uploadHandler}/>
          </div>
        </div>
      </div>
    </div>
  );
};

export default HeaderService;
