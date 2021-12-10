import React, { useContext, useEffect } from 'react';
import { ContextBuilder } from '../../../../context/builder/reducers';
import { SortableContainer, SortableElement, sortableHandle, arrayMove } from 'react-sortable-hoc';
import Input from '../Input';
import CardItem from './CardItem';
import UploadButton from '../UploadButton';
import Select from '../Select';

const DragHandle = sortableHandle((props) => (
  <CardItem
    index={props.itemIndex}
    subtitle={props.element.subtitle}
    title={props.element.title}
    img={props.element.img}
    onTextChange={props.onTextChange}
    onItemTitleChange={props.onItemTitleChange}
  />
));

const SortableItem = SortableElement((props) => {
  const uploadHandler = (index, url) => {
    props.uploadHandler(props.itemIndex, url);
  };

  return (
    <div className="icons-list-item">
      <DragHandle {...props} />
      <UploadButton onClick={uploadHandler}/>
      <div className="delete" onClick={props.deleteButtonHandler} index={props.itemIndex}>
        <i className="far fa-trash-alt"></i>
      </div>
    </div>
  );
});

const SortableList = SortableContainer((props) => {
  return (
    <div className={`cards`}>
      <h2>Cards</h2>
      <label>Заголовок</label>
      <Input
        onChange={props.onHeaderChange}
        value={props.title || ''}
        placeholder="Оставьте поле пустым, чтобы заголовок блока не отображался"
      />
      <label>Фон</label>
      <Select onChange={props.onBackgroundChange} value={props.background || 'white'}>
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
            onItemTitleChange={props.onItemTitleChange}
            uploadHandler={props.uploadHandler}
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

const CardList = (props) => {
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
    elements = [...elements, { title: '', subtitle: '', img: null }];
    data.value[props.index].content.elements = elements;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onTextChange = (text, index) => {
    const data = state.data;
    elements[index].subtitle = text;
    data.value[props.index].content.elements = elements;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onBackgroundChange = (val, index) => {
    const data = state.data;
    data.value[props.index].content.background = val;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onItemTitleChange = (title, index) => {
    const data = state.data;
    elements[index].title = title;
    data.value[props.index].content.elements = elements;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const uploadHandler = (index, url) => {
    const data = state.data;
    elements[index].img = url;
    data.value[props.index].content.elements = elements;
    dispatch({ type: 'data', payload: { data } });
  };

  const onHeaderChange = (index, name, title) => {
    const data = state.data;
    data.value[props.index].content.title = title;
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
      onBackgroundChange={onBackgroundChange}
      elements={elements}
      onSortEnd={onSortEnd}
      deleteButtonHandler={deleteButtonHandler}
      onTextChange={onTextChange}
      onItemTitleChange={onItemTitleChange}
      onHeaderChange={onHeaderChange}
      addIdem={addIdem}
      uploadHandler={uploadHandler}
      axis="xy"
      useDragHandle
    />
  );
};

export default CardList;
