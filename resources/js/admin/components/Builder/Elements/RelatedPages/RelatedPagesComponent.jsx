import React, { useContext, useEffect } from 'react';
import { ContextBuilder } from '../../../../context/builder/reducers';
import { arrayMove, SortableContainer, SortableElement, sortableHandle } from 'react-sortable-hoc';
import RelatedPagesItem from './RelatedPagesItem';

const DragHandle = sortableHandle((props) => (
  <RelatedPagesItem
    index={ props.itemIndex }
    title={ props.element.title }
    link={ props.element.link }
    description={ props.element.description }
    onTitleChange={ props.onTitleChange }
    onDescriptionChange={ props.onDescriptionChange }
    onLinkChange={ props.onLinkChange }
    type={ props.type }
  />
));

const SortableItem = SortableElement((props) => {
  return (
    <div className="icons-list-item">
      <DragHandle { ...props } />
      <div className="delete" onClick={ props.deleteButtonHandler } index={ props.itemIndex }>
        <i className="far fa-trash-alt"></i>
      </div>
    </div>
  );
});

const SortableList = SortableContainer((props) => {
  return (
    <div className={ `icons-list cols-5` }>
      <h3>Похожие страницы</h3>
      { props.elements.map((element, index) => {
        return (
          <SortableItem
            key={ `element-${index}` }
            type={ props.type }
            index={ index }
            itemIndex={ index }
            element={ element }
            onSortEnd={ props.onSortEnd }
            addIdem={ props.addIdem }
            deleteButtonHandler={ props.deleteButtonHandler }
            onLinkChange={ props.onLinkChange }
            onTitleChange={ props.onTitleChange }
            onDescriptionChange={ props.onDescriptionChange }
          />
        );
      }) }
      <div className="add-element">
        <div className="button" onClick={ props.addIdem }>
          +
        </div>
      </div>
    </div>
  );
});

const RelatedPagesComponent = (props) => {
  const { state, dispatch } = useContext(ContextBuilder);

  useEffect(() => {
    if (!props.content) {
      const data = state.data;
      data.value[props.index].content = {
        elements: []
      };
      dispatch({ type: 'data', payload: { data: data } });
    }
  });

  let elements = props.content.elements || [];
  const dispatchChanges = (data) => {
    dispatch({ type: 'data', payload: { data: data } });
  };

  const addIdem = () => {
    const data = state.data;
    elements = [...elements, {
      title: '',
      description: '',
      link: ''
    }];
    data.value[props.index].content.elements = elements;
    dispatchChanges(data);
  };

  const onLinkChange = (text, index) => {
    const data = state.data;
    elements[index].link = text;
    data.value[props.index].content.elements = elements;
    dispatchChanges(data);
  };

  const onTitleChange = (text, index) => {
    const data = state.data;
    elements[index].title = text;
    data.value[props.index].content.elements = elements;
    dispatchChanges(data);
  };

  const onDescriptionChange = (text, index) => {
    const data = state.data;
    elements[index].description = text;
    data.value[props.index].content.elements = elements;
    dispatchChanges(data);
  };

  const deleteButtonHandler = (e) => {
    const index = e.currentTarget.getAttribute('index');
    const data = state.data;
    elements.splice(index, 1);
    data.value[props.index].content.elements = elements;
    dispatchChanges(data);
  };

  const onSortEnd = ({ oldIndex, newIndex }) => {
    const data = state.data;
    elements = arrayMove(elements, oldIndex, newIndex);
    data.value[props.index].content.elements = elements;
    dispatchChanges(data);
  };

  return (
    <SortableList
      type={ props.type }
      elements={ elements }
      onSortEnd={ onSortEnd }
      deleteButtonHandler={ deleteButtonHandler }
      onLinkChange={ onLinkChange }
      onTitleChange={ onTitleChange }
      onDescriptionChange={ onDescriptionChange }
      addIdem={ addIdem }
      axis="xy"
      useDragHandle
    />
  );
};

export default RelatedPagesComponent;
