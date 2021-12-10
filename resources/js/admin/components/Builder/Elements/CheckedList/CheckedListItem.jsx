import React from 'react';
import TextArea from '../TextArea';

const CheckedListItem = (props) => {
  const onTextChange = (index, name, text) => {
    props.onTextChange(text, props.index);
  };

  return (
    <div className="col">
      <div className="form-group">
        <label>Текст:</label>
        <TextArea onChange={onTextChange} value={props.text} />
      </div>
    </div>
  );
};

export default CheckedListItem;
