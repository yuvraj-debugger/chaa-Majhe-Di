<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gallery Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Upload Card -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8 mb-8">
                <h3 class="text-lg font-bold mb-6 italic uppercase tracking-widest text-chaa-brown/60">Upload Brand Visual</h3>
                
                <form action="{{ route('galleries.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-end">
                        <div class="space-y-2">
                            <label class="text-xs font-black uppercase tracking-widest text-chaa-brown/40 ml-1">Photo Title (Optional)</label>
                            <input type="text" name="title" placeholder="e.g. Fresh Masala Chai" 
                                class="w-full bg-gray-50 border-2 border-transparent focus:border-chaa-maroon focus:ring-0 rounded-xl px-4 py-3 placeholder:text-gray-300 font-medium">
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-black uppercase tracking-widest text-chaa-brown/40 ml-1">Image Asset</label>
                            <input type="file" name="image" required 
                                class="w-full bg-gray-50 border-2 border-dashed border-gray-200 hover:border-chaa-maroon transition-colors rounded-xl px-4 py-2 font-medium text-sm text-gray-500">
                        </div>
                    </div>
                    
                    <button type="submit" class="bg-chaa-maroon text-white font-black px-10 py-4 rounded-xl hover:bg-chaa-warm transition-all uppercase tracking-widest text-xs shadow-lg shadow-chaa-maroon/20">
                        Add to Gallery
                    </button>
                </form>
            </div>

            <!-- Gallery Grid -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8">
                <h3 class="text-lg font-bold mb-8 italic uppercase tracking-widest text-chaa-brown/60">Active Brand Showcase</h3>
                
                @if($galleries->isEmpty())
                    <div class="text-center py-20 bg-gray-50 rounded-3xl border-2 border-dashed border-gray-100">
                        <p class="text-gray-400 font-bold italic">No images in gallery yet.</p>
                    </div>
                @else
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                        @foreach($galleries as $image)
                        <div class="bg-gray-50 rounded-[2rem] overflow-hidden shadow-md border border-white flex flex-col h-full">
                            <div class="relative group overflow-hidden">
                                <img src="{{ asset('storage/' . $image->image_path) }}" alt="{{ $image->title }}" class="w-full h-56 object-cover transition-transform group-hover:scale-110 duration-700">
                                <div class="absolute inset-0 bg-black/5 pointer-events-none"></div>
                            </div>
                            
                            <div class="p-6 flex flex-col flex-grow justify-between">
                                <h4 class="font-bold text-sm mb-6 leading-tight text-chaa-brown/80 h-10 overflow-hidden line-clamp-2">
                                    {{ $image->title ?? 'Untitled Brand Asset' }}
                                </h4>
                                
                                <div class="flex gap-3 mt-auto">
                                    <a href="{{ route('galleries.edit', $image) }}" 
                                        class="flex-1 bg-white border border-gray-200 text-chaa-maroon text-center font-black py-3 rounded-xl text-[10px] uppercase tracking-widest hover:border-chaa-maroon hover:shadow-lg transition-all">
                                        Edit
                                    </a>

                                    <form action="{{ route('galleries.destroy', $image) }}" method="POST" id="delete-form-{{ $image->id }}" class="flex-1">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" onclick="confirmDelete('delete-form-{{ $image->id }}')"
                                            class="w-full bg-rose-50 text-rose-600 font-extrabold py-3 rounded-xl text-[10px] uppercase tracking-widest hover:bg-rose-600 hover:text-white transition-all shadow-sm">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                @endif
            </div>
            </div>
        </div>
    </div>

    <!-- SweetAlert2 Integration -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Success Message Pop
            @if(session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Brilliant!',
                    text: "{{ session('success') }}",
                    confirmButtonColor: '#8C1C13',
                    timer: 3000
                });
            @endif

            // Error Message Pop
            @if(session('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Oops!',
                    text: "{{ session('error') }}",
                    confirmButtonColor: '#8C1C13'
                });
            @endif

            // Delete Confirmation Pop
            window.confirmDelete = function(formId) {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "This brand visual will be permanently removed!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#8C1C13',
                    cancelButtonColor: '#5E2C1A',
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'Wait, go back',
                    background: '#FDF9F3',
                    customClass: {
                        title: 'font-black italic uppercase tracking-widest text-chaa-maroon',
                        confirmButton: 'rounded-xl uppercase tracking-widest text-xs font-black px-10 py-4',
                        cancelButton: 'rounded-xl uppercase tracking-widest text-xs font-black px-10 py-4'
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById(formId).submit();
                    }
                });
            }
        });
    </script>
</x-app-layout>
