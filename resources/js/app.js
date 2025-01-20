import Alpine from 'alpinejs';
import './bootstrap';

//Initializing Alpinejs
import persist from '@alpinejs/persist';

Alpine.plugin(persist);

window.Alpine = Alpine;

Alpine.start();

//Update title
document.addEventListener('DOMContentLoaded', function () {
    Livewire.on('updateTitle', (title) => {
        document.title = title;
    });
    Livewire.on('darkModeUpdated', (data) => {
        const { darkMode } = data;
        document.body.classList.toggle('dark', darkMode);
    });
    Livewire.on('start-preloader-timeout', (data) => {
        setTimeout(() => {
            Livewire.dispatch('hidePreloader');
        }, data[0].counter);
    });
});
