import React, { useContext, useEffect } from 'react';
import { ContextBuilder } from '../../../../context/builder/reducers';
import TinyMce from '../TinyMce';
import Input from '../Input';
import UploadButton from '../UploadButton';

const DocsForm = (props) => {
  const { state, dispatch } = useContext(ContextBuilder);
  const defaultData = {
    photo: '',
    name: '',
    cert_name: '',
    cert_photo: '',
    title: '',
    text: ''
  };

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

  const onCertNameChange = (index, name, text) => {
    const data = state.data;
    data.value[props.index].content.cert_name = text;
    dispatchChanges(data);
  };

  const onTitleChange = (index, name, text) => {
    const data = state.data;
    data.value[props.index].content.title = text;
    dispatchChanges(data);
  };

  const onTextChange = (index, name, text) => {
    const data = state.data;
    data.value[props.index].content.text = text;
    dispatchChanges(data);
  };

  const uploadPhotoHandler = (index, url) => {
    const data = state.data;
    data.value[props.index].content.photo = url;
    dispatchChanges(data);
  };

  const uploadCertHandler = (index, url) => {
    const data = state.data;
    data.value[props.index].content.cert_photo = url;
    dispatchChanges(data);
  };

  const deletePhotoButtonHandler = (e) => {
    const data = state.data;
    data.value[props.index].content.photo = '';
    dispatchChanges(data);
  };

  const deleteCertButtonHandler = (e) => {
    const data = state.data;
    data.value[props.index].content.cert_photo = '';
    dispatchChanges(data);
  };

  return (
    <div className={ `quote-component col` }>
      <h3>Специалист</h3>
      <div className="icons-list-item">
        <UploadButton onClick={ uploadPhotoHandler }/>
        <div className="delete" onClick={ deletePhotoButtonHandler } index={ props.itemIndex }>
          <i className="far fa-trash-alt"></i>
        </div>
        <div className="form-group">
          <label>Фотография</label>
          <div className="images">
            <div className="img-container">
              <div className="img-wrap">
                <img src={ content.photo } alt=""/>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div className="icons-list-item">
        <UploadButton onClick={ uploadCertHandler }/>
        <div className="delete" onClick={ deleteCertButtonHandler } index={ props.itemIndex }>
          <i className="far fa-trash-alt"></i>
        </div>
        <div className="form-group">
          <label>Фотография сертификата</label>
          <div className="images">
            <div className="img-container">
              <div className="img-wrap">
                <img src={ content.cert_photo } alt=""/>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div className="form-group">
        <label>Название сертификата:</label>
        <Input value={ content.cert_name || '' } onChange={ onCertNameChange }/>
      </div>
      <div className="form-group">
        <label>Имя:</label>
        <Input value={ content.name || '' } onChange={ onNameChange }/>
      </div>
      <div className="form-group">
        <label>Должность:</label>
        <Input value={ content.title || '' } onChange={ onTitleChange }/>
      </div>
      <div className="form-group">
        <label>Текст:</label>
        <TinyMce onChange={ onTextChange } value={ content.text || '' }/>
      </div>
    </div>
  );
};

export default DocsForm;
