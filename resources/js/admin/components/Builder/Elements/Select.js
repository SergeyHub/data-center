import React, { Component } from 'react';
import { Select as SelectAntd } from 'antd';

class Select extends Component {
  constructor (props) {
    super(props);
    this.onChange = this.onChange.bind(this);
  }

  onChange (value) {
    this.props.onChange(this.props.index, this.props.name, value);
  }

  render () {
    return (
      <SelectAntd
        onChange={this.onChange}
        value={this.props.value}
      >
        {this.props.children}
      </SelectAntd>
    );
  }
}

Select.Option = SelectAntd.Option;

export default Select;
