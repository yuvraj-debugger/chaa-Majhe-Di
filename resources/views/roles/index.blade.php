<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between w-full">
            <h2 class="font-extrabold text-2xl text-[#1A0A05] leading-tight">
                {{ __('Roles Management') }}
            </h2>
            <a href="{{ route('roles.create') }}" class="inline-flex items-center px-4 py-2.5 bg-chaa-maroon border border-transparent rounded-xl font-bold text-xs text-white uppercase tracking-widest hover:bg-chaa-warm active:bg-chaa-brown focus:outline-none focus:ring-2 focus:ring-chaa-yellow focus:ring-offset-2 transition duration-200">
                Add Role
            </a>
        </div>
    </x-slot>

    <div class="py-6 space-y-6">
        @if(session('success'))
            <div class="px-4 py-3 bg-green-100 border border-green-400 text-green-700 rounded-xl relative" role="alert">
                <span class="block sm:inline font-semibold">{{ session('success') }}</span>
            </div>
        @endif

        <x-card>
            <x-slot name="header">
                <div class="flex justify-between items-center w-full">
                    <span class="font-bold text-stone-700">{{ __('Roles Directory') }}</span>
                    <form action="{{ route('roles.index') }}" method="GET" class="flex items-center space-x-2">
                        @if(request('sort_field'))
                            <input type="hidden" name="sort_field" value="{{ request('sort_field') }}">
                            <input type="hidden" name="sort_direction" value="{{ request('sort_direction') }}">
                        @endif
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Search role title or status..." class="rounded-xl border-gray-300 shadow-sm focus:border-chaa-yellow focus:ring focus:ring-chaa-yellow focus:ring-opacity-50 text-sm text-gray-700">
                        <button type="submit" class="px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-800 rounded-xl text-sm font-semibold transition-colors border border-gray-300">Filter</button>
                        @if(request('search'))
                            <a href="{{ route('roles.index') }}" class="px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-800 rounded-xl text-sm font-semibold transition-colors border border-gray-300">Clear</a>
                        @endif
                    </form>
                </div>
            </x-slot>

            <div class="overflow-x-auto -mx-6 -my-6">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50 text-gray-500 uppercase text-xs font-bold tracking-wider">
                        <tr>
                            <th scope="col" class="px-6 py-4 text-left">
                                <x-sortable-header field="id" label="ID" />
                            </th>
                            <th scope="col" class="px-6 py-4 text-left">
                                <x-sortable-header field="title" label="Title" />
                            </th>
                            <th scope="col" class="px-6 py-4 text-left">
                                <x-sortable-header field="status" label="Status" />
                            </th>
                            <th scope="col" class="px-6 py-4 text-left">Created By</th>
                            <th scope="col" class="px-6 py-4 text-left">
                                <x-sortable-header field="created_at" label="Created At" />
                            </th>
                            <th scope="col" class="px-6 py-4 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse($roles as $role)
                        <tr class="hover:bg-gray-50 transition-colors duration-150">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 font-medium">
                                #{{ $role->id }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-gray-900">
                                {{ $role->title }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($role->status === 'active')
                                    <span class="px-2.5 py-1 inline-flex text-[10px] leading-5 font-bold rounded-full bg-emerald-100 text-emerald-800 uppercase tracking-wider">
                                        Active
                                    </span>
                                @else
                                    <span class="px-2.5 py-1 inline-flex text-[10px] leading-5 font-bold rounded-full bg-stone-100 text-stone-600 uppercase tracking-wider">
                                        Inactive
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                {{ $role->creator?->name ?? 'System' }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $role->created_at->format('M d, Y h:i A') }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-bold space-x-3">
                                <a href="{{ route('roles.edit', $role) }}" class="text-chaa-maroon hover:text-chaa-warm transition-colors underline decoration-2 underline-offset-4">Edit</a>
                                <form action="{{ route('roles.destroy', $role) }}" method="POST" class="inline-block" onsubmit="return confirm('Delete this role?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-rose-600 hover:text-rose-800 transition-colors">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="px-6 py-10 text-center text-sm text-gray-500">
                                No roles found in the directory.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            <div class="mt-6 pt-4 border-t border-gray-100">
                {{ $roles->links() }}
            </div>
        </x-card>
    </div>
</x-app-layout>
