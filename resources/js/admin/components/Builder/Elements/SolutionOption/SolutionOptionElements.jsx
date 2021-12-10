import Tiny from "../../../TinyMce";
import Input from "../Input";
import UploadButton from "../UploadButton";
import React from "react";

const SolutionOptionElementColumn = (props) => {
  const handleEditorChange = (name, content) => {
    props.handleEditorChange(props.indexColumnElement, props.indexItem, content);
  };

  return (
    <div
      className={`from-group`}
    >
      <label>{props.columnTitle}</label>
      <Tiny {...{ value: props.text, handleEditorChange }}/>
    </div>
  );
};

const SolutionOptionElement = (props) => {
  const handlerUploadShema = (index, url) => {
    props.handlerUploadShema(props.index, url);
  };

  const handlerChangeTitleItem = (index, name, text) => {
    props.handlerChangeTitleItem(text, props.index);
  };

  return (
    <div className={`solution-option-item`}>
      <button className="delete" onClick={props.handlerDeleteOptionElement} index={props.index}>
        <i className="far fa-trash-alt"></i>
      </button>
      <h4>Решение № {props.index + 1}</h4>
      <div className={`from-group`}>
        <label>Заголовок решения</label>
        <Input
          onChange={handlerChangeTitleItem}
          value={props.title}
        />
      </div>
      {props.firstColumnItem.map((columnElement, index) => (
        <SolutionOptionElementColumn key={`solution-option-row-${index}`} indexItem={index} indexColumnElement={props.indexItem} columnTitle={props.firstColumnElements[index].title} text={columnElement.text} handleEditorChange={props.handlerChangeTextItemFirstColumn}/>
      ))
      }
      <div
        className={`from-group`}
      >
        <label>{`Схема`}</label>
        <div className="images">
          <div className="img-container">
            <div className="img-wrap">
              <img src={props.shema.img} alt=""/>
            </div>
          </div>
        </div>
        <UploadButton onClick={handlerUploadShema}/>
      </div>
    </div>
  );
};

const SolutionOptionList = (props) => {
  return (
    <div className={`solution-option-list`}>
      {props.columnElements.map((item, index) => (
        <SolutionOptionElement
          key={`solution-item-${index}`}
          firstColumnElements={props.firstColumnElements}
          title={item.title}
          firstColumnItem={item.firstColumnElements}
          shema={item.shema}
          index={index}
          indexItem={index}
          handlerUploadShema={props.handlerUploadShema}
          handlerChangeTitleItem={props.handlerChangeTitleItem}
          handlerChangeTextItemFirstColumn={props.handlerChangeTextItemFirstColumn}
          handlerDeleteOptionElement={props.handlerDeleteOptionElement}/>
      ))}
    </div>
  );
};

export default SolutionOptionList;