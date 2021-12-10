import React, { useContext, useEffect } from 'react';
import { ContextBuilder } from '../../../../context/builder/reducers';
import TinyMce from '../TinyMce';
import Input from '../Input';

const Banner = (props) => {
  const { state, dispatch } = useContext(ContextBuilder);
  const defaultData = { link: '', text_left: '', text_center: '', text_right: '' };

  useEffect(() => {
    if (!props.content) {
      const data = state.data;
      data.value[props.index].content = { ...defaultData };
      dispatch({ type: 'data', payload: { data: data } });
    }
  });

  const content = props.content || { ...defaultData };

  const dispatchChanges = (data) => {
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onLinkChange = (index, name, text) => {
    const data = state.data;
    data.value[props.index].content.link = text;
    dispatchChanges(data);
  };

  const onLeftTextChange = (index, name, text) => {
    const data = state.data;
    data.value[props.index].content.text_left = text;
    dispatchChanges(data);
  };

  const onCenterTextChange = (index, name, text) => {
    const data = state.data;
    data.value[props.index].content.text_center = text;
    dispatchChanges(data);
  };

  const onRightTextChange = (index, name, text) => {
    const data = state.data;
    data.value[props.index].content.text_right = text;
    dispatchChanges(data);
  };

  return (
    <div className={ `quote-component col` }>
      <h3>CTA баннер</h3>
      <div className='form-group'>
        <label>Ссылка</label>
        <Input
          value={ content.link }
          onChange={ onLinkChange }
        />
      </div>
      <div className='form-group'>
        <label>Слева</label>
        <TinyMce
          value={ content.text_left }
          onChange={ onLeftTextChange }
        />
      </div>
      <div className='form-group'>
        <label>По центру</label>
        <TinyMce
          value={ content.text_center }
          onChange={ onCenterTextChange }
        />
      </div>
      <div className='form-group'>
        <label>Справа</label>
        <TinyMce
          value={ content.text_right }
          onChange={ onRightTextChange }
        />
      </div>
    </div>
  );
};

export default Banner;
