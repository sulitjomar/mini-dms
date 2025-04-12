import './bootstrap';
document.addEventListener('DOMContentLoaded', function () {
    Livewire.on('toggleSidebar', () => {
        const sidebar = document.querySelector('aside');
        sidebar.classList.toggle('hidden');
    });
});