import React, { useContext, useEffect } from 'react';
import AddElementButton from './AddElementButton';
import TinyMce from './TinyMce';
import Images from './Images';
import { ContextBuilder } from '../../../context/builder/reducers';
import Input from './Input';
import Select from './Select';

const TwoCols = (props) => {
  const { state, dispatch } = useContext(ContextBuilder);
  const defaultElements = [
    { type: '', content: '' },
    { type: '', content: '' }
  ];
  const allowedElements = [
    {
      category: 'Общие',
      elements: [
        { type: 'tinymce', name: 'Текст', description: 'Текстовый блок с расширенными возможностями редактирования.', img: '/images/admin/text_sample.png' },
        { type: 'images', name: 'Галерея', description: 'Текстовый блок с расширенными возможностями редактирования.', img: '/images/admin/text_sample.png' },
        { type: 'calendar', name: 'Календарь', description: 'Календарь', img: '/images/admin/calendar.png' },
        { type: 'admincloud', name: 'admin Cloud', description: 'Платформа виртуализации adminCloud', img: '/images/admin/admincloud.png' },
        { type: 'hyper-cloud', name: 'Hyper Cloud', description: 'Платформа виртуализации HyperCloud', img: '/images/admin/admincloud.png' }
      ]
    }
  ];

  useEffect(() => {
    if (!state.data.value[props.index].content) {
      const data = state.data;
      data.value[props.index].content = defaultElements;
      data.value[props.index].title = '';
      data.value[props.index].background = 'white';
      dispatch({ type: 'data', payload: { data: data } });
    }
  });

  const elements = props.content || defaultElements;

  const onTinyChange = (index, name, content) => {
    const data = state.data;
    elements[index].content = content;
    data.value[props.index].content = elements;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onImagesChange = (index, name, content) => {
    const data = state.data;
    elements[index].content = content;
    if (props.onChange) {
      props.onChange(props.index, props.name, elements);
      return;
    }
    data.value[props.index].content = elements;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const getElement = (element, index) => {
    if (element.type === '') {
      return <AddElementButton
        childIndex={index}
        index={props.index}
        allowedElements={allowedElements}
      />;
    }

    if (element.type === 'tinymce') {
      return <TinyMce
        key={`tiny_${props.index}_${index}`}
        id={`tiny_${props.index}_${element.id}`}
        value={element.content}
        index={index}
        name="content"
        onChange={onTinyChange}
      />;
    }

    if (element.type === 'images') {
      return <Images
        key={`images-${props.index}_${index}`}
        id={`tiny_${props.index}_${element.id}`}
        content={element.content}
        index={index}
        name="content"
        onChange={onImagesChange}
        cols={3}
      />;
    }

    if (element.type === 'calendar') {
      return <div><h3>Календарь</h3></div>;
    }

    if (element.type === 'admincloud') {
      return <div><h3>admin cloud</h3></div>;
    }

    if (element.type === 'hyper-cloud') {
      return <div><h3>Hyper cloud</h3></div>;
    }
  };

  const onTitleChange = (index, name, title) => {
    const data = state.data;
    data.value[props.index].title = title;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onBackgroundChange = (index, name, value) => {
    const data = state.data;
    data.value[props.index].background = value;
    dispatch({ type: 'data', payload: { data: data } });
  };
  return (
    <div className="two-cols">
      <h2>Two columns</h2>
      <div className="form-group">
        <label>Заголовок</label>
        <Input
          onChange={onTitleChange}
          value={props.title || ''}
          placeholder="Оставьте поле пустым, чтобы заголовок блока не отображался"
        />
      </div>
      <div className="form-group">
        <label>Фон</label>
        <Select onChange={onBackgroundChange}
          value={props.background || 'white'}
        >
          <Select.Option value="white">Белый</Select.Option>
          <Select.Option value="grey">Серый</Select.Option>
        </Select>
      </div>
      <div className="elements">
        {elements.map((element, index) => {
          return (
            <div key={index} className="col">
              {getElement(element, index)}
            </div>
          );
        })}
      </div>
    </div>
  );
};

export default TwoCols;
