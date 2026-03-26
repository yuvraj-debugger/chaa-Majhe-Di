<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between w-full">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Users Management') }}
            </h2>
            <a href="{{ route('users.create') }}" class="inline-flex items-center px-4 py-2 bg-chaa-maroon border border-transparent rounded-lg font-bold text-xs text-white uppercase tracking-widest hover:bg-chaa-warm active:bg-chaa-brown focus:outline-none focus:ring-2 focus:ring-chaa-yellow focus:ring-offset-2 transition duration-200">
                Add User
            </a>
        </div>
    </x-slot>

    <div class="py-6 space-y-6">
        @if(session('success'))
            <div class="px-4 py-3 bg-green-100 border border-green-400 text-green-700 rounded-lg relative" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <x-card>
            <x-slot name="header">
                {{ __('Users Directory') }}
            </x-slot>

            <div class="overflow-x-auto -mx-6 -my-6">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50 text-gray-500 uppercase text-xs font-bold tracking-wider">
                        <tr>
                            <th scope="col" class="px-6 py-4 text-left">User</th>
                            <th scope="col" class="px-6 py-4 text-left">Email Address</th>
                            <th scope="col" class="px-6 py-4 text-left">Status</th>
                            <th scope="col" class="px-6 py-4 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @foreach($users as $user)
                        <tr class="hover:bg-gray-50 transition-colors duration-150">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full object-cover ring-2 ring-chaa-maroon/10" src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-bold text-gray-900">{{ $user->name }}</div>
                                        <div class="text-xs text-gray-500">Member since {{ $user->created_at->format('Y') }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 font-medium tracking-tight">{{ $user->email }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-bold rounded-full bg-green-100 text-green-800 uppercase tracking-tighter">
                                    Active
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-bold space-x-3">
                                <a href="{{ route('users.edit', $user) }}" class="text-chaa-maroon hover:text-chaa-warm transition-colors underline decoration-2 underline-offset-4">Edit</a>
                                <form action="{{ route('users.destroy', $user) }}" method="POST" class="inline-block" onsubmit="return confirm('Delete this user?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-rose-600 hover:text-rose-800 transition-colors">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </x-card>
    </div>
</x-app-layout>