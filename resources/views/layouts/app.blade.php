<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased bg-gray-50">
    <x-banner />

    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside id="sidebar"
            class="flex flex-col w-64 bg-white border-r border-gray-200 transition-all duration-300 ease-in-out">
            <div class="flex flex-col flex-grow pt-5 pb-4 overflow-y-auto">
                <div class="flex items-center flex-shrink-0 px-6 mb-8">
                    <x-application-mark class="block h-9 w-auto" />
                    <span class="ml-3 text-xl font-bold text-gray-800 tracking-tight">Chaa Majhe Di</span>
                </div>

                <nav class="flex-1 px-4 space-y-6">
                    <!-- Dashboard -->
                    <div>
                        <x-sidebar-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                            <svg class="mr-3 size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            {{ __('Dashboard') }}
                        </x-sidebar-link>
                    </div>

                    <!-- PEOPLE Section -->
                    <div>
                        <p class="px-4 mb-2 text-xs font-semibold text-gray-400 uppercase tracking-wider">
                            PEOPLE
                        </p>
                        <x-sidebar-link href="{{ route('users.index') }}" :active="request()->routeIs('users.*')">
                            <svg class="mr-3 size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                            {{ __('Users') }}
                        </x-sidebar-link>
                        <x-sidebar-link href="{{ route('contacts.index') }}" :active="request()->routeIs('contacts.*')">
                            <svg class="mr-3 size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                            </svg>
                            {{ __('Contact Messages') }}
                        </x-sidebar-link>
                        <x-sidebar-link href="{{ route('franchises.index') }}" :active="request()->routeIs('franchises.*')">
                            <svg class="mr-3 size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5" />
                            </svg>
                            {{ __('Franchise Inquiries') }}
                        </x-sidebar-link>
                        <x-sidebar-link href="{{ route('galleries.index') }}" :active="request()->routeIs('galleries.*')">
                            <svg class="mr-3 size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            {{ __('Gallery Showcase') }}
                        </x-sidebar-link>
                    </div>

                    <!-- INVENTORY Section -->
                    <div>
                        <p class="px-4 mb-2 text-xs font-semibold text-gray-400 uppercase tracking-wider">
                            INVENTORY
                        </p>
                        <x-sidebar-link href="{{ route('items.index') }}" :active="request()->routeIs('items.index')">
                            <svg class="mr-3 size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                            </svg>
                            {{ __('Items') }}
                        </x-sidebar-link>
                    </div>

                    <!-- ACTIVITIES Section -->
                    <div>
                        <p class="px-4 mb-2 text-xs font-semibold text-gray-400 uppercase tracking-wider">
                            ACTIVITIES
                        </p>
                        <div class="space-y-1">
                            <x-sidebar-link href="{{ route('expenses.index') }}"
                                :active="request()->routeIs('expenses.index')">
                                <svg class="mr-3 size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                {{ __('Expenses') }}
                            </x-sidebar-link>
                            <x-sidebar-link href="{{ route('purchases.index') }}"
                                :active="request()->routeIs('purchases.index')">
                                <svg class="mr-3 size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                {{ __('Purchases') }}
                            </x-sidebar-link>
                            <x-sidebar-link href="{{ route('sales.index') }}"
                                :active="request()->routeIs('sales.index')">
                                <svg class="mr-3 size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                </svg>
                                {{ __('Sales') }}
                            </x-sidebar-link>
                        </div>
                    </div>
                </nav>
            </div>

            <!-- User Profile -->
            <div class="flex-shrink-0 flex border-t border-gray-200 p-4">
                <x-dropdown align="top" width="48">
                    <x-slot name="trigger">
                        <button class="flex-shrink-0 w-full group block">
                            <div class="flex items-center">
                                <div>
                                    <img class="inline-block h-9 w-9 rounded-full"
                                        src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                                </div>
                                <div class="ml-3 text-left">
                                    <p class="text-sm font-medium text-gray-700 group-hover:text-gray-900">
                                        {{ Auth::user()->name }}
                                    </p>
                                    <p class="text-xs font-medium text-gray-500 group-hover:text-gray-700">
                                        View profile
                                    </p>
                                </div>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Manage Account') }}
                        </div>

                        <x-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <div class="border-t border-gray-200"></div>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf

                            <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        </aside>

        <!-- Main Content Area -->
        <div class="flex flex-col flex-1 overflow-hidden">
            <!-- Top Header -->
            <header class="bg-white border-b border-gray-200 z-10">
                <div class="flex items-center justify-between h-16 px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center">
                        @if (isset($header))
                        {{ $header }}
                        @endif
                    </div>
                    <div class="flex items-center space-x-4">
                        <!-- Mobile Menu Button could go here if needed -->
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1 relative overflow-y-auto focus:outline-none focus:bg-gray-50">
                <div class="py-6">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        {{ $slot }}
                    </div>
                </div>
            </main>
        </div>
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>