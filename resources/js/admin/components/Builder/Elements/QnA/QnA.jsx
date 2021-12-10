import React, { useContext, useEffect } from 'react';
import { ContextBuilder } from '../../../../context/builder/reducers';
import { SortableContainer, SortableElement, arrayMove } from 'react-sortable-hoc';
import QnAItem from './QnAItem';
import Input from '../Input';

const SortableItem = SortableElement((props) => {
  return (
    <div className="icons-list-item">
      <QnAItem
        index={props.itemIndex}
        question={props.element.question}
        answer={props.element.answer}
        onQuestionChange={props.onQuestionChange}
        onAnswerChange={props.onAnswerChange}
      />
      <div className="delete" onClick={props.deleteButtonHandler} index={props.itemIndex}>
        <i className="far fa-trash-alt"></i>
      </div>
    </div>
  );
});

const SortableList = SortableContainer((props) => {
  return (
    <div className={`icons-list cols-5`}>
      <label>Заголовок</label>
      <Input
        onChange={props.onTitleChange}
        value={props.title || ''}
        placeholder="Оставьте поле пустым, чтобы заголовок блока не отображался"
      />
      <label>Подзаголовок</label>
      <Input onChange={props.onSubtitleChange}
        value={props.subtitle}
      />
      {props.elements.map((element, index) => {
        return (
          <SortableItem
            key={`element-${index}`}
            index={index}
            itemIndex={index}
            element={element}
            onSortEnd={props.onSortEnd}
            onQuestionChange={props.onQuestionChange}
            onAnswerChange={props.onAnswerChange}
            addIdem={props.addIdem}
            deleteButtonHandler={props.deleteButtonHandler}
          />
        );
      })}
      <div className="add-element">
        <div className="button" onClick={props.addIdem}>
          +
        </div>
      </div>
    </div>
  );
});

const QnA = (props) => {
  const { state, dispatch } = useContext(ContextBuilder);

  useEffect(() => {
    if (!props.content) {
      const data = state.data;
      data.value[props.index].content = {
        title: '',
        elements: []
      };
      dispatch({ type: 'data', payload: { data: data } });
    }
  });

  let elements = props.content.elements || [];

  const addIdem = () => {
    const data = state.data;
    elements = [...elements, { question: '', answer: '' }];
    data.value[props.index].content.elements = elements;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onQuestionChange = (text, index) => {
    const data = state.data;
    elements[index].question = text;
    data.value[props.index].content.elements = elements;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onAnswerChange = (text, index) => {
    const data = state.data;
    elements[index].answer = text;
    data.value[props.index].content.elements = elements;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onTitleChange = (index, name, title) => {
    const data = state.data;
    data.value[props.index].content.title = title;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onSubtitleChange = (index, name, value) => {
    const data = state.data;
    data.value[props.index].content.subtitle = value;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const deleteButtonHandler = (e) => {
    const index = e.currentTarget.getAttribute('index');
    const data = state.data;
    elements.splice(index, 1);
    data.value[props.index].content.elements = elements;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onSortEnd = ({ oldIndex, newIndex }) => {
    const data = state.data;
    elements = arrayMove(elements, oldIndex, newIndex);
    data.value[props.index].content.elements = elements;
    dispatch({ type: 'data', payload: { data: data } });
  };

  return (
    <SortableList
      title={props.content.title}
      subtitle={props.content.subtitle}
      elements={elements}
      onSortEnd={onSortEnd}
      deleteButtonHandler={deleteButtonHandler}
      onQuestionChange={onQuestionChange}
      onAnswerChange={onAnswerChange}
      onTitleChange={onTitleChange}
      onSubtitleChange={onSubtitleChange}
      addIdem={addIdem}
      axis="xy"
      useDragHandle
    />
  );
};

export default QnA;
