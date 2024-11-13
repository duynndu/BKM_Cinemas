/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from "axios";
import { route } from 'ziggy-js';
import $ from "jquery";
import Alpine from "alpinejs";
import * as utils from "@/utils/common";
import Services from "./services";
import "./components";
import moment from "moment";
import "./moment.vi";
import Echo from "laravel-echo";
moment.locale("vi");

// thư viện
window.axios = axios;
window.route = route;
window.Alpine = Alpine;

window.axios.defaults.headers.common['X-CSRF-TOKEN'] = $('meta[name="csrf-token"]').attr('content') ?? '';
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
window.axios.defaults.baseURL = "/api";

// Request interceptor
window.axios.interceptors.request.use(
  (config) => {
    const methodsToOverride = ['delete', 'put', 'patch'];

    if (methodsToOverride.includes(config.method ?? '')) {
      config.headers['X-HTTP-Method-Override'] = config.method;
      config.method = 'post';
    }

    return config;
  },
  (error) => {
    console.error('Request interceptor error:', error);
    return Promise.reject(error);
  }
);

// Response interceptor
window.axios.interceptors.response.use(
  (response) => {
    return response;
  },
  (error) => {

    if (error.response && error.response.status === 401) {

    }
    return Promise.reject(error);
  }
);

// custom
window.utils = utils;
window.Services = Services;



Alpine.start();


/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */


import Pusher from 'pusher-js';
window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: import.meta.env.VITE_PUSHER_APP_KEY,
    cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER ?? 'mt1',
    wsHost: import.meta.env.VITE_PUSHER_HOST ? import.meta.env.VITE_PUSHER_HOST : `ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
    wsPort: import.meta.env.VITE_PUSHER_PORT ?? 80,
    wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
    forceTLS: (import.meta.env.VITE_PUSHER_SCHEME ?? 'https') === 'https',
    enabledTransports: ['ws', 'wss'],
});
