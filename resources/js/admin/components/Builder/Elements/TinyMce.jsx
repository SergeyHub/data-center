import React, { useContext } from "react";
import { ContextBuilder } from "../../../context/builder/reducers";
import Tiny from "../../TinyMce";
import Select from "./Select";

const TinyMce = (props) => {
  const { state, dispatch } = useContext(ContextBuilder);

  const handleEditorChange = (props, content) => {
    if (props.onChange) {
      props.onChange(props.index, props.name, content);
    } else {
      const data = state.data;
      data.value[props.index].content = content;
      dispatch({ type: "data", payload: { data: data } });
    }
  };

  const onBackgroundChange = (index, name, value) => {
    const data = state.data;
    data.value[props.index].background = value;
    dispatch({ type: "data", payload: { data: data } });
  };
  console.log("props", props);
  return (
    <div>
      {props.nested !== true && (
        <>
          <label>Фон</label>
          <Select
            onChange={onBackgroundChange}
            value={props.background || "white"}
          >
            <Select.Option value="white">Белый</Select.Option>
            <Select.Option value="grey">Серый</Select.Option>
          </Select>
        </>
      )}
      <Tiny {...{ ...props, handleEditorChange }} />
    </div>
  );
};

export default TinyMce;
