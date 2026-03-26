<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Franchise Inquiries') }}
        </h2>
    </x-slot>

    <div class="py-6 space-y-6">
        @if(session('success'))
            <div class="px-4 py-3 bg-green-100 border border-green-400 text-green-700 rounded-lg relative" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <x-card>
            <x-slot name="header">
                {{ __('Potential Partners') }}
            </x-slot>

            <div class="overflow-x-auto -mx-6 -my-6">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50 text-gray-500 uppercase text-xs font-bold tracking-wider">
                        <tr>
                            <th scope="col" class="px-6 py-4 text-left">Partner Details</th>
                            <th scope="col" class="px-6 py-4 text-left">Location (Area)</th>
                            <th scope="col" class="px-6 py-4 text-left">Model Type</th>
                            <th scope="col" class="px-6 py-4 text-left">Address/Message</th>
                            <th scope="col" class="px-6 py-4 text-left">Received Date</th>
                            <th scope="col" class="px-6 py-4 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse($franchises as $franchise)
                        <tr class="hover:bg-gray-50 transition-colors duration-150">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-bold text-gray-900">{{ $franchise->name }}</div>
                                <div class="text-xs text-gray-500 font-medium italic mb-1">{{ $franchise->email }}</div>
                                <div class="text-xs text-chaa-maroon font-bold">{{ $franchise->number }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-3 py-1 bg-chaa-maroon/5 text-chaa-maroon rounded-full text-[10px] font-black uppercase tracking-widest border border-chaa-maroon/10">
                                    {{ $franchise->area }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-3 py-1 {{ $franchise->model_type == 'Dining' ? 'bg-amber-100 text-amber-700 border-amber-200' : 'bg-blue-100 text-blue-700 border-blue-200' }} border rounded-full text-[10px] font-black uppercase tracking-widest">
                                    {{ $franchise->model_type }}
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-xs text-gray-600 font-medium max-w-xs truncate" title="{{ $franchise->address }}">
                                    <span class="font-bold text-gray-400">Address:</span> {{ $franchise->address }}
                                </div>
                                <div class="text-xs text-gray-600 font-medium italic max-w-xs truncate" title="{{ $franchise->message }}">
                                    <span class="font-bold text-gray-400">Message:</span> {{ $franchise->message ?: 'N/A' }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 font-bold uppercase tracking-tighter">
                                {{ $franchise->created_at->format('M d, Y') }} <br>
                                <span class="text-[10px] opacity-60 italic whitespace-nowrap">{{ $franchise->created_at->diffForHumans() }}</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-bold space-x-3">
                                <form action="{{ route('franchises.destroy', $franchise) }}" method="POST" class="inline-block" onsubmit="return confirm('Delete this inquiry permanently?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-rose-400 hover:text-rose-600 transition-all transform hover:scale-110 p-2 rounded-full hover:bg-rose-50" title="Delete Inquiry">
                                        <svg class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="px-6 py-12 text-center text-gray-500 font-bold uppercase tracking-widest text-xs italic">
                                No franchise inquiries yet.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </x-card>
    </div>
</x-app-layout>
