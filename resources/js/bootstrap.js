import 'bootstrap';

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

import Echo from '@ably/laravel-echo';
import * as Ably from 'ably';

window.Ably = Ably;
window.Echo = new Echo({
    broadcaster: 'ably',
});

window.Echo.connector.ably.connection.on((stateChange) => {
    // console.log("LOGGER:: Connection event :: ", stateChange);
    if (stateChange.current === 'disconnected' && stateChange.reason?.code === 40142) { // key/token status expired
        console.log("LOGGER:: Connection token expired https://help.ably.io/error/40142");
    }
});
