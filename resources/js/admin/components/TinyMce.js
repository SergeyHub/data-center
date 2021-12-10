// is strange hack for not use tiny from cloud with api key
// end is strange hack for not use tiny from cloud with api key

import React, { Component } from 'react';
import { Editor } from '@tinymce/tinymce-react';
import { uploadImage } from './axios';
require('tinymce');

const params = {
  plugins: 'link image code lists table hr fullscreen',
  menu: {
    insert: { title: 'Insert', items: 'image link hr table' },
    format: { title: 'Format', items: 'formats blockformats' },
    fonts: { title: 'Шрифт', items: 'fontsizes forecolor backcolor' },
    aligns: { title: 'Выравнивание', items: 'align' }
  },
  menubar: 'insert format fonts alignleft aligns',
  toolbar: 'bold italic | numlist bullist | removeformat | fullscreen | code',
  language: 'ru',
  language_url: '/js/tinymce_ru.js',
  valid_elements: '+*[*]'
};

export default class TinyMce extends Component {
  handleEditorChange = (e) => {
    if (this.props.handleEditorChange) {
      this.props.handleEditorChange(this.props, e.target.getContent());
    }
  };

  afterImageUpload = (blobInfo, success, failure) => {
    uploadImage(blobInfo.blob(), response => {
      success(response.data.url);
    }, { width: 800 });
  };

  render () {
    const init = {
      ...params,
      images_upload_handler: this.afterImageUpload
    };

    return (
      <Editor
        initialValue={this.props.value}
        init={init}
        onChange={this.handleEditorChange}
      />
    );
  }
}

export const TinyMceWithRepeatToInput = (props) => {
  const input = React.createRef();
  const handleEditorChange = (props, content) => {
    input.current.value = content;
  };

  return (
    <>
      <TinyMce {...{ ...props, handleEditorChange }} />
      <input type="hidden" name={props.name} value={props.value} ref={input} />
    </>
  );
};
