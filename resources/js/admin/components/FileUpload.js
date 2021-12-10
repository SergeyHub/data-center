import React from 'react';
import Uploader from './Uploader';
import './FileUpload.scss';

export default class FileUpload extends React.Component {
  constructor (props) {
    super(props);

    this.state = {
      filePath: this.props.filePath,
      dbColumn: this.props.dbColumn
    };
  }

  afterUpload = (filePath) => {
    this.setState({
      filePath: filePath
    });
  };

  onDelete = () => {
    this.setState({
      filePath: ''
    });
  };

  render () {
    return <div className="file-container">
      { this.state.filePath &&
      <div className="file-container__file">
        <article className="file-container__preview">
          <div className="file-container__delete-button" onClick={ this.onDelete }>
            <i className="far fa-trash-alt"></i>
          </div>
          <header>
            <i className="far fa-file"></i>
          </header>
          <footer className="file-container__footer">
            { this.state.filePath }
          </footer>
        </article>
      </div>
      }

      <div className="uploader">
        <Uploader afterUpload={ this.afterUpload } type="file"/>
      </div>
      <input type="hidden" name={ this.props.dbColumn } value={ this.state.filePath }/>
    </div>;
  }
}
