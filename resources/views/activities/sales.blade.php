<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            ACTIVITIES: {{ __('Sales Tracking') }}
        </h2>
    </x-slot>

    <div class="py-6 space-y-6">
        <x-card shadow="lg">
            <x-slot name="header">
                <div class="flex items-center justify-between">
                    <span>{{ __('Sales Operations') }}</span>
                    <button class="px-4 py-2 bg-chaa-maroon text-white font-bold text-xs uppercase rounded-lg hover:bg-chaa-warm transition duration-150 shadow-md">
                        Record New Sale
                    </button>
                </div>
            </x-slot>

            <div class="text-center py-12">
                <div class="mb-4 inline-flex items-center justify-center w-16 h-16 bg-chaa-latte text-chaa-maroon rounded-full">
                    <svg class="size-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2 italic tracking-tighter uppercase">No Active Sales</h3>
                <p class="text-gray-500 mb-6 font-medium">Track all daily and historical sales transactions to gain revenue insights.</p>
                <div class="bg-gray-50 rounded-xl p-8 border border-dashed border-gray-200 text-gray-400 font-black italic tracking-widest uppercase">
                    Register sales movement.
                </div>
            </div>
        </x-card>
    </div>
</x-app-layout>