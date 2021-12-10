import React from 'react';
import TextArea from '../TextArea';
import Input from '../Input';

const VacancyQuoteItem = (props) => {
  const onTextChange = (index, name, text) => {
    props.onTextChange(text, props.index);
  };
  const onNameChange = (index, name, text) => {
    props.onNameChange(text, props.index);
  };
  const onTitleChange = (index, name, text) => {
    props.onTitleChange(text, props.index);
  };
  const onLinkChange = (index, name, text) => {
    props.onLinkChange(text, props.index);
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
        <label>Имя:</label>
        <Input value={props.name || ''} onChange={onNameChange}/>
      </div>
      <div className="form-group">
        <label>Должность:</label>
        <Input value={props.title || ''} onChange={onTitleChange}/>
      </div>
      <div className="form-group">
        <label>Ссылки [html]:</label>
        <Input value={props.link || ''} onChange={onLinkChange}/>
      </div>
      <div className="form-group">
        <label>Текст:</label>
        <TextArea onChange={onTextChange} value={props.text || ''}/>
      </div>
    </div>
  );
};

export default VacancyQuoteItem;
