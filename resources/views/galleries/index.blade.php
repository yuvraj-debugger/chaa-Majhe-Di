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
                        <div class="group relative bg-gray-50 rounded-[2rem] overflow-hidden shadow-md border border-white">
                            <img src="{{ asset('storage/' . $image->image_path) }}" alt="{{ $image->title }}" class="w-full h-64 object-cover">
                            
                            <!-- Overlay Actions -->
                            <div class="absolute inset-0 bg-chaa-maroon/60 opacity-0 group-hover:opacity-100 transition-opacity flex flex-col items-center justify-center p-6 text-center text-white backdrop-blur-[2px]">
                                <h4 class="font-bold text-sm mb-4 leading-tight">{{ $image->title ?? 'Untitled Brand Asset' }}</h4>
                                
                                <form action="{{ route('galleries.destroy', $image) }}" method="POST" onsubmit="return confirm('Remove this visual from gallery?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-white text-rose-600 font-black px-4 py-2 rounded-lg text-[10px] uppercase tracking-widest hover:scale-110 transition-transform">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
