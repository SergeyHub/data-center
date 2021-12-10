import React, { useContext } from 'react';
import { ContextBuilder } from '../../../context/builder/reducers';

const AddElementButton = (props) => {
  const { dispatch } = useContext(ContextBuilder);

  const showDrawler = () => {
    dispatch({
      type: 'drawler',
      payload: {
        drawler: {
          visible: true,
          index: props.index,
          childIndex: props.childIndex,
          allowedElements: props.allowedElements
        }
      }
    });
  };

  return (
    <div className="add-element">
      <div className="button" onClick={showDrawler}>
        +
      </div>
    </div>
  );
};

export default AddElementButton;
