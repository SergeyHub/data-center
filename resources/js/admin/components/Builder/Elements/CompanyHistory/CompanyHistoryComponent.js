import React, { useContext, useEffect } from 'react';
import { ContextBuilder } from '../../../../context/builder/reducers';
import Input from '../Input';
import { arrayMove, SortableContainer, SortableElement, sortableHandle } from 'react-sortable-hoc';
import TextArea from '../TextArea';
import UploadButton from '../UploadButton';

const DragHandle = (props) => {
  const onYearChange = (index, name, val) => {
    props.onYearChange(val, props.itemIndex);
  };

  const onTextChange = (index, name, val) => {
    props.onTextChange(val, props.itemIndex);
  };

  const uploadHandler = (index, url) => {
    props.onImgChange(url, props.itemIndex);
  };

  return (
    <div className="element-wrap">
      <div className="form-group">
        <label>Год</label>
        <Input
          index={props.itemIndex}
          value={props.element.year}
          onChange={onYearChange}
          placeholder="Год"
        />
      </div>
      <div className="form-group">
        <label>Изображение</label>
        <div className="images">
          <div className="img-container">
            <div className="img-wrap">
              <img src={props.element.img} alt=""/>
            </div>
          </div>
        </div>
        <div className="images">
          <div className="image-container">
            <div className="uploader">
              <UploadButton onClick={uploadHandler} />
            </div>
          </div>
        </div>
      </div>
      <div className="form-group">
        <label>История</label>
        <TextArea
          index={props.itemIndex}
          value={props.element.caption}
          onChange={onTextChange}
          placeholder="Текст"/>
      </div>
    </div>
  );
};

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
      {props.elements.map((element, index) => {
        return (
          <SortableItem
            key={`element-${index}`}
            index={index}
            itemIndex={index}
            element={element}
            onSortEnd={props.onSortEnd}
            addIdem={props.addIdem}
            onYearChange={props.onYearChange}
            onTextChange={props.onTextChange}
            onImgChange={props.onImgChange}
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

const CompanyHistoryComponent = (props) => {
  const { state, dispatch } = useContext(ContextBuilder);
  const defaultData = { elements: [{ year: null, caption: null, img: null }] };

  useEffect(() => {
    if (!props.content) {
      const data = state.data;
      data.value[props.index].content = { ...defaultData };
      dispatch({ type: 'data', payload: { data: data } });
    }
  });

  const content = props.content || { ...defaultData };
  let elements = content.elements || [];

  const dispatchChanges = (data) => {
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onTextChange = (text, index) => {
    const data = state.data;
    elements[index].caption = text;
    data.value[props.index].content.elements = elements;
    dispatchChanges(data);
  };

  const onYearChange = (val, index) => {
    const data = state.data;
    elements[index].year = +val;
    data.value[props.index].content.elements = elements;
    dispatchChanges(data);
  };

  const onImgChange = (val, index) => {
    const data = state.data;
    elements[index].img = val;
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

  const addIdem = () => {
    const data = state.data;
    elements = [...elements, { year: null, caption: null }];
    data.value[props.index].content.elements = elements;
    dispatch({ type: 'data', payload: { data: data } });
  };

  return (
    <div className="company-history">
      <h2>История компании</h2>
      <SortableList
        elements={elements}
        onSortEnd={onSortEnd}
        deleteButtonHandler={deleteButtonHandler}
        onYearChange={onYearChange}
        onTextChange={onTextChange}
        onImgChange={onImgChange}
        addIdem={addIdem}
        axis="xy"
        useDragHandle
      />
    </div>
  );
};

export default CompanyHistoryComponent;
