import React from 'react';
import TinyMce from '../TinyMce';
const CompanyItem = (props) => {
  const onTextChange = (index, name, text) => {
    props.onTextChange(text, props.index);
  };

  return (
    <div className="col">
      <div className="form-group">
        <label>Фотография</label>
        <div className="images">
          <div className="img-container">
            <div className="img-wrap">
              <img src={props.img} alt=""/>
            </div>
          </div>
        </div>
      </div>
      <div className="form-group">
        <label>Текст:</label>
        <TinyMce
          value={props.text || ''}
          onChange={onTextChange}
        />
      </div>
    </div>
  );
};

export default CompanyItem;
