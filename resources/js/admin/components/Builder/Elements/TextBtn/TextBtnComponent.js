import React, { useContext, useEffect } from 'react';
import { ContextBuilder } from '../../../../context/builder/reducers';
import TinyMce from '../TinyMce';
import Input from '../Input';
import { Button, Popover } from 'antd';
import ColorPicker from '../ColorPicker';

const TextBtnComponent = (props) => {
  const { state, dispatch } = useContext(ContextBuilder);

  useEffect(() => {
    if (!props.content) {
      const data = state.data;
      data.value[props.index].content = { text: '', btnText: '', btnLink: '', isColumn: false };
      dispatch({ type: 'data', payload: { data: data } });
    }
  });

  const content = props.content || { text: '', btnText: '', btnLink: '', isColumn: false };

  const dispatchChanges = (data) => {
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onTextChange = (index, name, value) => {
    const data = state.data;
    data.value[props.index].content.text = value;
    dispatchChanges(data);
  };

  const onBtnTextChange = (index, name, value) => {
    const data = state.data;
    data.value[props.index].content.btnText = value;
    dispatchChanges(data);
  };

  const onBtnLinkChange = (index, name, value) => {
    const data = state.data;
    data.value[props.index].content.btnLink = value;
    dispatchChanges(data);
  };

  const onBtnAdditionalTextChange = (index, name, value) => {
    const data = state.data;
    data.value[props.index].content.btnAdditionalText = value;
    dispatchChanges(data);
  };

  const onBtnAdditionalLinkChange = (index, name, value) => {
    const data = state.data;
    data.value[props.index].content.btnAdditionalLink = value;
    dispatchChanges(data);
  };

  const isColumnChange = (index, name, value) => {
    const data = state.data;
    data.value[props.index].content.isColumn = value;
    dispatchChanges(data);
  };

  const onColorChange = (color) => {
    const data = state.data;
    data.value[props.index].content.background = color.hex;
    dispatchChanges(data);
  };

  const onColorFontChange = (color) => {
    const data = state.data;
    data.value[props.index].content.colorFont = color.hex;
    dispatchChanges(data);
  };

  const colorPickerBackground = (
    <ColorPicker value={content.background} onChange={onColorChange}/>
  );

  const colorPickerFont = (
    <ColorPicker value={content.colorFont} onChange={onColorFontChange}/>
  );

  return (
    <div className="btn-text">
      <div className="form-group">
        <label>Текст</label>
        <TinyMce onChange={onTextChange} value={content.text}/>
      </div>
      <div className="flex">
        <div className="form-group mr-4">
          <label>Background:</label><br/>
          <Popover content={colorPickerBackground} title="Title" trigger="click">
            <Button style={{ background: content.background }}>Выбрать...</Button>
          </Popover>
        </div>
        <div className="form-group">
          <label>Цвет шрифта:</label><br/>
          <Popover content={colorPickerFont} title="Title" trigger="click">
            <Button style={{ background: content.colorFont }}>Выбрать...</Button>
          </Popover>
        </div>
      </div>
      <div className="btn-content">
        <h3>Ссылка</h3>
        <div className="form-group">
          <label>Текст</label>
          <Input onChange={onBtnTextChange} value={content.btnText}/>
        </div>
        <div className="form-group">
          <label>Ссылка</label>
          <Input onChange={onBtnLinkChange} value={content.btnLink}/>
        </div>
      </div>
      <div className="btn-content">
        <h3>Дополнительная ссылка</h3>
        <div className="form-group">
          <label>Текст</label>
          <Input onChange={onBtnAdditionalTextChange} value={content.btnAdditionalText}/>
        </div>
        <div className="form-group">
          <label>Ссылка</label>
          <Input onChange={onBtnAdditionalLinkChange} value={content.btnAdditionalLink}/>
        </div>
      </div>
      <div className="form-group form-check">
        <Input id="isColumn" checked={JSON.parse(content.isColumn)} className="form-check-input" onChange={isColumnChange} type="checkbox"
          value={JSON.parse(content.isColumn)}/>
        <label htmlFor="isColumn" className="form-check-label">Вертикально</label>
      </div>
    </div>
  );
};

export default TextBtnComponent;
