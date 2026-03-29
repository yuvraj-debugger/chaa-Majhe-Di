<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit Gallery Visual') }}
            </h2>
            <a href="{{ route('galleries.index') }}" class="text-sm font-bold text-chaa-maroon hover:underline uppercase tracking-widest">
                &lsaquo; Back to Gallery
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-10">
                
                <div class="flex flex-col md:flex-row gap-12">
                    <!-- Current Image Preview -->
                    <div class="w-full md:w-1/3">
                        <label class="text-xs font-black uppercase tracking-widest text-chaa-brown/40 block mb-4">Current Asset</label>
                        <div class="rounded-3xl overflow-hidden shadow-2xl border-4 border-gray-50 aspect-[4/5]">
                            <img src="{{ asset('storage/' . $gallery->image_path) }}" 
                                class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700" 
                                alt="{{ $gallery->title }}">
                        </div>
                    </div>

                    <!-- Edit Form -->
                    <div class="w-full md:w-2/3">
                        <h3 class="text-2xl font-bold mb-8 italic uppercase tracking-widest text-chaa-maroon">Refine Showcase</h3>
                        
                        <form action="{{ route('galleries.update', $gallery) }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                            @csrf
                            @method('PUT')

                            <div class="space-y-3">
                                <label class="text-xs font-black uppercase tracking-widest text-chaa-brown/40 ml-1">Photo Title</label>
                                <input type="text" name="title" value="{{ $gallery->title }}" 
                                    class="w-full bg-gray-50 border-2 border-transparent focus:border-chaa-maroon focus:ring-0 rounded-2xl px-5 py-4 font-medium transition-all"
                                    placeholder="Enter expressive title...">
                            </div>

                            <div class="space-y-3">
                                <label class="text-xs font-black uppercase tracking-widest text-chaa-brown/40 ml-1">Replace Image (Optional)</label>
                                <div class="relative group">
                                    <input type="file" name="image" 
                                        class="w-full bg-gray-50 border-2 border-dashed border-gray-200 group-hover:border-chaa-maroon transition-colors rounded-2xl px-5 py-4 font-medium text-sm text-gray-500 cursor-pointer">
                                </div>
                                <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest mt-2 pl-1">✦ Max 5MB. Clear visuals preferred.</p>
                            </div>

                            <div class="pt-4 flex gap-4">
                                <button type="submit" class="bg-chaa-maroon text-white font-black px-10 py-4 rounded-2xl hover:bg-chaa-warm transition-all uppercase tracking-widest text-xs shadow-xl shadow-chaa-maroon/20 w-full md:w-auto">
                                    Update Visual
                                </button>
                                
                                <a href="{{ route('galleries.index') }}" class="bg-gray-100 text-gray-400 font-black px-10 py-4 rounded-2xl hover:bg-gray-200 transition-all uppercase tracking-widest text-xs text-center w-full md:w-auto">
                                    Cancel
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Danger Zone -->
            <div class="mt-12 p-8 bg-rose-50 border-2 border-dashed border-rose-100 rounded-3xl flex flex-col md:flex-row items-center justify-between gap-6">
                <div>
                    <h4 class="text-rose-600 font-black uppercase tracking-widest text-xs mb-1">Danger Zone</h4>
                    <p class="text-rose-400 text-xs font-bold italic">Once removed, this brand visual cannot be recovered from the gallery showcase.</p>
                </div>
                <form action="{{ route('galleries.destroy', $gallery) }}" method="POST" id="delete-form-{{ $gallery->id }}">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="confirmDelete('delete-form-{{ $gallery->id }}')" 
                        class="bg-rose-600 text-white font-black px-8 py-3 rounded-xl hover:bg-rose-700 transition-all uppercase tracking-widest text-[10px] shadow-lg shadow-rose-600/20">
                        Permanently Delete
                    </button>
                </form>
            </div>
            </div>
        </div>
    </div>

    <!-- SweetAlert2 Integration -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            window.confirmDelete = function(formId) {
                Swal.fire({
                    title: 'Final Warning',
                    text: "Once removed, this brand visual is gone forever from the showcase. Proceed?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#E11D48', // Rose 600
                    cancelButtonColor: '#5E2C1A',
                    confirmButtonText: 'Yes, remove visual',
                    cancelButtonText: 'Wait, keep it',
                    background: '#FFF1F2', // Rose 50
                    customClass: {
                        title: 'font-black italic uppercase tracking-widest text-rose-600',
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
