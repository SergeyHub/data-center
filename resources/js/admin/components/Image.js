import React from 'react';
import Uploader from './Uploader';
import './Image.scss';

export default class Image extends React.Component {
  constructor (props) {
    super(props);

    this.state = {
      id: this.props.id,
      src: this.props.src
    };
  }

    afterUpload = (id, url) => {
      this.setState({ id: id, src: url });
    };

    onDelete = () => {
      this.setState({ id: '', src: '' });
    };

    render () {
      return <div className="img-container">
        {this.state.src &&
                <div className="img-wrap">
                  <img src={this.state.src} alt="" />
                  <div className="delete" onClick={this.onDelete}>
                    <i className="far fa-trash-alt"></i>
                  </div>
                </div>
        }

        <div className="uploader">
          <Uploader afterUpload={this.afterUpload} />
        </div>
        <input type="hidden" name={this.props.name} value={this.state.id} />
      </div>;
    }
}
