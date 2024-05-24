//window.alert("Bienvenido a nuestro sitio web");
//import './comun';

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';