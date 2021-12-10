import React, { useContext, useEffect } from 'react';
import { ContextBuilder } from '../../../../context/builder/reducers';
import Input from '../Input';
import TinyMce from '../TinyMce';

const TabsComponent = (props) => {
  const { state, dispatch } = useContext(ContextBuilder);

  const defaultElements = [
    { title: '', id: '', text: '' },
    { title: '', id: '', text: '' },
    { title: '', id: '', text: '' }
  ];

  useEffect(() => {
    if (!props.content) {
      const data = state.data;
      data.value[props.index].content = { elements: [...defaultElements], title: '' };
      dispatch({ type: 'data', payload: { data: data } });
    }
  });

  const dispatchChanges = (data) => {
    dispatch({ type: 'data', payload: { data: data } });
  };

  const content = props.content || {
    title: '',
    elements: [
      ...defaultElements
    ]
  };

  const onHeaderChange = (index, name, value) => {
    const data = state.data;
    data.value[props.index].content.title = value;
    dispatchChanges(data);
  };

  const onClassChange = (index, name, value) => {
    const data = state.data;
    data.value[props.index].content.class = value;
    dispatchChanges(data);
  };

  const onTitleChange = (i) => (index, name, value) => {
    const data = state.data;
    data.value[props.index].content.elements[i].title = value;
    dispatchChanges(data);
  };

  const onTextChange = (i) => (index, name, value) => {
    const data = state.data;
    data.value[props.index].content.elements[i].text = value;
    dispatchChanges(data);
  };

  const onIdChange = (i) => (index, name, value) => {
    const data = state.data;
    data.value[props.index].content.elements[i].id = value;
    dispatchChanges(data);
  };

  return (
    <div className="tabs-component">
      <div className="form-group">
        <label>Заголовок</label>
        <Input onChange={onHeaderChange} value={content.title} />
      </div>
      <div className="form-group">
        <label>Class</label>
        <Input onChange={onClassChange} value={content.class} />
      </div>
      {content.elements.map((item, i) => {
        return (
          <div className="tab" key={i}>
            <h2>Таб {i + 1}</h2>
            <div className="form-group">
              <label>Заголовок</label>
              <Input onChange={onTitleChange(i)} value={content.elements[i].title}/>
            </div>
            <div className="form-group">
              <label>ID</label>
              <Input onChange={onIdChange(i)} value={content.elements[i].id}/>
            </div>
            <div className="form-group">
              <label>Текст</label>
              <TinyMce onChange={onTextChange(i)} value={content.elements[i].text}/>
            </div>
          </div>
        );
      })}
    </div>
  );
};

export default TabsComponent;
