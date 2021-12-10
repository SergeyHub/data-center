import React, { useContext, useEffect } from 'react';
import { ContextBuilder } from '../../../../context/builder/reducers';
import { SortableContainer, SortableElement, sortableHandle, arrayMove } from 'react-sortable-hoc';
import ColoredListItem from './ColoredIconsListItem';
import Input from '../Input';
import Select from '../Select';

const DragHandle = sortableHandle((props) => (
  <ColoredListItem
    index={props.itemIndex}
    text={props.element.text}
    title={props.element.title}
    color={props.element.color}
    onColorChange={props.onColorChange}
    onTextChange={props.onTextChange}
    onItemTitleChange={props.onItemTitleChange}
  />
));

const SortableItem = SortableElement((props) => {
  return (
    <div className="colored-list-icons-item">
      <DragHandle {...props} />
      <div className="delete" onClick={props.deleteButtonHandler} index={props.itemIndex}>
        <i className="far fa-trash-alt"></i>
      </div>
    </div>
  );
});

const SortableList = SortableContainer((props) => {
  return (
    <div className={`colored-list-icons cols-5`}>
      <h2>Colored icon list</h2>
      <div className="form-group">
        <label>Заголовок</label>
        <Input
          onChange={props.onTitleChange}
          value={props.title || ''}
          placeholder="Оставьте поле пустым, чтобы заголовок блока не отображался"
        />
      </div>
      <div className="form-group">
        <label>Подзаголовк</label>
        <Input
          onChange={props.onSubTitleChange}
          value={props.subTitle || ''}
          placeholder="Оставьте поле пустым, чтобы заголовок блока не отображался"
        />
      </div>
      <label>Фон</label>
      <Select onChange={props.onBackgroundChange} value={props.background || 'white'}>
        <Select.Option value="white">Белый</Select.Option>
        <Select.Option value="grey">Серый</Select.Option>
      </Select>
      <div className="elements">
        {props.elements.map((element, index) => {
          return (
            <SortableItem
              key={`element-${index}`}
              index={index}
              itemIndex={index}
              element={element}
              onSortEnd={props.onSortEnd}
              onTextChange={props.onTextChange}
              onItemTitleChange={props.onItemTitleChange}
              onColorChange={props.onColorChange}
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
    </div>
  );
});

const ColoredIconsList = (props) => {
  const { state, dispatch } = useContext(ContextBuilder);

  useEffect(() => {
    if (!props.content) {
      const data = state.data;
      data.value[props.index].content = {
        title: '',
        background: '',
        elements: []
      };
      dispatch({ type: 'data', payload: { data: data } });
    }
  });

  let elements = props.content.elements || [];

  const addIdem = () => {
    const data = state.data;
    elements = [...elements, { text: '', color: '#fff' }];
    data.value[props.index].content.elements = elements;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onColorChange = (color, index) => {
    const data = state.data;
    elements[index].color = color.hex;
    data.value[props.index].content.elements = elements;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onTextChange = (text, index) => {
    const data = state.data;
    elements[index].text = text;
    data.value[props.index].content.elements = elements;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onItemTitleChange = (title, index) => {
    const data = state.data;
    elements[index].title = title;
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

  const onSubTitleChange = (index, name, val) => {
    const data = state.data;
    data.value[props.index].content.subTitle = val;
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
      background={props.content.background}
      subTitle={props.content.subTitle}
      elements={elements}
      onSortEnd={onSortEnd}
      deleteButtonHandler={deleteButtonHandler}
      onTextChange={onTextChange}
      onItemTitleChange={onItemTitleChange}
      onTitleChange={onTitleChange}
      onBackgroundChange={onBackgroundChange}
      onSubTitleChange={onSubTitleChange}
      onColorChange={onColorChange}
      addIdem={addIdem}
      axis="xy"
      useDragHandle
    />
  );
};

export default ColoredIconsList;
