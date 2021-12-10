import React, { useContext } from 'react';
import { ContextBuilder } from '../../../context/builder/reducers';

const MoveButton = (props) => {
  const { state, dispatch } = useContext(ContextBuilder);

  const onClick = () => {
    const data = state.data;
    const element = data.value.splice(props.currentIndex, 1)[0];
    data.value.splice(props.newIndex, 0, element);
    dispatch({ type: 'data', payload: { data: data } });
  };

  const icon = () => {
    const count = props.total;
    const moveUp = props.currentIndex > props.newIndex;
    const isFirstElement = props.currentIndex === 0;
    const isLastElement = props.currentIndex === count - 1;

    if ((isFirstElement && moveUp) || (isLastElement && !moveUp)) { return ''; }

    return (
      <i
        className={`fas fa-arrow-${moveUp ? 'up' : 'down'}`}
        onClick={onClick}
      ></i>
    );
  };
  return (
    <div className="move">
      {icon()}
    </div>
  );
};

export default MoveButton;
