import React from 'react';
import Input from '../Input';

const SolutionTableFirstColumnItem = (props) => {
  const onTitleChange = (index, name, text) => {
    props.onTitleChange(text, props.index);
  };
  return (
    <div className={`form-group`}>
      <label>описание {props.index + 1}</label>
      <Input
        onChange={onTitleChange}
        value={props.title || ''}
      />
    </div>
  );
};

const DragHandle = (props) => (
  <SolutionTableFirstColumnItem
    index={props.indexElement}
    title={props.element.title}
    onTitleChange={props.onTitleFirstColumnElementsChange}
  />
);

const SolutionTableFirstColumnElement = (props) => {
  return (
    <div className={`solution-first-column-item`}>
      <DragHandle {...props} />
      <button className="delete" onClick={props.handlerDeleteFirstColumnItem} index={props.indexElement}>
        <i className="far fa-trash-alt"></i>
      </button>
    </div>
  );
};

const SolutionTableFirstColumn = (props) => {
  return (
    <div>
      <h3>Наименования описания (1 столбец в таблице)</h3>
      <div className={`first-column-row`}>
        {props.firstColumnElements.map((element, index) => {
          return (
            <SolutionTableFirstColumnElement
              key={`first-column-row-${index}`}
              index={index}
              indexElement={index}
              element={element}
              onTitleFirstColumnElementsChange={props.onTitleFirstColumnElementsChange}
              onSortEnd={props.onSortEnd}
              handlerDeleteFirstColumnItem={props.handlerDeleteFirstColumnItem}
            />
          );
        })
        }
        <div className="add-element">
          <div className="button" onClick={props.addElement}>
            +
          </div>
        </div>
      </div>
    </div>
  );
};

export default SolutionTableFirstColumn;