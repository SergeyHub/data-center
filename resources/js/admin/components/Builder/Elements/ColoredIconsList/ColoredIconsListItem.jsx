import React from 'react';
import Input from '../Input';
import { Popover, Button } from 'antd';
import TextArea from '../TextArea';
import ColorPicker from '../ColorPicker';

const ColoredListItem = (props) => {
  const onColorChange = (color) => {
    props.onColorChange(color, props.index);
  };

  const onTextChange = (index, name, text) => {
    props.onTextChange(text, props.index);
  };

  const onItemTitleChange = (index, name, text) => {
    props.onItemTitleChange(text, props.index);
  };

  const content = (
    <ColorPicker value={ props.color } onChange={onColorChange}/>
  );

  return (
    <div className="col">
      <div className="form-group">
        <label>Цвет иконки:</label><br/>
        <Popover content={content} title="Title" trigger="click">
          <Button style={{ background: props.color }}>Выбрать...</Button>
        </Popover>
      </div>
      <div className="form-group">
        <label>Заголовок:</label>
        <Input onChange={onItemTitleChange} value={props.title || ''} />
        <label>Текст:</label>
        <TextArea onChange={onTextChange} value={props.text || ''} />
      </div>
    </div>
  );
};

export default ColoredListItem;
