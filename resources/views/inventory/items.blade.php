<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight uppercase tracking-tight">
            INVENTORY: {{ __('Items') }}
        </h2>
    </x-slot>

    <div class="py-6 space-y-6">
        <x-card>
            <x-slot name="header">
                <div class="flex items-center justify-between">
                    <span>{{ __('Items Management') }}</span>
                    <button class="px-4 py-2 bg-chaa-maroon text-white font-bold text-xs uppercase rounded-lg hover:bg-chaa-warm transition duration-150 shadow-md">
                        Add New Item
                    </button>
                </div>
            </x-slot>

            <div class="text-center py-12">
                <div class="mb-4 inline-flex items-center justify-center w-16 h-16 bg-chaa-latte text-chaa-maroon rounded-full">
                    <svg class="size-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2 italic">Product Catalog Empty</h3>
                <p class="text-gray-500 mb-6 font-medium">Manage your products and stock levels here to start tracking inventory.</p>
                <div class="bg-gray-50 rounded-xl p-8 border border-dashed border-gray-200 text-gray-400 italic font-medium">
                    No items found in inventory directory.
                </div>
            </div>
        </x-card>
    </div>
</x-app-layout>