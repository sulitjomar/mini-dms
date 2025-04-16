<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>{{ $title ?? 'Dealership Management System' }}</title>
    @livewireStyles
</head>
<body class="bg-gray-100">
    <div class="flex">
        <livewire:ui.sidebar />
        <div class="flex-1">
            <!-- Header -->
            <header class="bg-white shadow-md p-4 flex items-center justify-between space-x-4">
                <!-- Left: Hamburger and Title -->
                <div class="flex items-center space-x-4">
                    <!-- Hamburger Button -->
                    <button 
                        wire:click="$emit('toggleSidebar')" 
                        class="text-gray-700 hover:text-gray-900 focus:outline-none block md:hidden"
                    >
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                    <!-- Add this to show the header: {{ $header ?? 'Dashboard' }} -->
                    <h1 class="text-xl font-semibold text-gray-700"></h1>
                </div>

                <!-- Right: Search bar and Profile -->
                <div class="flex items-center space-x-4">
                    <!-- Search Bar -->
                    <div class="relative hidden sm:block">
                        <input type="text" placeholder="Search..." class="w-64 px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        <svg class="absolute top-1/2 right-4 transform -translate-y-1/2 w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>

                    <!-- Profile Dropdown -->
                    <div class="relative">
                        <button 
                            class="flex items-center space-x-2 text-gray-700 hover:text-gray-900"
                            aria-expanded="false"
                            aria-controls="profile-menu"
                        >
                            <img src="https://www.gravatar.com/avatar/{{ md5(strtolower(trim('your-email@example.com'))) }}" alt="Profile" class="w-8 h-8 rounded-full">
                            <span class="hidden sm:block">John Doe</span>
                        </button>

                        <!-- Profile Dropdown Menu (hidden by default) -->
                        <div id="profile-menu" class="absolute right-0 w-48 mt-2 bg-white border border-gray-200 rounded-md shadow-lg hidden">
                            <ul class="space-y-1">
                                <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profile</a></li>
                                <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Settings</a></li>
                                <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Main Content -->
            <main class="flex-1 p-6 mx-2 my-2 bg-white shadow-md rounded-lg">
                {{ $slot }}
            </main>
        </div>
    </div>

    @vite('resources/js/app.js') 
    @livewireScripts

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            window.addEventListener('toggle-sidebar', event => {
                console.log('Sidebar state: ', event.detail.status);
            });

            // Profile dropdown toggle
            const profileButton = document.querySelector('button[aria-expanded]');
            const profileDropdown = document.querySelector('#profile-menu');

            if (profileButton && profileDropdown) {
                profileButton.addEventListener('click', () => {
                    profileDropdown.classList.toggle('hidden');
                    const expanded = profileButton.getAttribute('aria-expanded') === 'true';
                    profileButton.setAttribute('aria-expanded', !expanded);
                });
            }
        });
    </script>
</body>
</html>