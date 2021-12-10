import React, { useContext } from 'react';
import { ContextBuilder } from '../../../context/builder/reducers';

const DeleteButton = (props) => {
  const { state, dispatch } = useContext(ContextBuilder);

  const onClick = () => {
    const data = state.data;
    data.value.splice(props.index, 1);
    dispatch({ type: 'data', payload: { data: data } });
  };

  return (
    <div className="delete">
      <i className="far fa-trash-alt" onClick={onClick}></i>
    </div>
  );
};

export default DeleteButton;
