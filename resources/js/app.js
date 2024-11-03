import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

Echo.private('chat')
    .listen('MessageSent', function (event) {
        console.log(event);
    });
