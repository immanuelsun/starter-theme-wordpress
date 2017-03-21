require('./bootstrap');

// Vue.component('example', require('./components/Example.vue'));

var app = new Vue({
  el: '#app'
});

/*

=====

Below is the example of DOM routing that ships with Sage.
I'm not a fan of this approach, so I've commented it out
and left it here for reference.

import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

// 
// Populate Router instance with DOM routes
// @type {Router} routes - An instance of our router
// 
const routes = new Router({
  // all pages
  common,
  // home page
  home,
  // About Us page, note the change from about-us to aboutUs
  aboutUs,
});

// load router events
jQuery(document).ready(() => routes.loadEvents());

*/