import React, { Component } from 'react';

export default class TextArea extends Component {
  constructor (props) {
    super(props);
    this.onChange = this.onChange.bind(this);
  }

  onChange (e) {
    this.props.onChange(this.props.index, this.props.name, e.target.value);
  }

  render () {
    return (
      <textarea
        className="form-control"
        rows="5"
        onChange={this.onChange}
        value={this.props.value}
      ></textarea>
    );
  }
}
