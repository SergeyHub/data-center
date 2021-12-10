import React from 'react';
import TextArea from '../TextArea';
import Input from '../Input';

const VacancyBadgeItem = (props) => {
  const onTitleChange = (index, name, text) => {
    props.onTitleChange(text, props.index);
  };

  const onDescriptionChange = (index, name, text) => {
    props.onDescriptionChange(text, props.index);
  };

  const onLinkChange = (index, name, text) => {
    props.onLinkChange(text, props.index);
  };

  return (
    <div className="col">
      <div className="form-group">
        <label>URL:</label>
        <Input value={ props.link || '' } onChange={ onLinkChange }/>
      </div>
      <div className="form-group">
        <label>Заголовок:</label>
        <Input value={ props.title || '' } onChange={ onTitleChange }/>
      </div>
      <div className="form-group">
        <label>Описание:</label>
        <TextArea onChange={ onDescriptionChange } value={ props.description || '' }/>
      </div>
    </div>
  );
};

export default VacancyBadgeItem;
