<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-chaa-cream pb-12 relative overflow-hidden">
    <!-- Subtle Background Accents -->
    <div class="absolute top-0 left-0 w-full h-2 bg-chaa-maroon"></div>
    <div class="absolute -top-24 -right-24 w-64 h-64 bg-chaa-yellow/10 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-24 -left-24 w-64 h-64 bg-chaa-maroon/5 rounded-full blur-3xl"></div>

    <div class="mb-4 transform hover:scale-105 transition-transform duration-300 relative z-10">
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-10 py-10 bg-white shadow-[0_20px_50px_rgba(140,28,19,0.12)] border-t-4 border-chaa-maroon overflow-hidden sm:rounded-2xl relative z-10">
        {{ $slot }}
    </div>
</div>
