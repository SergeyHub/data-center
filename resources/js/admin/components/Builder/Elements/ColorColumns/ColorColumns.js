import React, { useContext, useEffect } from 'react';
import { ContextBuilder } from '../../../../context/builder/reducers';
import Input from '../Input';
import { Button, Popover } from 'antd';
import ColorPicker from '../ColorPicker';
import TinyMce from '../TinyMce';

const ColorColumns = (props) => {
  const { state, dispatch } = useContext(ContextBuilder);
  const defaultElements = [
    { title: '', text: '', background: '' },
    { title: '', text: '', background: '' },
    { title: '', text: '', background: '' }
  ];

  useEffect(() => {
    if (!props.content) {
      const data = state.data;
      data.value[props.index].content = { elements: [...defaultElements], header: '', subtitle: '' };
      dispatch({ type: 'data', payload: { data: data } });
    }
  });

  const content = props.content || {
    header: '',
    subtitle: '',
    elements: [
      ...defaultElements
    ]
  };

  const dispatchChanges = (data) => {
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onHeaderChange = (index, name, value) => {
    const data = state.data;
    data.value[props.index].content.header = value;
    dispatchChanges(data);
  };

  const onSubtitleChange = (index, name, value) => {
    const data = state.data;
    data.value[props.index].content.subtitle = value;
    dispatchChanges(data);
  };

  const onTitleChange = (i) => (index, name, value) => {
    const data = state.data;
    data.value[props.index].content.elements[i].title = value;
    dispatchChanges(data);
  };

  const onTextChange = (i) => (index, name, value) => {
    const data = state.data;
    data.value[props.index].content.elements[i].text = value;
    dispatchChanges(data);
  };

  const onColorChange = (i) => (color) => {
    const data = state.data;
    data.value[props.index].content.elements[i].background = color.hex;
    dispatchChanges(data);
  };

  const colorPickerBackground = (i) => {
    return (
      <ColorPicker value={content.elements[i].background} onChange={onColorChange(i)}/>
    );
  };

  return (
    <div className="color-columns">
      <div>
        <div className="form-group">
          <label>Заголовок</label>
          <Input onChange={onHeaderChange} value={content.header} />
        </div>
        <div className="form-group">
          <label>Подзаголовок</label>
          <Input onChange={onSubtitleChange} value={content.subtitle} />
        </div>
        {content.elements.map(function (item, i) {
          return (
            <div className="column" key={i}>
              <h2>Блок {i + 1}</h2>
              <div className="form-group mr-4">
                <label>Background:</label><br/>
                <Popover content={colorPickerBackground(i)} title="Title" trigger="click">
                  <Button style={{ background: item.background }}>Выбрать...</Button>
                </Popover>
              </div>
              <div className="form-group">
                <label>Заголовок</label>
                <Input onChange={onTitleChange(i)} value={content.elements[i].title}/>
              </div>
              <div className="form-group">
                <label>Текст</label>
                <TinyMce onChange={onTextChange(i)} value={content.elements[i].text}/>
              </div>
            </div>
          );
        })}
      </div>
    </div>
  );
};

export default ColorColumns;
