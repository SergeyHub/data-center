import React, { useContext, useEffect } from 'react';
import { ContextBuilder } from '../../../../context/builder/reducers';
import { SortableContainer, SortableElement, sortableHandle, arrayMove } from 'react-sortable-hoc';
import LogosListItem from './LogosListItem';
import Input from '../Input';
import UploadButton from '../UploadButton';
import { Select } from 'antd';
import { Option } from 'antd/lib/mentions';

const DragHandle = sortableHandle((props) => (
  <LogosListItem
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
      <UploadButton index={props.itemIndex} onClick={props.onItemImgChange}/>
      <div className="delete" onClick={props.deleteButtonHandler} index={props.itemIndex}>
        <i className="far fa-trash-alt"></i>
      </div>
    </div>
  );
});

const SortableList = SortableContainer((props) => {
  return (
    <div className={`icons-list cols-5`}>
      <h2>Logo list</h2>
      <label>Заголовок</label>
      <Input
        onChange={props.onTitleChange}
        value={props.title}
        placeholder="Оставьте поле пустым, чтобы заголовок блока не отображался"
      />
      <label>Фон</label>
      <Select onChange={props.onBackgroundChange} value={props.background || 'white'}>
        <Option value="white">Белый</Option>
        <Option value="grey">Серый</Option>
      </Select>
      {props.elements.map((element, index) => {
        return (
          <SortableItem
            key={`element-${index}`}
            index={index}
            itemIndex={index}
            element={element}
            onSortEnd={props.onSortEnd}
            onItemImgChange={props.onItemImgChange}
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

const LogosList = (props) => {
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
    elements = [...elements, { text: '', img: '' }];
    data.value[props.index].content.elements = elements;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onItemImgChange = (index, url) => {
    const data = state.data;
    elements[index].img = url;
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
      elements={elements}
      onSortEnd={onSortEnd}
      deleteButtonHandler={deleteButtonHandler}
      onItemImgChange={onItemImgChange}
      onTitleChange={onTitleChange}
      onBackgroundChange={onBackgroundChange}
      addIdem={addIdem}
      axis="xy"
      useDragHandle
    />
  );
};

export default LogosList;
