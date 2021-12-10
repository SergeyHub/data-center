import React, { Component } from 'react';
import { uploadImage } from '../../axios';

export default class UploadButton extends Component {
  onChange = (e) => {
    uploadImage(e.target.files[0], response => {
      this.props.onClick(this.props.index, response.data.url);
    });
  };

  render () {
    return (
      <div className="upload">
        <i className="fas fa-cloud-upload-alt" onClick={e => e.target.nextSibling.click() }></i>
        <input style={{ display: 'none' }} type="file" onChange={this.onChange} />
      </div>
    );
  }
}
