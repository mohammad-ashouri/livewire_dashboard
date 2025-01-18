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
});
