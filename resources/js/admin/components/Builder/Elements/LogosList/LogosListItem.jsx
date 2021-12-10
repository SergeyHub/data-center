import React from 'react';

const LogosListItem = (props) => {
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
    </div>
  );
};

export default LogosListItem;
