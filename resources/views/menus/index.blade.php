<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight italic uppercase tracking-widest">
            {{ __('Selection Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Add Item Card -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-10 mb-10 border-b-4 border-chaa-maroon">
                <h3 class="text-xl font-black mb-8 italic uppercase tracking-widest text-chaa-maroon">Herald New
                    Selection</h3>

                <form action="{{ route('menus.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                        <div class="space-y-6">
                            <div class="space-y-2">
                                <label
                                    class="text-[10px] font-black uppercase tracking-[0.2em] text-chaa-brown/40 ml-1">Creation
                                    Name</label>
                                <input type="text" name="title" required placeholder="e.g. Royal Rose Tea"
                                    class="w-full bg-gray-50 border-0 focus:ring-2 focus:ring-chaa-maroon rounded-2xl px-5 py-4 font-bold placeholder:text-gray-300 transition-all shadow-sm">
                            </div>

                            <div class="space-y-2">
                                <label
                                    class="text-[10px] font-black uppercase tracking-[0.2em] text-chaa-brown/40 ml-1">Descriptor</label>
                                <input type="text" name="subtitle" placeholder="e.g. Iranian Floral Aroma"
                                    class="w-full bg-gray-50 border-0 focus:ring-2 focus:ring-chaa-maroon rounded-2xl px-5 py-4 font-bold placeholder:text-gray-300 transition-all shadow-sm">
                            </div>

                            <div class="grid grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label
                                        class="text-[10px] font-black uppercase tracking-[0.2em] text-chaa-brown/40 ml-1">Valuation
                                        (₹)</label>
                                    <input type="number" step="0.01" name="price" required placeholder="25.00"
                                        class="w-full bg-gray-50 border-0 focus:ring-2 focus:ring-chaa-maroon rounded-2xl px-5 py-4 font-bold placeholder:text-gray-300 transition-all shadow-sm">
                                </div>
                                <div class="space-y-2">
                                    <label
                                        class="text-[10px] font-black uppercase tracking-[0.2em] text-chaa-brown/40 ml-1">Asset
                                        Cover</label>
                                    <input type="file" name="image" required
                                        class="w-full bg-gray-50 border-2 border-dashed border-gray-200 rounded-2xl px-5 py-3 text-xs font-bold text-gray-400 cursor-pointer hover:border-chaa-maroon transition-all">
                                </div>
                            </div>
                        </div>

                        <div class="space-y-2 flex flex-col">
                            <label
                                class="text-[10px] font-black uppercase tracking-[0.2em] text-chaa-brown/40 ml-1">Heritage
                                Narrative</label>
                            <textarea name="description" rows="5" placeholder="Describe the soul of this brew..."
                                class="w-full h-full bg-gray-50 border-0 focus:ring-2 focus:ring-chaa-maroon rounded-3xl px-6 py-5 font-medium placeholder:text-gray-300 transition-all shadow-sm resize-none"></textarea>
                        </div>
                    </div>

                    <div class="flex justify-start">
                        <button type="submit"
                            class="bg-chaa-maroon text-white font-black px-12 py-5 rounded-2xl hover:bg-chaa-warm transition-all uppercase tracking-widest text-xs shadow-2xl shadow-chaa-maroon/30">
                            Expose to Selection
                        </button>
                    </div>
                </form>
            </div>

            <!-- List Section -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
                <div class="lg:col-span-3">
                    <h3 class="text-xl font-black mb-8 italic uppercase tracking-widest text-chaa-brown/50">Current Menu
                        Offerings</h3>
                </div>

                @forelse($menus as $item)
                <div
                    class="bg-white rounded-[2.5rem] shadow-xl overflow-hidden group hover:shadow-2xl transition-all duration-500 flex flex-col border border-gray-100">
                    <div class="h-64 relative overflow-hidden">
                        <img src="{{ asset('storage/' . $item->image_path) }}"
                            class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110"
                            alt="{{ $item->title }}">
                        <div
                            class="absolute top-5 right-5 bg-chaa-maroon text-white font-black px-4 py-2 rounded-full text-xs shadow-lg">
                            ₹{{ number_format($item->price, 0) }}
                        </div>
                    </div>

                    <div class="p-8 flex flex-col flex-grow">
                        <span
                            class="text-[9px] font-black uppercase tracking-[0.3em] text-chaa-maroon/60 mb-2 truncate">{{
                            $item->subtitle }}</span>
                        <h4 class="text-2xl font-bold mb-4 italic text-chaa-brown">{{ $item->title }}</h4>
                        <p class="text-xs text-gray-400 font-medium leading-relaxed line-clamp-3 mb-8 h-12">{{
                            $item->description }}</p>

                        <div class="mt-auto pt-6 flex gap-3 border-t border-gray-50">
                            <a href="{{ route('menus.edit', $item) }}"
                                class="flex-1 bg-white border-2 border-gray-100 text-chaa-brown text-center font-black py-4 rounded-2xl text-[10px] uppercase tracking-widest hover:border-chaa-maroon hover:text-chaa-maroon transition-all">
                                Edit
                            </a>
                            <form action="{{ route('menus.destroy', $item) }}" method="POST"
                                id="delete-menu-{{ $item->id }}" class="flex-1">
                                @csrf
                                @method('DELETE')
                                <button type="button" onclick="confirmDelete('delete-menu-{{ $item->id }}')"
                                    class="w-full bg-rose-50 text-rose-600 font-black py-4 rounded-2xl text-[10px] uppercase tracking-widest hover:bg-rose-600 hover:text-white transition-all shadow-sm">
                                    Remove
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @empty
                <div
                    class="col-span-3 text-center py-24 bg-gray-50 rounded-[3rem] border-4 border-dashed border-gray-100">
                    <p class="text-gray-300 font-black italic uppercase tracking-widest">The registry is currently void.
                    </p>
                </div>
                @endforelse
            </div>

        </div>
    </div>

    <!-- SweetAlert2 Popups -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Notifications
            @if (session('success'))
                Swal.fire({
                    icon: 'success', title: 'Brilliant!', text: "{{ session('success') }}",
                    confirmButtonColor: '#8C1C13', background: '#FDF9F3'
                });
            @endif

            // Delete Confirm
            window.confirmDelete = function (formId) {
                Swal.fire({
                    title: 'Retract Selection?',
                    text: "This masterpiece will be removed from the public menu forever.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#8C1C13',
                    cancelButtonColor: '#5E2C1A',
                    confirmButtonText: 'Yes, Retract',
                    cancelButtonText: 'Preserve',
                    background: '#FDF9F3'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById(formId).submit();
                    }
                });
            }
        });
    </script>
</x-app-layout>