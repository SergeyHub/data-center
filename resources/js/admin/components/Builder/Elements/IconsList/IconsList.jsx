import React, { useContext, useEffect } from 'react';
import { ContextBuilder } from '../../../../context/builder/reducers';
import { SortableContainer, SortableElement, sortableHandle, arrayMove } from 'react-sortable-hoc';
import IconsListItem from './IconsListItem';
import Input from '../Input';
import UploadButton from '../UploadButton';
import Select from '../Select';

const DragHandle = sortableHandle((props) => (
  <IconsListItem
    index={props.itemIndex}
    text={props.element.text}
    title={props.element.title}
    img={props.element.img}
    onTextChange={props.onTextChange}
    onTitleChange={props.onTitleChange}
    type={props.type}
  />
));

const SortableItem = SortableElement((props) => {
  return (
    <div className="icons-list-item">
      <DragHandle {...props} />
      <UploadButton index={props.itemIndex} onClick={props.onItemImgChange}/>
      <div className="delete" onClick={props.deleteButtonHandler} index={props.itemIndex}>
        <i className="far fa-trash-alt"></i>
      </div>
    </div>
  );
});

const SortableList = SortableContainer((props) => {
  return (
    <div className={`icons-list cols-5`}>
      <h2>Icons list</h2>
      <label>Заголовок</label>
      <Input
        onChange={props.onTitleChange}
        value={props.title}
        placeholder="Оставьте поле пустым, чтобы заголовок блока не отображался"
      />
      <label>Подзаголовок</label>
      <Input
        onChange={props.onSubTitleChange}
        value={props.subTitle}
        placeholder="Оставьте поле пустым, чтобы заголовок блока не отображался"
      />
      <div>
      <label>Количество колонок</label>
      <Select onChange={props.onRowCountChange} value={props.row}>
        <Select.Option value="2">2 колонки</Select.Option>
        <Select.Option value="3">3 колонки</Select.Option>
        <Select.Option value="4">4 колонки</Select.Option>
      </Select>
      </div>
      <div>
      <label>Фон</label>
      <Select onChange={props.onBackgroundChange} value={props.background}>
        <Select.Option value="white">Белый</Select.Option>
        <Select.Option value="grey">Серый</Select.Option>
      </Select>
      </div>
      {props.type === 'icons_list_vertical' &&
      <div>
        <label>Количество элементов в строке</label>
        <Input
          type="number"
          onChange={props.onNumColsChange}
          value={props.numCols}
        />
        <label>Высота картинок</label>
        <Input
          type="number"
          onChange={props.onHeightImgChange}
          value={props.heightImg}
        />
      </div>
      }
      {props.elements.map((element, index) => {
        return (
          <SortableItem
            key={`element-${index}`}
            type={props.type}
            index={index}
            itemIndex={index}
            element={element}
            onSortEnd={props.onSortEnd}
            onTextChange={props.onTextChange}
            onTitleChange={props.onTitleElementChange}
            onItemImgChange={props.onItemImgChange}
            addIdem={props.addIdem}
            deleteButtonHandler={props.deleteButtonHandler}
          />
        );
      })}

      <div className="add-element">
        <div className="button" onClick={props.addIdem}>
          +
        </div>
      </div>
    </div>
  );
});

const IconsList = (props) => {
  const { state, dispatch } = useContext(ContextBuilder);

  useEffect(() => {
    if (!props.content) {
      const data = state.data;
      data.value[props.index].content = {
        title: '',
        background: '',
        row: '',
        elements: []
      };
      dispatch({ type: 'data', payload: { data: data } });
    }
  });

  let elements = props.content.elements || [];

  const addIdem = () => {
    const data = state.data;
    elements = [...elements, { text: '', img: '', title: '' }];
    data.value[props.index].content.elements = elements;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onItemImgChange = (index, url) => {
    const data = state.data;
    elements[index].img = url;
    data.value[props.index].content.elements = elements;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onTextChange = (text, index) => {
    const data = state.data;
    elements[index].text = text;
    data.value[props.index].content.elements = elements;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onTitleElementChange = (text, index) => {
    const data = state.data;
    elements[index].title = text;
    data.value[props.index].content.elements = elements;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onTitleChange = (index, name, title) => {
    const data = state.data;
    data.value[props.index].content.title = title;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onBackgroundChange = (index, name, value) => {
    console.log('icons lists background change');
    const data = state.data;
    data.value[props.index].content.background = value;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onRowCountChange = (index, name, value) => {
    console.log('icons lists row change');
    const data = state.data;
    data.value[props.index].content.row = value;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onNumColsChange = (index, name, val) => {
    const data = state.data;
    data.value[props.index].content.numCols = val;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onHeightImgChange = (index, name, val) => {
    const data = state.data;
    data.value[props.index].content.heightImg = val;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onSubTitleChange = (index, name, text) => {
    const data = state.data;
    data.value[props.index].content.subTitle = text;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const deleteButtonHandler = (e) => {
    const index = e.currentTarget.getAttribute('index');
    const data = state.data;
    elements.splice(index, 1);
    data.value[props.index].content.elements = elements;
    dispatch({ type: 'data', payload: { data: data } });
  };

  const onSortEnd = ({ oldIndex, newIndex }) => {
    const data = state.data;
    elements = arrayMove(elements, oldIndex, newIndex);
    data.value[props.index].content.elements = elements;
    dispatch({ type: 'data', payload: { data: data } });
  };

  return (
    <SortableList
      type={props.type}
      title={props.content.title}
      background={props.content.background}
      row={props.content.row}
      subTitle={props.content.subTitle}
      numCols={props.content.numCols}
      heightImg={props.content.heightImg}
      elements={elements}
      onSortEnd={onSortEnd}
      deleteButtonHandler={deleteButtonHandler}
      onTextChange={onTextChange}
      onTitleElementChange={onTitleElementChange}
      onItemImgChange={onItemImgChange}
      onTitleChange={onTitleChange}
      onBackgroundChange={onBackgroundChange}
      onRowCountChange={onRowCountChange}
      onSubTitleChange={onSubTitleChange}
      onNumColsChange={onNumColsChange}
      onHeightImgChange={onHeightImgChange}
      addIdem={addIdem}
      axis="xy"
      useDragHandle
    />
  );
};

export default IconsList;
