import axios from 'axios';
import ujs from '@rails/ujs';

window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

ujs.start();
