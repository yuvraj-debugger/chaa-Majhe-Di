<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            ACTIVITIES: {{ __('Expenses Tracking') }}
        </h2>
    </x-slot>

    <div class="py-6 space-y-6">
        <x-card>
            <x-slot name="header">
                <div class="flex items-center justify-between">
                    <span>{{ __('Daily Expense Records') }}</span>
                    <button class="px-4 py-2 bg-chaa-brown text-white font-bold text-xs uppercase rounded-lg hover:bg-chaa-maroon transition duration-150 shadow-md">
                        Log New Expense
                    </button>
                </div>
            </x-slot>

            <div class="text-center py-12">
                <div class="mb-4 inline-flex items-center justify-center w-16 h-16 bg-chaa-latte text-chaa-brown rounded-full">
                    <svg class="size-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2 italic">Expense Tracking Active</h3>
                <p class="text-gray-500 mb-6 font-medium tracking-tight">Keep track of all outgoings and business expenses here.</p>
                <div class="bg-gray-50 rounded-xl p-8 border border-dashed border-gray-200 text-gray-400 italic font-bold tracking-widest uppercase">
                    No expense records found.
                </div>
            </div>
        </x-card>
    </div>
</x-app-layout>