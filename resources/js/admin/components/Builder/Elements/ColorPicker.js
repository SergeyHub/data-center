import React from 'react';
import { SketchPicker } from 'react-color';

const ColorPicker = (props) => {
  const colors = [
    { color: '#019FDF', title: 'голубой' },
    { color: '#7D187A', title: 'филоетовый' },
    { color: '#C20076', title: 'малиновый' },
    { color: '#465997', title: 'синий' },
    { color: '#D8569C', title: 'темно розовый' },
    { color: '#DD9FBE', title: 'светло розовый' },
    { color: '#7F599E', title: 'сиреневый' },
    { color: '#9B9C9E', title: 'серый' },
    { color: '#0a4595', title: 'синий' },
    { color: '#ffffff', title: 'белый' }
  ];
  return (
    <SketchPicker
      presetColors={colors}
      color={props.value}
      onChangeComplete={props.onChange}
    />
  );
};

export default ColorPicker;
