import React from 'react';
import { uploadImage, uploadFile } from './axios';
import './Uploader.scss';

const onChange = (e, afterUpload) => {
  uploadImage(e.target.files[0], response => {
    afterUpload(response.data.id, response.data.url);
  });
};

const onFileChange = (e, afterUpload) => {
  uploadFile(e.target.files[0], response => {
    afterUpload(response.data.path);
  });
};

const Uploader = (props) => {
  switch (props.type) {
    case 'file':
      return (
        <div className="upload">
          <i className="fas fa-file-upload" onClick={ e => e.target.nextSibling.click() }></i>
          <input style={ { display: 'none' } } type="file" onChange={ e => onFileChange(e, props.afterUpload) }/>
        </div>
      );
    default:
      return (
        <div className="upload">
          <i className="fas fa-cloud-upload-alt" onClick={ e => e.target.nextSibling.click() }></i>
          <input style={ { display: 'none' } } type="file" onChange={ e => onChange(e, props.afterUpload) }/>
        </div>
      );
  }
};

export default Uploader;
