import React, { useContext, useEffect } from 'react';
import { ContextBuilder } from '../../../../context/builder/reducers';

import Input from '../Input';
import SolutionTableFirstColumn from './SolutionFirstColumn';
import SolutionOptionList from './SolutionOptionElements';

const SolutionBlock = (props) => {
  return (
    <div className={`solution-block cols-5`}>
      <h2>Варианты решений</h2>
      <div className={`form-group`}>
        <label>Заголовок</label>
        <Input
          onChange={props.onTitleChange}
          value={props.title}
          placeholder="Оставьте поле пустым, чтобы заголовок блока не отображался"
        />
      </div>
      <div className={`solution-first-column-list`}>
        <SolutionTableFirstColumn
          firstColumnElements={props.firstColumnElements}
          onTitleFirstColumnElementsChange={props.onTitleFirstColumnElementsChange}
          handlerDeleteFirstColumnItem={props.handlerDeleteFirstColumnItem}
          addElement={props.addFirstColumnElement}
        />
      </div>
      <div className={`solution-option-wrapper`}>
        <h3>Наименования Решений</h3>
        <SolutionOptionList
          columnElements={props.columnElements}
          firstColumnElements={props.firstColumnElements}
          handlerUploadShema={props.handlerUploadShema}
          handlerChangeTitleItem={props.handlerChangeTitleItem}
          handlerChangeTextItemFirstColumn={props.handlerChangeTextItemFirstColumn}
          handlerDeleteOptionElement={props.handlerDeleteOptionElement}
        />
        <div className="add-element">
          <div className="button" onClick={props.addElementOption}>
            +
          </div>
        </div>
      </div>
    </div>
  );
};

const SolutionOption = (props) => {
  const { state, dispatch } = useContext(ContextBuilder);

  useEffect(() => {
    if (!props.content) {
      const data = state.data;
      data.value[props.index].content = {
        title: '',
        firstColumnElements: [],
        columnElements: []
      };
      dispatch({ type: 'data', payload: { data: data } });
    }
  });

  let firstColumnElements = props.content.firstColumnElements || [];
  const columnElements = props.content.columnElements || [{ title: '',
    firstColumnElements: firstColumnElements.map(() => ({ text: '' })),
    shema: {
      img: '' } }];

  const onTitleChange = (index, name, title) => {
    const data = state.data;
    data.value[props.index].content.title = title;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onTitleFirstColumnElementsChange = (text, index) => {
    const data = state.data;
    firstColumnElements[index].title = text;
    data.value[props.index].content.firstColumnElements = firstColumnElements;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const handlerDeleteFirstColumnItem = (e) => {
    e.preventDefault();
    const index = e.currentTarget.getAttribute('index');
    const data = state.data;
    firstColumnElements.splice(index, 1);
    data.value[props.index].content.firstColumnElements = firstColumnElements;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const addFirstColumnElement = () => {
    const data = state.data;
    firstColumnElements = [...firstColumnElements, { title: '' }];
    const newColumnElements = columnElements.map((item) => {
      item.firstColumnElements = [...item.firstColumnElements, { text: '' }];
      return item;
    });
    data.value[props.index].content.firstColumnElements = firstColumnElements;
    data.value[props.index].content.columnElements = [...newColumnElements];
    dispatch({ type: 'data', payload: { data: data } });
  };

  const handlerUploadShema = (index, url) => {
    const data = state.data;
    columnElements[index].shema.img = url;
    data.value[props.index].content.columnElements = columnElements;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const handlerChangeTitleItem = (title, index) => {
    const data = state.data;
    columnElements[index].title = title;
    data.value[props.index].content.columnElements = columnElements;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const handlerChangeTextItemFirstColumn = (index, indexFirstColumn, text) => {
    const data = state.data;
    columnElements[index].firstColumnElements[indexFirstColumn].text = text;
    console.log(columnElements[index].firstColumnElements[indexFirstColumn]);
    data.value[props.index].content.columnElements = columnElements;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const handlerDeleteOptionElement = (e) => {
    e.preventDefault();
    const index = e.currentTarget.getAttribute('index');
    const data = state.data;
    columnElements.splice(index, 1);
    data.value[props.index].content.columnElements = columnElements;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const addElementOption = () => {
    const data = state.data;
    const newColumnElements = [...columnElements, { title: '',
      firstColumnElements: firstColumnElements.map(() => ({ text: '' })),
      shema: {
        img: '' } }];
    data.value[props.index].content.columnElements = [...newColumnElements];
    dispatch({ type: 'data', payload: { data: data } });
  };

  return (
    <SolutionBlock
      type={props.type}
      title={props.content.title}
      firstColumnElements={firstColumnElements}
      columnElements={columnElements}
      onTitleChange={onTitleChange}
      onTitleFirstColumnElementsChange={onTitleFirstColumnElementsChange}
      handlerDeleteFirstColumnItem={handlerDeleteFirstColumnItem}
      addFirstColumnElement={addFirstColumnElement}
      addElementOption={addElementOption}
      handlerUploadShema={handlerUploadShema}
      handlerChangeTitleItem={handlerChangeTitleItem}
      handlerChangeTextItemFirstColumn={handlerChangeTextItemFirstColumn}
      handlerDeleteOptionElement={handlerDeleteOptionElement}
      useDragHandle
    />
  );
};

export default SolutionOption;
