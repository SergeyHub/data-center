import React, { Component } from 'react';

export default class AddItemButton extends Component {
  constructor (props) {
    super(props);

    this.onClick = this.onClick.bind(this);
  }

  onClick (e) {
    e.preventDefault();
    this.props.onClick(this.props.index);
  }

  render () {
    return (
      <div className="add-item">
        <a
          href="#"
          className="button"
          onClick={this.onClick}
        >+</a>
      </div>
    );
  }
}
