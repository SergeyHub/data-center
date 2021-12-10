import React from 'react';
export const ContextBuilder = React.createContext();

export const initialState = {
  drawler: {
    visible: false,
    index: null,
    childIndex: null,
    allowedElements: []
  },
  data: {
    name: '',
    value: []
  }
};

export const builderReducer = (state, action) => {
  switch (action.type) {
    case 'drawler':
      return {
        ...state,
        ...action.payload
      };
    case 'data':
      return {
        ...state,
        ...action.payload
      };
    default:
      return state;
  }
};
