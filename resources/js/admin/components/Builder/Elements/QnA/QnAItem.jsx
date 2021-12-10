import React from 'react';
import TextArea from '../TextArea';
import TinyMce from '../TinyMce';

const QnAItem = (props) => {
  const onQuestionChange = (index, name, text) => {
    props.onQuestionChange(text, props.index);
  };

  const onAnswerChange = (index, name, text) => {
    props.onAnswerChange(text, props.index);
  };

  return (
    <div className="col">
      <div className="form-group">
        <label>Вопрос:</label>
        <TextArea onChange={onQuestionChange} value={props.question || ''}/>
      </div>
      <div className="form-group">
        <label>Ответ:</label>
        <TinyMce
          id={`tiny-${props.index}`}
          key={`tiny-${props.index}`}
          onChange={onAnswerChange}
          value={props.answer || ''}/>
      </div>
    </div>
  );
};

export default QnAItem;
