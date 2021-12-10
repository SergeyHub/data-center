import React, { useContext, useEffect } from 'react';
import Input from '../Input';
import { ContextBuilder } from '../../../../context/builder/reducers';
import { SortableContainer, SortableElement, sortableHandle, arrayMove } from 'react-sortable-hoc';

const DragHandle = sortableHandle((props) => {
  return (
    <div>
      <Input
        index={props.itemIndex}
        value={props.element.text}
        onChange={props.onTextChange}
        placeholder="Текст"/>
    </div>
  );
});

const SortableItem = SortableElement((props) => {
  return (
    <div className="icons-list-item">
      <DragHandle {...props} />
      <div className="delete" onClick={props.deleteButtonHandler} index={props.itemIndex}>
        <i className="far fa-trash-alt"></i>
      </div>
    </div>
  );
});

const SortableList = SortableContainer((props) => {
  return (
    <div>
      <label>Текст</label>
      <Input
        onChange={props.onTitleChange}
        value={props.title || ''}
        placeholder="Оставьте поле пустым, чтобы заголовок блока не отображался"
      />
      {props.elements.map((element, index) => {
        return (
          <SortableItem
            key={`element-${index}`}
            index={index}
            itemIndex={index}
            element={element}
            onSortEnd={props.onSortEnd}
            addIdem={props.addIdem}
            onTextChange={props.onTextChange}
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

const SimpleListComponent = (props) => {
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

  const onTitleChange = (index, name, title) => {
    const data = state.data;
    data.value[props.index].content.title = title;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onTextChange = (index, name, title) => {
    const data = state.data;
    data.value[props.index].content.title = title;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const addIdem = () => {
    const data = state.data;
    elements = [...elements, { text: '' }];
    data.value[props.index].content.elements = elements;
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
    <div className="simple-list">
      <SortableList
        title={props.content.title}
        elements={elements}
        onSortEnd={onSortEnd}
        deleteButtonHandler={deleteButtonHandler}
        onTitleChange={onTitleChange}
        onTextChange={onTextChange}
        addIdem={addIdem}
        axis="xy"
        useDragHandle
      />
    </div>
  );
};

export default SimpleListComponent;
