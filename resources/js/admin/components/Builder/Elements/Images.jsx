import React, { useContext } from 'react';
import { ContextBuilder } from '../../../context/builder/reducers';
import { SortableContainer, SortableElement, sortableHandle, arrayMove } from 'react-sortable-hoc';
import UploadButton from './UploadButton';

const _ = require('lodash');

const DragHandle = sortableHandle(({ element }) => <img src={element.url} alt=""/>);

const SortableItem = SortableElement(({ itemIndex, element, deleteButtonHandler }) => {
  return (
    <div className="images-image">
      <DragHandle element={element}/>
      <div className="delete" onClick={deleteButtonHandler} index={itemIndex}>
        <i className="far fa-trash-alt"></i>
      </div>
    </div>
  );
});

const SortableList = SortableContainer(({ elements, uploadHandler, deleteButtonHandler, cols }) => {
  return (
    <div className={`images cols-${cols}`}>
      {elements.map((element, index) => {
        return (
          <SortableItem
            key={`element-${element.id}`}
            index={index}
            itemIndex={index}
            element={element}
            deleteButtonHandler={deleteButtonHandler}
          />
        );
      })}
      <div className="images-image">
        <UploadButton onClick={uploadHandler} />
      </div>
    </div>
  );
});

const Images = (props) => {
  const { state, dispatch } = useContext(ContextBuilder);
  let elements = props.content || [];

  const uploadHandler = (index, url) => {
    const data = state.data;
    const id = elements.length ? _.maxBy(elements, 'id').id + 1 : 1;
    elements = [...elements, { id: id, url: url }];
    if (props.onChange) {
      props.onChange(props.index, props.name, elements);
    } else {
      data.value[props.index].content = elements;
      dispatch({ type: 'data', payload: { data: data } });
    }
  };

  const deleteButtonHandler = (e) => {
    const index = e.currentTarget.getAttribute('index');
    const data = state.data;
    elements.splice(index, 1);
    data.value[props.index].content = elements;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onSortEnd = ({ oldIndex, newIndex }) => {
    const data = state.data;
    elements = arrayMove(elements, oldIndex, newIndex);
    data.value[props.index].content = elements;
    dispatch({ type: 'data', payload: { data: data } });
  };

  return (<SortableList
    elements={elements}
    onSortEnd={onSortEnd}
    uploadHandler={uploadHandler}
    deleteButtonHandler={deleteButtonHandler}
    cols={props.cols}
    axis="xy"
    useDragHandle
  />);
};

export default Images;
