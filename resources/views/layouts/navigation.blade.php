<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                     <svg class="block h-10 w-auto fill-current text-gray-600"  height="512" viewBox="0 0 60 60" width="512" xmlns="http://www.w3.org/2000/svg"><g fill-rule="nonzero" fill="none"><path d="M45.44 3a1.866 1.866 0 00-.07.22l-1.81 6.77-1.29 4.83-8.72 32.53a.739.739 0 00-.02.33.857.857 0 00.05.27l1.79 4.95 1.48 4.1H15V3zM15 3v54a2.006 2.006 0 01-2 2H7a2.006 2.006 0 01-2-2v-5h3a2.015 2.015 0 002-2 2.006 2.006 0 00-2-2H5v-9h3a2.015 2.015 0 002-2 2.006 2.006 0 00-2-2H5V25h3a2.015 2.015 0 002-2 2.006 2.006 0 00-2-2H5v-9h3a2.015 2.015 0 002-2 2.006 2.006 0 00-2-2H5V3a2.006 2.006 0 012-2h6a2.006 2.006 0 012 2z" fill="#e8edfc"/><g fill="#a4c2f7"><path d="M30.375 29.779l-2.75-2.2a1 1 0 00-1.25 0l-2.75 2.2A1 1 0 0122 29V3h10v26a1 1 0 01-1.625.779zM10 10a2.015 2.015 0 01-2 2H3a2.006 2.006 0 01-2-2c-.003-.53.21-1.04.59-1.41.37-.38.88-.593 1.41-.59h5a2.006 2.006 0 012 2zM10 23a2.015 2.015 0 01-2 2H3a2.006 2.006 0 01-2-2c-.003-.53.21-1.04.59-1.41.37-.38.88-.593 1.41-.59h5a2.006 2.006 0 012 2zM10 37a2.015 2.015 0 01-2 2H3a2.006 2.006 0 01-2-2c-.003-.53.21-1.04.59-1.41.37-.38.88-.593 1.41-.59h5a2.006 2.006 0 012 2zM10 50a2.015 2.015 0 01-2 2H3a2.006 2.006 0 01-2-2c-.003-.53.21-1.04.59-1.41.37-.38.88-.593 1.41-.59h5a2.006 2.006 0 012 2zM57.09 13.61l-1.3 4.83-13.52-3.62 1.29-4.83z"/></g><path d="M43.56 9.99l-.2.749 10.73 2.871-1.098 4.081 2.798.749 1.3-4.83z" fill="#7facfa"/><path d="M55.79 18.44L53 28.86l-5.93 22.12c-.029.103-.073.2-.13.29l-13.41-3.59a.739.739 0 01.02-.33l8.72-32.53z" fill="#e8edfc"/><path d="M42.27 14.82l-.2.749 10.72 2.871L50 28.86l-5.81 21.674 2.75.736c.057-.09.101-.187.13-.29L53 28.86l2.79-10.42z" fill="#cad9fc"/><path d="M42.74 54.86L40.21 57l-2.03 1.71a.5.5 0 01-.79-.22L36.85 57l-1.48-4.1z" fill="#a4c2f7"/><path d="M58.9 6.85l-1.81 6.76-13.53-3.62 1.81-6.77a3 3 0 013.68-2.12l7.73 2.07a3.005 3.005 0 012.12 3.68z" fill="#e8edfc"/><path d="M56.78 3.17L49.05 1.1a2.992 2.992 0 00-2.142.23l6.872 1.84a3.005 3.005 0 012.12 3.68l-1.609 6.011 2.8.749L58.9 6.85a3.005 3.005 0 00-2.12-3.68z" fill="#cad9fc"/><path d="M46.94 51.27a.952.952 0 01-.19.21l-4.01 3.38-7.37-1.96-1.79-4.95a.857.857 0 01-.05-.27z" fill="#e8edfc"/><path d="M53 28.86V53a4 4 0 01-4 4h-8.79l2.53-2.14 4.01-3.38a.952.952 0 00.32-.5z" fill="#e8edfc"/><path d="M50 40.051V53a4 4 0 01-4 4h3a4 4 0 004-4V28.86z" fill="#cad9fc"/><path d="M48.462 8.158A1 1 0 0147.5 6.9l.259-.965A2 2 0 0150.2 4.519l.966.258a1 1 0 01-.518 1.932l-.965-.259-.26.966a1 1 0 01-.961.742z" fill="#e8edfc"/><path d="M7 59h3a2.006 2.006 0 01-2-2v-5H6a2 2 0 01-1.41-3.41c.37-.38.88-.593 1.41-.59h2v-9H6a2 2 0 01-1.41-3.41c.37-.38.88-.593 1.41-.59h2V25H6a2 2 0 01-1.41-3.41c.37-.38.88-.593 1.41-.59h2v-9H6a2 2 0 01-1.41-3.41c.37-.38.88-.593 1.41-.59h2V3a2.006 2.006 0 012-2H7a2.006 2.006 0 00-2 2v5H3c-.53-.003-1.04.21-1.41.59A2 2 0 003 12h2v9H3c-.53-.003-1.04.21-1.41.59A2 2 0 003 25h2v10H3c-.53-.003-1.04.21-1.41.59A2 2 0 003 39h2v9H3c-.53-.003-1.04.21-1.41.59A2 2 0 003 52h2v5a2.006 2.006 0 002 2zM15 56h8v2h-8z" fill="#fff"/><path d="M19.02 58a1 1 0 01-.01-2h.01a1 1 0 010 2z" fill="#428dff"/><path d="M57.034 2.208L49.307.137A3.955 3.955 0 0044.826 2h-29.01A3 3 0 0013 0H7a3 3 0 00-3 3v4H3a3 3 0 100 6h1v7H3a3 3 0 000 6h1v8H3a3 3 0 000 6h1v7H3a3 3 0 000 6h1v4a3 3 0 003 3h6a3 3 0 003-3V4h5v25a2 2 0 003.25 1.562l2.75-2.2 2.75 2.2A2 2 0 0033 29V4h11.131L42.6 9.727 32.584 47.1c-.087.398-.07.811.051 1.2l2.787 7.7H23a1 1 0 000 2h13.145l.3.834a1.5 1.5 0 002.377.637L40.569 58H49a5.006 5.006 0 005-5V28.986L56.756 18.7l1.294-4.829 1.812-6.762a4 4 0 00-2.828-4.901zm-9.763.061a2 2 0 011.518-.2l7.728 2.07a2 2 0 011.415 2.45l-1.554 5.8-5.8-1.553-5.8-1.553 1.553-5.8c.139-.514.477-.951.94-1.214zm8.589 12.047l-.776 2.9-8.693-2.329-2.9-.777.777-2.9 5.795 1.553zm-9.577 35.743l-1.931-.517 4.918-18.356a1 1 0 00-1.932-.518L42.42 49.025l-3.865-1.035 2.072-7.732a1 1 0 10-1.927-.518l-2.071 7.733-1.932-.517 8.278-30.916 1.932.518-4.918 18.353a1 1 0 001.932.517l4.918-18.353 3.861 1.036-2.071 7.727a1 1 0 001.931.517l2.072-7.727 1.931.518zM42.5 53.76l-6.37-1.694-1.063-2.941 9.815 2.628zM2 10a1 1 0 011-1h5a1 1 0 010 2H3a1 1 0 01-1-1zm0 13a1 1 0 011-1h5a1 1 0 010 2H3a1 1 0 01-1-1zm0 14a1 1 0 011-1h5a1 1 0 010 2H3a1 1 0 01-1-1zm0 13a1 1 0 011-1h5a1 1 0 010 2H3a1 1 0 01-1-1zm11 8H7a1 1 0 01-1-1v-4h2a3 3 0 000-6H6v-7h2a3 3 0 000-6H6v-8h2a3 3 0 000-6H6v-7h2a3 3 0 000-6H6V3a1 1 0 011-1h6a1 1 0 011 1v54a1 1 0 01-1 1zm18.006-29H31l-2.75-2.2c-.73-.59-1.77-.59-2.5 0L23 29V4h8zm7.077 28.477l-1.129-3.123 3.676.977zM52 53a3 3 0 01-3 3h-6.058l4.458-3.753a2.1 2.1 0 00.642-1.011L52 36.45z" fill="#428dff"/></g></svg> 

                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link :href="route('journals.index')" :active="request()->routeIs('journals.*')">
                        {{ __('Journals') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                <div class="flex-shrink-0">
                    <svg class="h-10 w-10 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>

                <div class="ml-3">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
