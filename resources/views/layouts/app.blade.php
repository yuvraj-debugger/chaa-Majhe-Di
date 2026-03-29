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
    <style>
        body {
            background-color: #FDF9F3 !important;
        }

        aside#sidebar {
            background-color: #1A0A05 !important;
            border-right: 1px solid rgba(255, 255, 255, 0.05) !important;
        }

        header {
            background-color: rgba(255, 255, 255, 0.7) !important;
            backdrop-filter: blur(12px) !important;
            -webkit-backdrop-filter: blur(12px) !important;
            border-bottom: 1px solid rgba(201, 168, 76, 0.1) !important;
        }

        /* Sidebar Typography Overrides */
        aside nav p {
            color: rgba(201, 168, 76, 0.4) !important;
            font-weight: 900 !important;
            letter-spacing: 0.3em !important;
        }

        aside a {
            color: rgba(232, 201, 122, 0.6) !important;
            text-decoration: none !important;
        }

        aside a:hover,
        aside a.sidebar-active {
            color: #ffffff !important;
            background-color: rgba(255, 255, 255, 0.05) !important;
        }

        aside a svg {
            color: inherit !important;
            flex-shrink: 0;
        }

        aside span {
            color: #ffffff !important;
        }

        /* Sidebar Logo Header */
        .sidebar-brand {
            color: #ffffff !important;
            font-weight: 900 !important;
            font-style: italic !important;
            text-transform: uppercase !important;
        }
    </style>
</head>

<body class="font-sans antialiased bg-[#FDF9F3]">
    <x-banner />

    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside id="sidebar"
            class="flex flex-col w-64 bg-[#1A0A05] border-r border-white/5 transition-all duration-300 ease-in-out">
            <div class="flex flex-col flex-grow pt-5 pb-4 overflow-y-auto">
                <div class="flex items-center flex-shrink-0 px-6 mb-10">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Chaa Majhe Di Logo"
                        class="h-10 w-10 rounded-full object-cover border border-[#C9A84C]/20 shadow-lg">
                    <span
                        class="sidebar-brand ml-3 text-lg font-black text-white italic tracking-tighter uppercase">Chaa
                        Majhe Di</span>
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
                        <p class="px-5 mb-3 text-[9px] font-black text-[#C9A84C]/40 uppercase tracking-[0.3em]">
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                            </svg>
                            {{ __('Contact Messages') }}
                        </x-sidebar-link>
                        <x-sidebar-link href="{{ route('franchises.index') }}"
                            :active="request()->routeIs('franchises.*')">
                            <svg class="mr-3 size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5" />
                            </svg>
                            {{ __('Franchise Inquiries') }}
                        </x-sidebar-link>
                        <x-sidebar-link href="{{ route('galleries.index') }}"
                            :active="request()->routeIs('galleries.*')">
                            <svg class="mr-3 size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            {{ __('Gallery Showcase') }}
                        </x-sidebar-link>
                        <x-sidebar-link href="{{ route('menus.index') }}" :active="request()->routeIs('menus.*')">
                            <svg class="mr-3 size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                            {{ __('Menu Selection') }}
                        </x-sidebar-link>
                    </div>

                    <!-- INVENTORY Section -->
                    <div>
                        <p class="px-5 mb-3 text-[9px] font-black text-[#C9A84C]/40 uppercase tracking-[0.3em]">
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
                        <p class="px-5 mb-3 text-[9px] font-black text-[#C9A84C]/40 uppercase tracking-[0.3em]">
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
        </aside>

        <!-- Main Content Area -->
        <div class="flex flex-col flex-1 overflow-hidden">
            <!-- Top Header -->
            <header class="bg-white/80 backdrop-blur-md border-b border-[#C9A84C]/10 z-10">
                <div class="flex items-center justify-between h-16 px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center">
                        @if (isset($header))
                        {{ $header }}
                        @endif
                    </div>
                    <div class="flex items-center space-x-6">
                        <!-- User Profile Dropdown -->
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button
                                    class="flex items-center group focus:outline-none focus:ring-2 focus:ring-[#C9A84C]/20 p-1 rounded-xl transition-all hover:bg-[#1A0A05]/5">
                                    <div class="text-right mr-3 hidden sm:block">
                                        <p class="text-[10px] font-black text-[#1A0A05] uppercase tracking-widest">
                                            {{ Auth::user()->name }}
                                        </p>

                                    </div>
                                    <div
                                        class="h-9 w-9 rounded-xl overflow-hidden border-2 border-[#C9A84C]/20 group-hover:border-[#C9A84C]">
                                        <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}"
                                            class="h-full w-full object-cover">
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <div
                                    class="block px-4 py-3 text-[9px] font-black uppercase tracking-[0.2em] text-[#C9A84C] border-b border-gray-50">
                                    {{ __('Manage Registry') }}
                                </div>

                                <x-dropdown-link href="{{ route('profile.show') }}"
                                    class="text-[10px] font-bold uppercase tracking-widest py-3">
                                    {{ __('My Profile') }}
                                </x-dropdown-link>

                                <div class="border-t border-gray-100"></div>

                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf
                                    <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();"
                                        class="text-[10px] font-bold uppercase tracking-widest text-rose-600 py-3">
                                        {{ __('Termiante Session') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
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