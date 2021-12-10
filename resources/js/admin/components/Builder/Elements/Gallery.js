import React, { Component } from 'react';
import AddItemButton from './AddItemButton';
import MoveButton from './MoveButton';
import DeleteButton from './DeleteButton';
import UploadButton from './UploadButton';
import TextArea from './TextArea';
import Input from './Input';

const _ = require('lodash');

export default class Gallery extends Component {
  constructor (props) {
    super(props);

    this.state = { elements: JSON.parse(this.props.value) };

    this.AddItemButtonHandler = this.AddItemButtonHandler.bind(this);
    this.textElementHandler = this.textElementHandler.bind(this);
    this.uploadHandler = this.uploadHandler.bind(this);
    this.moveHandler = this.moveHandler.bind(this);
    this.deleteButtonHandler = this.deleteButtonHandler.bind(this);
  }

  AddItemButtonHandler (index) {
    this.setState(currentState => {
      const elements = currentState.elements;
      const id = elements.length ? _.maxBy(elements, 'id').id + 1 : 1;
      elements.splice(index, 0, { id: id, url: '/images/default.png', intro: '', text: '' });
      return { elements: elements };
    });
  }

  uploadHandler (index, url) {
    this.setState(currentState => {
      const elements = currentState.elements;
      elements[index].url = url;
      return { elements: elements };
    });
  }

  moveHandler (currentIndex, newIndex) {
    this.setState(currentState => {
      const elements = currentState.elements;
      const element = elements.splice(currentIndex, 1)[0];
      elements.splice(newIndex, 0, element);

      return { elements: elements };
    });
  }

  deleteButtonHandler (index) {
    this.setState(currentState => {
      const elements = currentState.elements;
      elements.splice(index, 1);
      return { elements: elements };
    });
  }

  textElementHandler (index, name, value) {
    this.setState(currentState => {
      const elements = currentState.elements;
      elements[index][name] = value;
      return { elements: elements };
    });
  }

  elements () {
    return this.state.elements.map((element, index) =>
      <div key={index} className="mt-4">
        <div className="item">
          <div className="texts">
            <div className="item mb-1">
              <div className="text">
                <Input
                  name='intro'
                  index={index}
                  value={element.intro}
                  onChange={this.textElementHandler}
                />
              </div>
            </div>
            <div className="item">
              <div className="text">
                <TextArea
                  name='text'
                  index={index}
                  value={element.text}
                  onChange={this.textElementHandler}
                />
              </div>
            </div>
          </div>

          <div className="image">
            <img src={element.url} alt=""/>
          </div>

          <div className="controls">
            <div className="col">
              <MoveButton
                onClick={this.moveHandler}
                currentIndex={index}
                newIndex={index - 1}
                total={this.state.elements.length}
              />
              <UploadButton
                index={index}
                onClick={this.uploadHandler}
              />
              <MoveButton
                onClick={this.moveHandler}
                currentIndex={index}
                newIndex={index + 1}
                total={this.state.elements.length}
              />
            </div>
            <div className="col">
              <DeleteButton onClick={this.deleteButtonHandler} index={index} />
            </div>
          </div>
        </div>

        <div className="mt-4">
          <AddItemButton onClick={this.AddItemButtonHandler} index={index + 1}/>
        </div>
      </div>
    );
  }

  render () {
    return (
      <div className="gallery">
        <AddItemButton onClick={this.AddItemButtonHandler} index={0}/>

        <div className="items">
          {this.elements()}
        </div>

        <div className="mt-4" style={{ display: 'none' }}>
          <textarea
            name={this.props.name}
            value={JSON.stringify(this.state.elements)}
            readOnly
            className="form-control"
            rows="10"
          ></textarea>
        </div>
      </div>
    );
  }
}
