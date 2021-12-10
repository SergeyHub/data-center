import React from 'react';
import Input from '../Input';
import TextArea from '../TextArea';

const CardItem = (props) => {
  const onSubtitleChange = (index, name, text) => {
    props.onTextChange(text, props.index);
  };

  const onItemTitleChange = (index, name, text) => {
    props.onItemTitleChange(text, props.index);
  };

  return (
    <div className="col">
      <label>Изображение</label>
      <div className="images">
        <div className="img-container">
          <div className="img-wrap">
            <img src={props.img} alt=""/>
          </div>
        </div>
      </div>

      <div className="form-group">
        <label>Заголовок:</label>
        <Input onChange={onItemTitleChange} value={props.title || ''} />
        <label>Подзаголовок:</label>
        <TextArea onChange={onSubtitleChange} value={props.subtitle} />
      </div>
    </div>
  );
};

export default CardItem;
