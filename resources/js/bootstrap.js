import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

mix.js('resources/js/app.js', 'public/js')
.postCss('resources/css/app.css', 'public/css', [
    //
]);