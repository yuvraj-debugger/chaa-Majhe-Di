<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight italic uppercase tracking-widest">
            {{ __('Refine Selection') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-12 border-b-4 border-chaa-maroon">
                <div class="flex justify-between items-center mb-10">
                    <h3 class="text-xl font-black italic uppercase tracking-widest text-chaa-maroon">Redefine Creation</h3>
                    <a href="{{ route('menus.index') }}" class="text-[10px] font-black uppercase tracking-widest text-gray-400 hover:text-chaa-maroon transition-all">
                        &lsaquo; Back to Registry
                    </a>
                </div>

                <form action="{{ route('menus.update', $menu) }}" method="POST" enctype="multipart/form-data" class="space-y-10">
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                        <!-- Left Side -->
                        <div class="space-y-6">
                            <div class="space-y-2">
                                <label class="text-[10px] font-black uppercase tracking-[0.2em] text-chaa-brown/40 ml-1">New Creation Name</label>
                                <input type="text" name="title" required value="{{ $menu->title }}" 
                                    class="w-full bg-gray-50 border-0 focus:ring-2 focus:ring-chaa-maroon rounded-2xl px-5 py-4 font-bold transition-all shadow-sm">
                            </div>
                            
                            <div class="space-y-2">
                                <label class="text-[10px] font-black uppercase tracking-[0.2em] text-chaa-brown/40 ml-1">New Descriptor</label>
                                <input type="text" name="subtitle" value="{{ $menu->subtitle }}" 
                                    class="w-full bg-gray-50 border-0 focus:ring-2 focus:ring-chaa-maroon rounded-2xl px-5 py-4 font-bold transition-all shadow-sm">
                            </div>

                            <div class="grid grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="text-[10px] font-black uppercase tracking-[0.2em] text-chaa-brown/40 ml-1">Valuation (₹)</label>
                                    <input type="number" step="0.01" name="price" value="{{ $menu->price }}" required 
                                        class="w-full bg-gray-50 border-0 focus:ring-2 focus:ring-chaa-maroon rounded-2xl px-5 py-4 font-bold transition-all shadow-sm">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-[10px] font-black uppercase tracking-[0.2em] text-chaa-brown/40 ml-1 flex justify-between">Replace Asset <span class="text-rose-500 font-bold italic">Optional</span></label>
                                    <input type="file" name="image" 
                                        class="w-full bg-gray-50 border-2 border-dashed border-gray-200 rounded-2xl px-5 py-3 text-xs font-bold text-gray-400 cursor-pointer hover:border-chaa-maroon transition-all">
                                </div>
                            </div>
                        </div>

                        <!-- Right Side: Narrative and Current Preview -->
                        <div class="space-y-6 flex flex-col">
                            <div class="flex-grow space-y-2">
                                <label class="text-[10px] font-black uppercase tracking-[0.2em] text-chaa-brown/40 ml-1">Refined Narrative</label>
                                <textarea name="description" rows="4" class="w-full h-full bg-gray-50 border-0 focus:ring-2 focus:ring-chaa-maroon rounded-3xl px-6 py-5 font-medium transition-all shadow-sm resize-none">{{ $menu->description }}</textarea>
                            </div>
                            
                            <div class="h-40 rounded-3xl overflow-hidden border-2 border-gray-100 shadow-inner group">
                                <img src="{{ asset('storage/' . $menu->image_path) }}" class="w-full h-full object-cover grayscale transition-all duration-700 group-hover:grayscale-0" alt="Current visual">
                                <div class="absolute inset-0 bg-white/20 pointer-events-none"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex justify-between items-center pt-8 border-t border-gray-50">
                        <button type="submit" class="bg-chaa-maroon text-white font-black px-12 py-5 rounded-2xl hover:bg-chaa-warm transition-all uppercase tracking-widest text-xs shadow-2xl shadow-chaa-maroon/30">
                            Apply Refinements
                        </button>
                        
                        <a href="{{ route('menus.index') }}" class="bg-gray-50 text-gray-400 font-black px-10 py-5 rounded-2xl hover:bg-gray-200 transition-all uppercase tracking-widest text-xs text-center">
                            Abandon Edits
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
