import React from 'react';
import Uploader from './Uploader';
import './Images.scss';

export default class Images extends React.Component {
  constructor (props) {
    super(props);

    this.state = {
      images: this.props.images
    };
  }

  afterUpload = (id, url) => {
    this.setState({
      images: [
        ...this.state.images,
        { id, url }
      ]
    });
  };

  onDelete = (index) => {
    this.setState(currentState => {
      const images = currentState.images;
      images.splice(index, 1);
      return { images };
    });
  };

  render () {
    return <div className="imgs-container">
      {this.state.images.map((image, index) => {
        return <div key={index} className="img-wrap">
          <img src={image.url} alt="" />
          <div className="delete" onClick={() => this.onDelete(index)}>
            <i className="far fa-trash-alt"></i>
          </div>
        </div>;
      })}

      <div className="uploader">
        <Uploader afterUpload={this.afterUpload} />
      </div>
      <input type="hidden" name={this.props.name} value={JSON.stringify(this.state.images)} />
    </div>;
  }
}
