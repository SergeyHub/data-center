import React, { useContext, useEffect } from 'react';
import { ContextBuilder } from '../../../../context/builder/reducers';
import { arrayMove, SortableContainer, SortableElement, sortableHandle } from 'react-sortable-hoc';
import CompanyItem from './CompanyItem';
import UploadButton from '../UploadButton';

const DragHandle = sortableHandle((props) => (
  <CompanyItem
    index={props.itemIndex}
    img={props.element.img}
    name={props.element.name}
    link={props.element.link}
    text={props.element.text}
    title={props.element.title}
    onTextChange={props.onTextChange}
    onNameChange={props.onNameChange}
    onTitleChange={props.onTitleChange}
    onLinkChange={props.onLinkChange}
    type={props.type}
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
      <h3>Компании</h3>
      {props.elements.map((element, index) => {
        return (
          <SortableItem
            key={`element-${index}`}
            type={props.type}
            index={index}
            itemIndex={index}
            element={element}
            onSortEnd={props.onSortEnd}
            onTextChange={props.onTextChange}
            onNameChange={props.onNameChange}
            onTitleChange={props.onTitleChange}
            onLinkChange={props.onLinkChange}
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

const Company = (props) => {
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
    elements = [...elements, { img: '', name: '', title: '', link: '', text: '' }];
    data.value[props.index].content.elements = elements;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onItemImgChange = (index, url) => {
    const data = state.data;
    elements[index].img = url;
    data.value[props.index].content.elements = elements;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onTextChange = (text, index) => {
    const data = state.data;
    elements[index].text = text;
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

  const onNameChange = (text, index) => {
    const data = state.data;
    elements[index].name = text;
    data.value[props.index].content.elements = elements;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onTitleChange = (text, index) => {
    const data = state.data;
    elements[index].title = text;
    data.value[props.index].content.elements = elements;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onLinkChange = (text, index) => {
    const data = state.data;
    elements[index].link = text;
    data.value[props.index].content.elements = elements;
    dispatch({ type: 'data', payload: { data: data } });
  };

  return (
    <SortableList
      type={props.type}
      title={props.content.title}
      elements={elements}
      onSortEnd={onSortEnd}
      deleteButtonHandler={deleteButtonHandler}
      onTextChange={onTextChange}
      onNameChange={onNameChange}
      onTitleChange={onTitleChange}
      onLinkChange={onLinkChange}
      onItemImgChange={onItemImgChange}
      addIdem={addIdem}
      axis="xy"
      useDragHandle
    />
  );
};

export default Company;
