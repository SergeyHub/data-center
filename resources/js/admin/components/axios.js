const axios = require('axios');

axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
axios.defaults.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;

export const uploadImage = (file, then, params = {}) => {
  const formData = new FormData();
  formData.append('image', file);
  Object.keys(params).forEach(key => formData.append(key, params[key]));
  axios.post('/admin/upload/image', formData).then(then);
};

export const uploadFile = (file, then, params = {}) => {
  const formData = new FormData();
  formData.append('file', file);
  Object.keys(params).forEach(key => formData.append(key, params[key]));
  axios.post('/admin/upload/file', formData).then(then);
};
