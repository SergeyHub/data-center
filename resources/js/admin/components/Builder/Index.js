import React from 'react';
import ReactDOM from 'react-dom';
import BuilderContainer from './BuilderContainer';
import Gallery from './Elements/Gallery';

[...document.getElementsByClassName('builder')].forEach((el) => {
  const props = {
    name: el.dataset.name,
    value: JSON.parse(el.dataset.value),
    allowed: JSON.parse(el.dataset.allowed)
  };
  ReactDOM.render(<BuilderContainer {...props} />, el);
});

const galleries = document.getElementsByClassName('gallery');
if (galleries.length) {
  const textarea = galleries[0].getElementsByTagName('textarea')[0];
  const props = {
    name: textarea.getAttribute('name'),
    value: textarea.value.trim() || '[]'
  };
  ReactDOM.render(<Gallery {...props} />, galleries[0]);
}
