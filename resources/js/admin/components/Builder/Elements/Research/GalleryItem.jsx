import React from 'react';
import Input from '../Input';

const GalleryItem = (props) => {
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
      <div className="form-group">
        <label>Заголовок:</label>
        <Input value={props.title || ''} onChange={onTitleChange}/>
      </div>
    </div>
  );
};

export default GalleryItem;
