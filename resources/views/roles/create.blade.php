<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-2">
            <a href="{{ route('roles.index') }}" class="text-gray-400 hover:text-gray-900 transition-colors">
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
            </a>
            <h2 class="font-extrabold text-2xl text-[#1A0A05] leading-tight">
                {{ __('Add New Role') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <x-card>
                <x-slot name="header">
                    {{ __('Provide Role Details') }}
                </x-slot>

                <form id="role-form" action="{{ route('roles.store') }}" method="POST" class="space-y-6">
                    @csrf
                    
                    <div>
                        <x-label for="title" value="{{ __('Role Title') }}" class="font-bold text-gray-700 mb-1" />
                        <x-input id="title" class="block w-full bg-gray-50/50 border-gray-200 focus:border-chaa-yellow focus:ring-chaa-yellow/20 rounded-xl" type="text" name="title" :value="old('title')" placeholder="e.g. Sales Manager, Inventory Admin" required autofocus />
                        <x-input-error for="title" class="mt-2" />
                    </div>

                    <div>
                        <x-label for="status" value="{{ __('Status') }}" class="font-bold text-gray-700 mb-1" />
                        <select id="status" name="status" class="block w-full bg-gray-50/50 border border-gray-200 focus:border-chaa-yellow focus:ring-chaa-yellow/20 rounded-xl shadow-sm text-sm text-gray-700 py-2.5 px-3" required>
                            <option value="active" {{ old('status') === 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ old('status') === 'inactive' ? 'selected' : '' }}>Inactive</option>
                        </select>
                        <x-input-error for="status" class="mt-2" />
                    </div>

                    <x-slot name="footer">
                        <a href="{{ route('roles.index') }}" class="text-sm text-gray-500 font-bold hover:text-gray-900 mr-6 transition-colors duration-200">
                            Cancel
                        </a>
                        <x-button form="role-form">
                            {{ __('Save Role') }}
                        </x-button>
                    </x-slot>
                </form>
            </x-card>
        </div>
    </div>
</x-app-layout>
