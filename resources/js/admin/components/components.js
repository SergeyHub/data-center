import React from 'react';
import ReactDOM from 'react-dom';
import Image from './Image';
import Images from './Images';
import FileUpload from './FileUpload';
import { TinyMceWithRepeatToInput } from './TinyMce';

[...document.getElementsByClassName('image')].forEach((el) => {
  const props = {
    name: el.dataset.name,
    id: el.dataset.id,
    src: el.dataset.src
  };
  ReactDOM.render(<Image { ...props } />, el);
});

[...document.getElementsByClassName('images')].forEach((el) => {
  const props = {
    name: el.dataset.name,
    images: JSON.parse(el.dataset.images)
  };
  ReactDOM.render(<Images { ...props } />, el);
});

[...document.getElementsByClassName('editor')].forEach((el) => {
  const props = {
    name: el.dataset.name,
    value: el.dataset.value
  };
  ReactDOM.render(<TinyMceWithRepeatToInput { ...props } />, el);
});

[...document.getElementsByClassName('form-control-file')].forEach((el) => {
  const props = {
    fileName: el.dataset.file_name,
    fileSize: el.dataset.file_size,
    filePath: el.dataset.file_path,
    fileUrl: el.dataset.file_url,
    fileExtension: el.dataset.file_extension,
    dbColumn: el.dataset.db_column
  };
  ReactDOM.render(<FileUpload { ...props } />, el);
});
