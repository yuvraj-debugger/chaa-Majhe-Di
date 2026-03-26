<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contact Messages') }}
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
                {{ __('Incoming Submissions') }}
            </x-slot>

            <div class="overflow-x-auto -mx-6 -my-6">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50 text-gray-500 uppercase text-xs font-bold tracking-wider">
                        <tr>
                            <th scope="col" class="px-6 py-4 text-left">Name</th>
                            <th scope="col" class="px-6 py-4 text-left">Phone Number</th>
                            <th scope="col" class="px-6 py-4 text-left">Email Address</th>
                            <th scope="col" class="px-6 py-4 text-left">Message</th>
                            <th scope="col" class="px-6 py-4 text-left">Received Date</th>
                            <th scope="col" class="px-6 py-4 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse($contacts as $contact)
                        <tr class="hover:bg-gray-50 transition-colors duration-150">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-bold text-gray-900">{{ $contact->name }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 font-medium italic">
                                {{ $contact->number }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 font-medium">
                                {{ $contact->email }}
                            </td>
                            <td class="px-6 py-4">
                                <p class="text-sm text-gray-600 line-clamp-2 max-w-xs font-medium italic">{{ $contact->message }}</p>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 font-bold uppercase tracking-tighter">
                                {{ $contact->created_at->format('M d, Y') }} <br>
                                <span class="text-[10px] opacity-60 italic">{{ $contact->created_at->diffForHumans() }}</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-bold space-x-3">
                                <form action="{{ route('contacts.destroy', $contact) }}" method="POST" class="inline-block" onsubmit="return confirm('Delete this record permanently?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-rose-400 hover:text-rose-600 transition-all transform hover:scale-110 p-2 rounded-full hover:bg-rose-50" title="Delete Message">
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
                                Inbox is currently empty.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </x-card>
    </div>
</x-app-layout>
