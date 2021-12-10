import React, { useContext, useEffect } from 'react';
import { ContextBuilder } from '../../../../context/builder/reducers';
import { arrayMove, SortableContainer, SortableElement, sortableHandle } from 'react-sortable-hoc';
import GalleryItem from './GalleryItem';
import UploadButton from '../UploadButton';
import TinyMce from '../TinyMce';

const DragHandle = sortableHandle((props) => (
  <GalleryItem
    index={ props.itemIndex }
    img={ props.element.img }
    title={ props.element.title }
    onTitleChange={ props.onTitleChange }
    type={ props.type }
  />
));

const SortableItem = SortableElement((props) => {
  return (
    <div className="icons-list-item">
      <DragHandle { ...props } />
      <UploadButton index={ props.itemIndex } onClick={ props.onItemImgChange }/>
      <div className="delete" onClick={ props.deleteButtonHandler } index={ props.itemIndex }>
        <i className="far fa-trash-alt"></i>
      </div>
    </div>
  );
});

const SortableList = SortableContainer((props) => {
  return (
    <div className={ `icons-list cols-5` }>
      <h3>Галерея</h3>
      { props.elements.map((element, index) => {
        return (
          <SortableItem
            key={ `element-${index}` }
            type={ props.type }
            index={ index }
            itemIndex={ index }
            element={ element }
            onSortEnd={ props.onSortEnd }
            onNameChange={ props.onNameChange }
            onTitleChange={ props.onTitleChange }
            onLinkChange={ props.onLinkChange }
            onItemImgChange={ props.onItemImgChange }
            addIdem={ props.addIdem }
            deleteButtonHandler={ props.deleteButtonHandler }
          />
        );
      }) }
      <div className="add-element">
        <div className="button" onClick={ props.addIdem }>
          ➕ Добавить
        </div>
      </div>
    </div>
  );
});

const Gallery = (props) => {
  const { state, dispatch } = useContext(ContextBuilder);
  const defaultData = { title: '', elements: [], text: '' };

  useEffect(() => {
    if (!props.content) {
      const data = state.data;
      data.value[props.index].content = { ...defaultData };
      dispatch({ type: 'data', payload: { data: data } });
    }
  });

  let elements = props.content.elements || [];
  const content = props.content || { ...defaultData };

  const dispatchChanges = (data) => {
    dispatch({ type: 'data', payload: { data: data } });
  };

  const addIdem = () => {
    const data = state.data;
    elements = [...elements, { img: '', title: '' }];
    data.value[props.index].content.elements = elements;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onItemImgChange = (index, url) => {
    const data = state.data;
    elements[index].img = url;
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

  const onTextChange = (index, name, text) => {
    const data = state.data;
    data.value[props.index].content.text = text;
    dispatchChanges(data);
  };

  return (
    <div>
      <h3>Галерея с текстом</h3>
      <div className='form-group'>
        <label>Текст</label>
        <TinyMce
          value={ content.text }
          onChange={ onTextChange }
        />
      </div>
      <SortableList
        type={ props.type }
        title={ props.content.title }
        elements={ elements }
        onSortEnd={ onSortEnd }
        deleteButtonHandler={ deleteButtonHandler }
        onNameChange={ onNameChange }
        onTitleChange={ onTitleChange }
        onLinkChange={ onLinkChange }
        onItemImgChange={ onItemImgChange }
        addIdem={ addIdem }
        axis="xy"
        useDragHandle
      />
    </div>
  );
};

export default Gallery;
