<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-2">
            <a href="{{ route('users.index') }}" class="text-gray-400 hover:text-gray-900 transition-colors">
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
            </a>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit User') }}: {{ $user->name }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <x-card>
                <x-slot name="header">
                    {{ __('Update User Information') }}
                </x-slot>

                <form action="{{ route('users.update', $user) }}" method="POST" class="space-y-6">
                    @csrf
                    @method('PUT')
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <x-label for="name" value="{{ __('Full Name') }}" class="font-bold text-gray-700 mb-1" />
                            <x-input id="name" class="block w-full bg-gray-50/50 border-gray-200 focus:border-chaa-yellow focus:ring-chaa-yellow/20 rounded-xl" type="text" name="name" :value="old('name', $user->name)" required autofocus />
                            <x-input-error for="name" class="mt-2" />
                        </div>

                        <div>
                            <x-label for="email" value="{{ __('Email Address') }}" class="font-bold text-gray-700 mb-1" />
                            <x-input id="email" class="block w-full bg-gray-50/50 border-gray-200 focus:border-chaa-yellow focus:ring-chaa-yellow/20 rounded-xl" type="email" name="email" :value="old('email', $user->email)" required />
                            <x-input-error for="email" class="mt-2" />
                        </div>
                    </div>

                    <div class="pt-6 border-t border-gray-100 italic text-sm text-gray-500">
                        {{ __('To keep the current password, leave the fields below empty.') }}
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <x-label for="password" value="{{ __('New Password') }}" class="font-bold text-gray-700 mb-1" />
                            <x-input id="password" class="block w-full bg-gray-50/50 border-gray-200 focus:border-chaa-yellow focus:ring-chaa-yellow/20 rounded-xl" type="password" name="password" autocomplete="new-password" />
                            <x-input-error for="password" class="mt-2" />
                        </div>

                        <div>
                            <x-label for="password_confirmation" value="{{ __('Confirm New Password') }}" class="font-bold text-gray-700 mb-1" />
                            <x-input id="password_confirmation" class="block w-full bg-gray-50/50 border-gray-200 focus:border-chaa-yellow focus:ring-chaa-yellow/20 rounded-xl" type="password" name="password_confirmation" autocomplete="new-password" />
                        </div>
                    </div>

                    <x-slot name="footer">
                        <a href="{{ route('users.index') }}" class="text-sm font-bold text-gray-500 hover:text-gray-900 mr-6 transition-colors transition-all duration-200">
                            Cancel
                        </a>
                        <x-button>
                            {{ __('Update User') }}
                        </x-button>
                    </x-slot>
                </form>
            </x-card>
        </div>
    </div>
</x-app-layout>
