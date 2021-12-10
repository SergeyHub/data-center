import React, { useContext, useEffect } from 'react';
import { ContextBuilder } from '../../../../context/builder/reducers';
import { SortableContainer, SortableElement, sortableHandle, arrayMove } from 'react-sortable-hoc';
import CheckedListItem from './CheckedListItem';
import Input from '../Input';
import Select from '../Select';

const DragHandle = sortableHandle((props) => (
  <CheckedListItem
    index={props.itemIndex}
    text={props.element.text}
    img={props.element.img}
    onTextChange={props.onTextChange}
  />
));

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
    <div className={`icons-list cols-5`}>
      <h2>Checked list</h2>
      <label>Заголовок</label>
      <Input
        onChange={props.onTitleChange}
        value={props.title || ''}
        placeholder="Оставьте поле пустым, чтобы заголовок блока не отображался"
      />
      <label>Заголовок</label>
      <Input
        onChange={props.onSubTitleChange}
        value={props.subTitle || ''}
        placeholder="Оставьте поле пустым, чтобы заголовок блока не отображался"
      />
      <label>Фон</label>
      <Select onChange={props.onBackgroundChange} value={props.background}>
        <Select.Option value="white">Белый</Select.Option>
        <Select.Option value="grey">Серый</Select.Option>
      </Select>
      {props.elements.map((element, index) => {
        return (
          <SortableItem
            key={`element-${index}`}
            index={index}
            itemIndex={index}
            element={element}
            onSortEnd={props.onSortEnd}
            onTextChange={props.onTextChange}
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

const CheckedList = (props) => {
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
    elements = [...elements, { text: '' }];
    data.value[props.index].content.elements = elements;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onTextChange = (text, index) => {
    const data = state.data;
    elements[index].text = text;
    data.value[props.index].content.elements = elements;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onTitleChange = (index, name, title) => {
    const data = state.data;
    data.value[props.index].content.title = title;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onBackgroundChange = (index, name, value) => {
    const data = state.data;
    data.value[props.index].content.background = value;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onSubTitleChange = (index, name, text) => {
    const data = state.data;
    data.value[props.index].content.subTitle = text;
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
      title={props.content.title || ''}
      background={props.content.background || 'white'}
      subTitle={props.content.subTitle || ''}
      elements={elements}
      onSortEnd={onSortEnd}
      deleteButtonHandler={deleteButtonHandler}
      onTextChange={onTextChange}
      onTitleChange={onTitleChange}
      onBackgroundChange={onBackgroundChange}
      onSubTitleChange={onSubTitleChange}
      addIdem={addIdem}
      axis="xy"
      useDragHandle
    />
  );
};

export default CheckedList;
