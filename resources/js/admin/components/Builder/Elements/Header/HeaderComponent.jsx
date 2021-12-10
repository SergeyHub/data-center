import React, { useContext, useEffect } from 'react';
import { ContextBuilder } from '../../../../context/builder/reducers';
import Input from '../Input';
import UploadButton from '../UploadButton';
import TinyMce from '../TinyMce';

const HeaderComponent = (props) => {
  const { state, dispatch } = useContext(ContextBuilder);

  useEffect(() => {
    if (!props.content) {
      const data = state.data;
      data.value[props.index].content = { primaryLink: {}, secondaryLink: {}, thirdLink: {} };
      dispatch({ type: 'data', payload: { data: data } });
    }
  });

  const content = props.content || { primaryLink: {}, secondaryLink: {}, thirdLink: {} };

  console.log(content);

  const dispatchChanges = (data) => {
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onTitleChange = (index, name, title) => {
    const data = state.data;
    data.value[props.index].content.title = title;
    dispatchChanges(data);
  };

  const onTextChange = (index, name, text) => {
    const data = state.data;
    data.value[props.index].content.text = text;
    dispatchChanges(data);
  };

  const onPrimaryLinkChange = (index, name, url) => {
    const data = state.data;
    data.value[props.index].content.primaryLink.url = url;
    dispatchChanges(data);
  };

  const onSecondaryLinkChange = (index, name, url) => {
    const data = state.data;
    data.value[props.index].content.secondaryLink.url = url;
    dispatchChanges(data);
  };

  const onThirdLinkChange = (index, name, url) => {
    const data = state.data;
    if (data.value[props.index].content.thirdLink === undefined) {
      data.value[props.index].content.thirdLink = {};
    }
    data.value[props.index].content.thirdLink.url = url;
    dispatchChanges(data);
  };

  const onPrimaryLinkTitleChange = (index, name, title) => {
    const data = state.data;
    data.value[props.index].content.primaryLink.title = title;
    dispatchChanges(data);
  };

  const onSecondaryLinkTitleChange = (index, name, title) => {
    const data = state.data;
    data.value[props.index].content.secondaryLink.title = title;
    dispatchChanges(data);
  };

  const onThirdLinkTitleChange = (index, name, title) => {
    const data = state.data;
    if (data.value[props.index].content.thirdLink === undefined) {
      data.value[props.index].content.thirdLink = {};
    }
    data.value[props.index].content.thirdLink.title = title;
    dispatchChanges(data);
  };

  const uploadHandler = (index, url) => {
    const data = state.data;
    data.value[props.index].content.img = url;
    dispatchChanges(data);
  };

  return (
    <div className={`header-component col`}>
      <label>Заголовок</label>
      <Input
        value={content.title || ''}
        onChange={onTitleChange}
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
            <UploadButton onClick={uploadHandler} />
          </div>
        </div>
      </div><br/>
      <label>Текст</label>
      {/* <TextArea onChange={onTextChange} value={content.text} /> */}
      <TinyMce onChange={onTextChange} value={content.text} />
      <div className="form-group form-group_100">
        <label>Текст</label>
        <Input
          value={content.primaryLink.title || ''}
          onChange={onPrimaryLinkTitleChange}
          placeholder="Оставьте пустым, чтобы ссылка не отображалась"
        />
        <label>Ссылка</label>
        <Input
          value={content.primaryLink.url || ''}
          onChange={onPrimaryLinkChange}
          placeholder="Оставьте пустым, чтобы ссылка не отображалась"
        />
      </div>
      <div className="form-group form-group_100">
        <label>Текст</label>
        <Input
          value={content.secondaryLink.title || ''}
          onChange={onSecondaryLinkTitleChange}
          placeholder="Оставьте пустым, чтобы ссылка не отображалась"
        />
        <label>Ссылка</label>
        <Input
          value={content.secondaryLink.url || ''}
          onChange={onSecondaryLinkChange}
          placeholder="Оставьте пустым, чтобы ссылка не отображалась"
        />
      </div>
      <div className="form-group form-group_100">
        <label>Текст(кнопка для popup)</label>
        <Input
          value={content.thirdLink ? content.thirdLink.title || '' : ''}
          onChange={onThirdLinkTitleChange}
          placeholder="Оставьте пустым, чтобы ссылка не отображалась"
        />
        <label>ID popup(кнопка для popup)</label>
        <Input
          value={content.thirdLink ? content.thirdLink.url || '' : ''}
          onChange={onThirdLinkChange}
          placeholder="Оставьте пустым, чтобы ссылка не отображалась"
        />
      </div>
    </div>
  );
};

export default HeaderComponent;
