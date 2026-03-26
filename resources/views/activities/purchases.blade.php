<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight tracking-tight uppercase">
            ACTIVITIES: {{ __('Purchases Management') }}
        </h2>
    </x-slot>

    <div class="py-6 space-y-6">
        <x-card>
            <x-slot name="header">
                <div class="flex items-center justify-between">
                    <span>{{ __('Purchase History Tracking') }}</span>
                    <button class="px-4 py-2 bg-chaa-brown text-white font-bold text-xs uppercase rounded-lg hover:bg-chaa-maroon transition duration-150 shadow-md">
                        Record Purchase
                    </button>
                </div>
            </x-slot>

            <div class="text-center py-12">
                <div class="mb-4 inline-flex items-center justify-center w-16 h-16 bg-chaa-latte text-chaa-brown rounded-full">
                    <svg class="size-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2 italic uppercase">No Purchases Logged</h3>
                <p class="text-gray-500 mb-6 font-medium">Log and track all item purchases from vendors to maintain inventory accuracy.</p>
                <div class="bg-gray-50 rounded-xl p-8 border border-dashed border-gray-200 text-gray-400 font-bold uppercase tracking-wider">
                    Log your first purchase activity.
                </div>
            </div>
        </x-card>
    </div>
</x-app-layout>