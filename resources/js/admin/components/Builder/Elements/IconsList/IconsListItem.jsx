import React from 'react';
import TextArea from '../TextArea';
import Input from '../Input';

const IconsListItem = (props) => {
  const onTextChange = (index, name, text) => {
    props.onTextChange(text, props.index);
  };

  const onTitleChange = (index, name, text) => {
    props.onTitleChange(text, props.index);
  };

  return (
    <div className="col">
      <div className="form-group">
        <label>Изображение</label>
        <div className="images">
          <div className="img-container">
            <div className="img-wrap">
              <img src={props.img} alt=""/>
            </div>
          </div>
        </div>
      </div>
      {props.type === 'icons_list_vertical' &&
        <div className="form-group">
          <label>Заголовок</label>
          <Input value={props.title || ''} onChange={onTitleChange} />
        </div>
      }
      <div className="form-group">
        <label>Текст:</label>
        <TextArea onChange={onTextChange} value={props.text || ''} />
      </div>
    </div>
  );
};

export default IconsListItem;
