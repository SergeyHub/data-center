import React, { useReducer, useEffect } from 'react';
import { ContextBuilder, initialState, builderReducer } from '../../context/builder/reducers';
import BuilderDrawler from './BuilderDrawler';
import Builder from './Builder';

const BuilderContainer = (props) => {
  const [state, dispatch] = useReducer(builderReducer, initialState);

  useEffect(() => {
    if (state.data !== props) {
      dispatch({ type: 'data', payload: { data: props } });
    }
  });

  return (
    <ContextBuilder.Provider value={{ dispatch, state }}>
      <Builder/>
      <BuilderDrawler/>
    </ContextBuilder.Provider>
  );
};

export default BuilderContainer;
