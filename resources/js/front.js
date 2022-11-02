// @ts-nocheck
window.axios = require('axios');
window.Vue = require( 'vue' );

import router from './router/router';

window.axios.defaults.headers.common[ 'X-Requested-With' ] = 'XMLHttpRequest';

import App from './views/App.vue';


new Vue( {
    el: '#app',
    render(h) {
        return h(App)
    },
    router
} );
