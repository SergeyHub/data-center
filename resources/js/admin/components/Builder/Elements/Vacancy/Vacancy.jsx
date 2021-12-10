import React, { useContext, useEffect } from 'react';
import { ContextBuilder } from '../../../../context/builder/reducers';
import { arrayMove, SortableContainer, SortableElement, sortableHandle } from 'react-sortable-hoc';
import VacancyBadgeItem from './VacancyBadgeItem';

const DragHandle = sortableHandle((props) => (
  <VacancyBadgeItem
    index={props.itemIndex}
    text={props.element.text}
    title={props.element.title}
    img={props.element.img}
    onTextChange={props.onTextChange}
    type={props.type}
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
      <h3>Вакансии: Значки</h3>
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

const Vacancy = (props) => {
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

  const onTitleElementChange = (text, index) => {
    const data = state.data;
    elements[index].title = text;
    data.value[props.index].content.elements = elements;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onNumColsChange = (index, name, val) => {
    const data = state.data;
    data.value[props.index].content.numCols = val;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onHeightImgChange = (index, name, val) => {
    const data = state.data;
    data.value[props.index].content.heightImg = val;
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
      type={props.type}
      title={props.content.title}
      subTitle={props.content.subTitle}
      numCols={props.content.numCols}
      heightImg={props.content.heightImg}
      elements={elements}
      onSortEnd={onSortEnd}
      deleteButtonHandler={deleteButtonHandler}
      onTextChange={onTextChange}
      onTitleElementChange={onTitleElementChange}
      onNumColsChange={onNumColsChange}
      onHeightImgChange={onHeightImgChange}
      addIdem={addIdem}
      axis="xy"
      useDragHandle
    />
  );
};

export default Vacancy;
