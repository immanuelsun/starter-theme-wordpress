var $ = require('jquery');

wp.customize('blogname', (value) => {
  value.bind(to => $('.brand').text(to));
});
