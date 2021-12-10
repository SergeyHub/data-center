import React, { Component } from 'react';

export default class Input extends Component {
  constructor (props) {
    super(props);
    this.onChange = this.onChange.bind(this);
  }

  onChange (e) {
    let value = e.target.value;
    if (this.props.type === 'checkbox') {
      value = e.target.checked;
    }
    this.props.onChange(this.props.index, this.props.name, value);
  }

  render () {
    const id = this.props.id ? { id: this.props.id } : {};
    let checked = {};
    if (this.props.type === 'checkbox') {
      checked = { checked: this.props.checked };
    }
    return (
      <input
        {...id}
        {...checked}
        type={this.props.type ? this.props.type : 'text'}
        className={this.props.className ? this.props.className : 'form-control'}
        onChange={this.onChange}
        value={this.props.value}
        placeholder={this.props.placeholder}
      ></input>
    );
  }
}
