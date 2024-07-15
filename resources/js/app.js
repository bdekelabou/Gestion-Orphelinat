import './bootstrap';

import.meta.glob([
    '../assets/images/**',
    '../assets/fonts/**',
])

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
