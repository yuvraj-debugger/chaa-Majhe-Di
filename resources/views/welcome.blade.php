<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chaa Majhe Di - Authentic Taste of Tradition</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&family=Playfair+Display:ital,wght@0,700;1,700&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body class="bg-chaa-cream text-chaa-brown font-['Outfit'] antialiased">
    <!-- Navigation Bar -->
    <nav class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-chaa-yellow/20 py-4 px-6 shadow-sm">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <!-- Logo -->
            <a href="/" class="flex items-center gap-3">
                <img src="{{ asset('assets/img/logo.png') }}" alt="Logo"
                    class="w-12 h-12 rounded-full border-2 border-chaa-maroon shadow-sm">
                <span
                    class="font-['Playfair_Display'] text-xl font-bold text-chaa-maroon transition-colors hover:text-chaa-warm tracking-tight">Chaa
                    Majhe Di</span>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-8 font-semibold">
                <a href="/" class="text-chaa-maroon border-b-2 border-chaa-maroon pb-1">Home</a>
                <a href="#menu"
                    class="hover:text-chaa-maroon transition-colors pb-1 border-b-2 border-transparent hover:border-chaa-maroon/30">Menu</a>
                <a href="#gallery"
                    class="hover:text-chaa-maroon transition-colors pb-1 border-b-2 border-transparent hover:border-chaa-maroon/30">Gallery</a>
                <a href="#contact"
                    class="hover:text-chaa-maroon transition-colors pb-1 border-b-2 border-transparent hover:border-chaa-maroon/30">Contact</a>
                <a href="#franchise"
                    class="hover:text-chaa-maroon transition-colors pb-1 border-b-2 border-transparent hover:border-chaa-maroon/30">Franchise</a>
            </div>

            <!-- Login/Register Actions -->
            <div class="flex items-center gap-4">
                @if (Route::has('login'))
                @auth
                <a href="{{ url('/dashboard') }}"
                    class="bg-chaa-warm text-white px-5 py-2.5 rounded-full font-bold hover:bg-chaa-maroon transition-all shadow-md transform hover:-translate-y-0.5">Dashboard</a>
                @else
                <a href="{{ route('login') }}" class="text-chaa-maroon font-bold hover:underline">Login</a>
                <a href="{{ route('register') }}"
                    class="bg-chaa-maroon text-white px-6 py-2.5 rounded-full font-bold hover:bg-chaa-warm transition-all shadow-md transform hover:-translate-y-0.5">Join
                    Now</a>
                @endauth
                @endif
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative min-h-[85vh] flex items-center justify-center pt-16 px-6 overflow-hidden">
        <!-- Floating Elements -->
        <div class="absolute top-20 right-10 w-64 h-64 bg-chaa-yellow/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 left-10 w-96 h-96 bg-chaa-maroon/5 rounded-full blur-[100px]"></div>

        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center gap-16 relative z-10">
            <!-- Content -->
            <div class="w-full md:w-1/2 text-center md:text-left">
                <h1 class="font-['Playfair_Display'] text-5xl md:text-7xl font-bold leading-tight mb-6">
                    Authentic Taste <br>
                    <span class="text-chaa-maroon italic text-4xl md:text-6xl">of Every Drop.</span>
                </h1>
                <p class="text-xl text-chaa-brown/80 mb-10 leading-relaxed font-light">
                    Experience the richness of traditional masala chaa made with passion and secret spices. Sourced with
                    care, brewed with love, and served in our signature clay cups.
                </p>
                <div class="flex flex-col sm:flex-row items-center gap-4 justify-center md:justify-start">
                    <a href="#menu"
                        class="group bg-chaa-maroon text-white px-10 py-4 rounded-full font-bold text-lg hover:bg-chaa-warm transition-all shadow-xl flex items-center gap-2 transform hover:scale-105">
                        Our Menu
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                    <a href="#franchise"
                        class="px-10 py-4 rounded-full font-bold text-lg border-2 border-chaa-maroon text-chaa-maroon hover:bg-chaa-cream transition-all hover:shadow-lg">
                        Become a Franchise
                    </a>
                </div>
            </div>

            <!-- Image/Visual -->
            <div class="w-full md:w-1/2 relative">
                <div
                    class="relative z-10 rounded-[3rem] overflow-hidden shadow-2xl transform rotate-3 hover:rotate-0 transition-all duration-700">
                    <!-- Since I can't generate the image right now, I'll use a warm colored gradient as a placeholder or a royalty-free image -->
                    <img src="https://images.unsplash.com/photo-1544787210-2283dc98276f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                        alt="Authentic Chai"
                        class="w-full h-full object-cover grayscale-0 hover:grayscale-0 transition-opacity">
                    <div class="absolute inset-0 bg-gradient-to-tr from-chaa-maroon/20 to-transparent"></div>
                </div>
                <!-- Decorative Circle -->
                <div
                    class="absolute -z-10 -bottom-10 -left-10 w-full h-full border-4 border-dashed border-chaa-yellow rounded-[4rem] transform -rotate-6">
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Features -->
    <section class="bg-white py-20 px-6 border-y border-chaa-yellow/10">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="text-center group p-8 rounded-3xl hover:bg-chaa-cream transition-colors duration-500">
                <div
                    class="w-16 h-16 bg-chaa-yellow/20 rounded-2xl flex items-center justify-center mx-auto mb-6 text-chaa-maroon group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="font-bold text-2xl mb-4">Energizing Taste</h3>
                <p class="text-chaa-brown/70">A perfect blend of spices that awakens your soul every morning.</p>
            </div>
            <div class="text-center group p-8 rounded-3xl hover:bg-chaa-cream transition-colors duration-500">
                <div
                    class="w-16 h-16 bg-chaa-yellow/20 rounded-2xl flex items-center justify-center mx-auto mb-6 text-chaa-maroon group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                        </path>
                    </svg>
                </div>
                <h3 class="font-bold text-2xl mb-4">Pure Tradition</h3>
                <p class="text-chaa-brown/70">Served in traditional clay cups (Kulhads) for that earthy authentic aroma.
                </p>
            </div>
            <div class="text-center group p-8 rounded-3xl hover:bg-chaa-cream transition-colors duration-500">
                <div
                    class="w-16 h-16 bg-chaa-yellow/20 rounded-2xl flex items-center justify-center mx-auto mb-6 text-chaa-maroon group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                </div>
                <h3 class="font-bold text-2xl mb-4">Quality First</h3>
                <p class="text-chaa-brown/70">Highest grade handpicked tea leaves ensure premium experience.</p>
            </div>
        </div>
    </section>

    <!-- Menu Section Placeholder -->
    <section id="menu" class="py-24 px-6 max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="font-['Playfair_Display'] text-4xl mb-4 font-bold">Our Signature Chaa</h2>
            <div class="w-24 h-1 bg-chaa-yellow mx-auto"></div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
            <!-- Item 1 -->
            <div class="bg-white p-6 rounded-3xl shadow-lg border border-chaa-yellow/10 group overflow-hidden">
                <div class="h-48 rounded-2xl overflow-hidden mb-6 bg-chaa-cream">
                    <img src="https://images.unsplash.com/photo-1594631252845-29fc458631b6?auto=format&fit=crop&w=400&q=80"
                        alt="Masala Chaa"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <h4 class="font-bold text-xl mb-2">Kulhad Masala Chaa</h4>
                <p class="text-chaa-brown/60 mb-4 text-sm">Classic blend with ginger, cardamom, and clove.</p>
                <div class="flex items-center justify-between">
                    <span class="text-chaa-maroon font-extrabold text-lg">₹25</span>
                    <button
                        class="bg-chaa-maroon/10 text-chaa-maroon py-1.5 px-4 rounded-full text-sm font-bold hover:bg-chaa-maroon hover:text-white transition-all">+</button>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="bg-white p-6 rounded-3xl shadow-lg border border-chaa-yellow/10 group overflow-hidden">
                <div class="h-48 rounded-2xl overflow-hidden mb-6 bg-chaa-cream">
                    <img src="https://images.unsplash.com/photo-1571934811356-5cc061b6821f?auto=format&fit=crop&w=400&q=80"
                        alt="Gud Wali Chaa"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <h4 class="font-bold text-xl mb-2">Gud (Jaggery) Chaa</h4>
                <p class="text-chaa-brown/60 mb-4 text-sm">Naturally sweetened with premium organic jaggery.</p>
                <div class="flex items-center justify-between">
                    <span class="text-chaa-maroon font-extrabold text-lg">₹30</span>
                    <button
                        class="bg-chaa-maroon/10 text-chaa-maroon py-1.5 px-4 rounded-full text-sm font-bold hover:bg-chaa-maroon hover:text-white transition-all">+</button>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="bg-white p-6 rounded-3xl shadow-lg border border-chaa-yellow/10 group overflow-hidden">
                <div class="h-48 rounded-2xl overflow-hidden mb-6 bg-chaa-cream">
                    <img src="https://images.unsplash.com/photo-1544333323-5db7b4439977?auto=format&fit=crop&w=400&q=80"
                        alt="Adrak Elaichi Chaa"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <h4 class="font-bold text-xl mb-2">Adrak Elaichi Special</h4>
                <p class="text-chaa-brown/60 mb-4 text-sm">Freshly crushed ginger and bold cardamom flavor.</p>
                <div class="flex items-center justify-between">
                    <span class="text-chaa-maroon font-extrabold text-lg">₹20</span>
                    <button
                        class="bg-chaa-maroon/10 text-chaa-maroon py-1.5 px-4 rounded-full text-sm font-bold hover:bg-chaa-maroon hover:text-white transition-all">+</button>
                </div>
            </div>
            <!-- Item 4 -->
            <div class="bg-white p-6 rounded-3xl shadow-lg border border-chaa-yellow/10 group overflow-hidden">
                <div class="h-48 rounded-2xl overflow-hidden mb-6 bg-chaa-cream">
                    <img src="https://images.unsplash.com/photo-1596464839103-605156a00f2e?auto=format&fit=crop&w=400&q=80"
                        alt="Rose Chaa"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <h4 class="font-bold text-xl mb-2">Rose Tea</h4>
                <p class="text-chaa-brown/60 mb-4 text-sm">Gentle infusion of dried organic rose petals.</p>
                <div class="flex items-center justify-between">
                    <span class="text-chaa-maroon font-extrabold text-lg">₹35</span>
                    <button
                        class="bg-chaa-maroon/10 text-chaa-maroon py-1.5 px-4 rounded-full text-sm font-bold hover:bg-chaa-maroon hover:text-white transition-all">+</button>
                </div>
            </div>
        </div>
    </section>
    <!-- Franchise Section: Standard Simple -->
    <section id="franchise" class="py-24 px-6 bg-gray-50 relative overflow-hidden">
        <div class="max-w-7xl mx-auto relative z-10">
            <div class="flex flex-col lg:flex-row gap-16 items-start">
                <!-- Franchise Info -->
                <div class="w-full lg:w-1/3">
                    <h2 class="font-['Playfair_Display'] text-4xl font-bold text-chaa-brown mb-6 italic">Join Our
                        Success</h2>
                    <p class="text-chaa-brown/70 mb-10 leading-relaxed font-medium">Bring the authentic taste of Indian
                        tea to your city. Become a partner in our growing Chaa revolution.</p>

                    <div class="space-y-12">
                        <div class="flex items-start gap-4 group">
                            <div
                                class="w-12 h-12 bg-chaa-maroon text-white rounded-2xl flex items-center justify-center shrink-0 shadow-lg shadow-chaa-maroon/20 group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                            </div>
                            <div>
                                <h4
                                    class="font-bold text-lg text-chaa-brown underline decoration-chaa-yellow decoration-2 underline-offset-4 mb-1 uppercase tracking-tight">
                                    Proven Growth</h4>
                                <p class="text-chaa-brown/60 font-medium tracking-tight">High ROI business model with a
                                    loyal customer base across several cities.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 group">
                            <div
                                class="w-12 h-12 bg-chaa-maroon text-white rounded-2xl flex items-center justify-center shrink-0 shadow-lg shadow-chaa-maroon/20 group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4
                                    class="font-bold text-lg text-chaa-brown underline decoration-chaa-yellow decoration-2 underline-offset-4 mb-1 uppercase tracking-tight">
                                    Site Support</h4>
                                <p class="text-chaa-brown/60 font-medium tracking-tight">Full assistance in site
                                    selection, store design, and operational training.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Franchise Form -->
                <div class="w-full lg:w-2/3">
                    <div class="bg-white p-8 md:p-12 rounded-[2.5rem] shadow-2xl border border-chaa-yellow/20 relative">
                        <!-- Success Message -->
                        @if(session('success_franchise'))
                        <div
                            class="mb-8 p-4 bg-green-50 border border-green-200 text-green-700 rounded-2xl flex items-center gap-3">
                            <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="font-bold uppercase tracking-widest text-xs">{{ session('success_franchise')
                                }}</span>
                        </div>
                        @endif

                        <form action="{{ route('franchise.store') }}" method="POST" class="space-y-6">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="text-sm font-black text-chaa-brown/60 ml-2 italic uppercase">Full
                                        Name</label>
                                    <input type="text" name="name" value="{{ old('name') }}" required
                                        class="w-full bg-chaa-cream/50 border-2 border-transparent focus:border-chaa-maroon focus:ring-0 rounded-2xl px-6 py-4 transition-all placeholder:text-chaa-brown/30 font-medium"
                                        placeholder="Enter Name">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-sm font-black text-chaa-brown/60 ml-2 italic uppercase">Email
                                        address</label>
                                    <input type="email" name="email" value="{{ old('email') }}" required
                                        class="w-full bg-chaa-cream/50 border-2 border-transparent focus:border-chaa-maroon focus:ring-0 rounded-2xl px-6 py-4 transition-all placeholder:text-chaa-brown/30 font-medium"
                                        placeholder="Email Address">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="text-sm font-black text-chaa-brown/60 ml-2 italic uppercase">Contact
                                        Number</label>
                                    <input type="text" name="number" value="{{ old('number') }}" required
                                        pattern="[0-9]{10}"
                                        class="w-full bg-chaa-cream/50 border-2 border-transparent focus:border-chaa-maroon focus:ring-0 rounded-2xl px-6 py-4 transition-all placeholder:text-chaa-brown/30 font-medium"
                                        placeholder="10 Digits">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-sm font-black text-chaa-brown/60 ml-2 italic uppercase">Target
                                        Area</label>
                                    <input type="text" name="area" value="{{ old('area') }}" required
                                        class="w-full bg-chaa-cream/50 border-2 border-transparent focus:border-chaa-maroon focus:ring-0 rounded-2xl px-6 py-4 transition-all placeholder:text-chaa-brown/30 font-medium"
                                        placeholder="Proposed Location">
                                </div>
                            </div>

                            <div class="space-y-2">
                                <label class="text-sm font-black text-chaa-brown/60 ml-2 italic uppercase">Business
                                    Model</label>
                                <div class="grid grid-cols-2 gap-4">
                                    <label
                                        class="flex items-center gap-3 bg-chaa-cream/50 px-6 py-4 rounded-2xl cursor-pointer">
                                        <input type="radio" name="model_type" value="Take Away" required
                                            class="text-chaa-maroon focus:ring-chaa-maroon">
                                        <span class="font-bold text-chaa-brown">Take Away</span>
                                    </label>
                                    <label
                                        class="flex items-center gap-3 bg-chaa-cream/50 px-6 py-4 rounded-2xl cursor-pointer">
                                        <input type="radio" name="model_type" value="Dining" required
                                            class="text-chaa-maroon focus:ring-chaa-maroon">
                                        <span class="font-bold text-chaa-brown">Dining</span>
                                    </label>
                                </div>
                            </div>

                            <div class="space-y-2">
                                <label class="text-sm font-black text-chaa-brown/60 ml-2 italic uppercase">Your
                                    Vision</label>
                                <textarea name="message" rows="3"
                                    class="w-full bg-chaa-cream/50 border-2 border-transparent focus:border-chaa-maroon focus:ring-0 rounded-2xl px-6 py-4 transition-all placeholder:text-chaa-brown/30 font-medium resize-none"
                                    placeholder="Tell us about your plans...">{{ old('message') }}</textarea>
                            </div>

                            <input type="hidden" name="address" value="Refer to Area">

                            <button type="submit"
                                class="w-full bg-chaa-maroon text-white font-black py-4 rounded-2xl hover:bg-chaa-warm transition-all shadow-xl shadow-chaa-maroon/10 uppercase tracking-[0.3em] text-xs transform active:scale-95">
                                Submit Application
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section: Brand Visual Showcase -->
    <section id="gallery" class="py-24 px-6 bg-chaa-cream/30 relative overflow-hidden">
        <div class="max-w-7xl mx-auto relative z-10">
            <div class="text-center mb-16 space-y-4">
                <h2 class="font-['Playfair_Display'] text-5xl font-bold italic leading-tight">Captured <span
                        class="text-chaa-maroon">Moments.</span></h2>
                <div class="w-24 h-1.5 bg-chaa-maroon mx-auto rounded-full"></div>
                <p class="text-chaa-brown/60 font-medium tracking-tight">A visual journey through our heritage,
                    ingredients, and the love for Chaa.</p>
            </div>

            @if($galleries && $galleries->count() > 0)
            <div class="swiper gallerySwiper pb-16">
                <div class="swiper-wrapper">
                    @foreach($galleries as $image)
                    <div class="swiper-slide">
                        <div
                            class="group relative aspect-square overflow-hidden rounded-[2.5rem] shadow-xl hover:shadow-2xl transition-all duration-700 hover:-translate-y-2 border-4 border-white">
                            <img src="{{ asset('storage/' . $image->image_path) }}"
                                alt="{{ $image->title ?? 'Chaa Majhe Di Gallery' }}"
                                class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-1000">

                            <!-- Subtle Overlay -->
                            <div
                                class="absolute inset-0 bg-chaa-maroon/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>

                            @if($image->title)
                            <div
                                class="absolute bottom-6 left-6 right-6 translate-y-10 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-700 bg-white/90 backdrop-blur-md p-4 rounded-2xl shadow-lg">
                                <p class="text-[10px] font-black uppercase tracking-widest text-chaa-maroon">{{
                                    $image->title }}</p>
                            </div>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Navigation & Pagination -->
                <div class="flex justify-center items-center gap-10 mt-12">
                    <div
                        class="swiper-button-prev !static !w-12 !h-12 !bg-white !rounded-full !shadow-lg border border-chaa-yellow/30 !text-chaa-maroon after:!text-sm hover:!bg-chaa-maroon hover:!text-white transition-all">
                    </div>
                    <div class="swiper-pagination !static !w-auto"></div>
                    <div
                        class="swiper-button-next !static !w-12 !h-12 !bg-white !rounded-full !shadow-lg border border-chaa-yellow/30 !text-chaa-maroon after:!text-sm hover:!bg-chaa-maroon hover:!text-white transition-all">
                    </div>
                </div>
            </div>
            @else
            <div class="text-center py-32 bg-white/50 border-2 border-dashed border-chaa-yellow/20 rounded-[3rem]">
                <div
                    class="w-20 h-20 bg-chaa-cream text-chaa-maroon/20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                        </path>
                    </svg>
                </div>
                <p class="text-chaa-brown/40 font-bold uppercase tracking-[0.3em] text-sm italic">Visual legacy
                    loading...</p>
            </div>
            @endif
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-24 px-6 bg-white relative overflow-hidden">
        <div class="absolute top-0 right-0 w-1/3 h-full bg-chaa-cream/30 -skew-x-12 transform translate-x-1/2"></div>

        <div class="max-w-7xl mx-auto relative z-10">
            <div class="flex flex-col lg:flex-row gap-16 items-start">
                <!-- Contact Info -->
                <div class="w-full lg:w-1/3">
                    <h2 class="font-['Playfair_Display'] text-4xl font-bold text-chaa-maroon mb-6 italic">Get In Touch
                    </h2>
                    <p class="text-chaa-brown/70 mb-10 leading-relaxed font-medium">Have questions about our menu,
                        franchise opportunities, or just want to say hello? Fill out the form and our team will get back
                        to you within 24 hours.</p>

                    <div class="space-y-12">
                        <div class="flex items-start gap-4 group">
                            <div
                                class="w-12 h-12 bg-chaa-maroon text-white rounded-2xl flex items-center justify-center shrink-0 shadow-lg shadow-chaa-maroon/20 group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4
                                    class="font-bold text-lg text-chaa-brown underline decoration-chaa-yellow decoration-2 underline-offset-4 mb-1 uppercase tracking-tight">
                                    Main Branch</h4>
                                <p class="text-chaa-brown/60 font-medium tracking-tight">Booth No. 236, Phase 5, Sector
                                    59, Sahibzada Ajit Singh Nagar, Punjab 160059</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 group">
                            <div
                                class="w-12 h-12 bg-chaa-maroon text-white rounded-2xl flex items-center justify-center shrink-0 shadow-lg shadow-chaa-maroon/20 group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4
                                    class="font-bold text-lg text-chaa-brown underline decoration-chaa-yellow decoration-2 underline-offset-4 mb-1 uppercase tracking-tight">
                                    Call Us</h4>
                                <p class="text-chaa-brown/60 font-medium tracking-tight">+91 98765 43210</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 group">
                            <div
                                class="w-12 h-12 bg-chaa-maroon text-white rounded-2xl flex items-center justify-center shrink-0 shadow-lg shadow-chaa-maroon/20 group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4
                                    class="font-bold text-lg text-chaa-brown underline decoration-chaa-yellow decoration-2 underline-offset-4 mb-1 uppercase tracking-tight">
                                    Email Us</h4>
                                <p class="text-chaa-brown/60 font-medium tracking-tight">hello@chaamajhedi.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="w-full lg:w-2/3">
                    <div class="bg-white p-8 md:p-12 rounded-[2.5rem] shadow-2xl border border-chaa-yellow/20 relative">
                        <!-- Success Message -->
                        @if(session('success'))
                        <div
                            class="mb-8 p-4 bg-green-50 border border-green-200 text-green-700 rounded-2xl flex items-center gap-3 animate-bounce">
                            <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="font-bold uppercase tracking-widest text-xs">{{ session('success') }}</span>
                        </div>
                        @endif

                        <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label for="name"
                                        class="text-sm font-black text-chaa-brown/60 ml-2 italic uppercase">Full
                                        Name</label>
                                    <input type="text" name="name" id="name" value="{{ old('name') }}" required
                                        class="w-full bg-chaa-cream/50 border-2 border-transparent focus:border-chaa-maroon focus:ring-0 rounded-2xl px-6 py-4 transition-all placeholder:text-chaa-brown/30 font-medium"
                                        placeholder="E.g. Rahul Sharma">
                                    @error('name') <p class="text-rose-600 text-xs ml-2 font-bold">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="space-y-2">
                                    <label for="email"
                                        class="text-sm font-black text-chaa-brown/60 ml-2 italic uppercase">Email
                                        address</label>
                                    <input type="email" name="email" id="email" value="{{ old('email') }}" required
                                        class="w-full bg-chaa-cream/50 border-2 border-transparent focus:border-chaa-maroon focus:ring-0 rounded-2xl px-6 py-4 transition-all placeholder:text-chaa-brown/30 font-medium"
                                        placeholder="rahul@example.com">
                                    @error('email') <p class="text-rose-600 text-xs ml-2 font-bold">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="space-y-2">
                                <label for="number"
                                    class="text-sm font-black text-chaa-brown/60 ml-2 italic uppercase">Phone Number (10
                                    Digits)</label>
                                <input type="text" name="number" id="number" value="{{ old('number') }}" required
                                    pattern="[0-9]{10}" title="Please enter exactly 10 digits"
                                    class="w-full bg-chaa-cream/50 border-2 border-transparent focus:border-chaa-maroon focus:ring-0 rounded-2xl px-6 py-4 transition-all placeholder:text-chaa-brown/30 font-medium"
                                    placeholder="9876543210">
                                @error('number') <p class="text-rose-600 text-xs ml-2 font-bold">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="space-y-2">
                                <label for="message"
                                    class="text-sm font-black text-chaa-brown/60 ml-2 italic uppercase">Your
                                    Message</label>
                                <textarea name="message" id="message" rows="5" required
                                    class="w-full bg-chaa-cream/50 border-2 border-transparent focus:border-chaa-maroon focus:ring-0 rounded-2xl px-6 py-4 transition-all placeholder:text-chaa-brown/30 font-medium"
                                    placeholder="How can we help you today?">{{ old('message') }}</textarea>
                                @error('message') <p class="text-rose-600 text-xs ml-2 font-bold">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex justify-center mt-6">
                                <button type="submit"
                                    class="bg-chaa-maroon text-white font-black text-sm px-10 py-3 rounded-xl hover:bg-chaa-warm transition-all shadow-lg shadow-chaa-maroon/20 hover:shadow-xl hover:-translate-y-0.5 transform active:scale-95 uppercase tracking-widest">
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-chaa-brown text-white py-20 px-6">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between gap-12">
            <div>
                <img src="{{ asset('assets/img/logo.png') }}" alt="Logo"
                    class="w-16 h-16 rounded-full mb-6 border-2 border-chaa-yellow">
                <p class="text-2xl font-['Playfair_Display'] font-bold mb-4">Chaa Majhe Di</p>
                <p class="max-w-xs opacity-70">Experience the soul of authentic Indian tea in every Kulhad. Visit us
                    today.</p>
            </div>
            <div>
                <h5 class="font-bold mb-6 text-chaa-yellow uppercase tracking-widest text-sm">Quick Links</h5>
                <ul class="space-y-4 opacity-80">
                    <li><a href="#" class="hover:text-chaa-yellow">Home</a></li>
                    <li><a href="#menu" class="hover:text-chaa-yellow">Menu</a></li>
                    <li><a href="#gallery" class="hover:text-chaa-yellow">Gallery</a></li>
                    <li><a href="#franchise" class="hover:text-chaa-yellow">Franchise</a></li>
                </ul>
            </div>
            <div>
                <h5 class="font-bold mb-6 text-chaa-yellow uppercase tracking-widest text-sm">Visit Us</h5>
                <p class="opacity-80 mb-2">Booth No. 236, Phase 5, Sector 59</p>
                <p class="opacity-80 mb-6 font-medium">Sahibzada Ajit Singh Nagar, Punjab 160059</p>
                <p class="font-bold text-xl">hello@chaamajhedi.com</p>
            </div>
            <div>
                <h5 class="font-bold mb-6 text-chaa-yellow uppercase tracking-widest text-sm">Connect</h5>
                <div class="flex gap-4">
                    <span
                        class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-chaa-maroon cursor-pointer transition-colors">FB</span>
                    <span
                        class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-chaa-maroon cursor-pointer transition-colors">IG</span>
                    <span
                        class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-chaa-maroon cursor-pointer transition-colors">TW</span>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto border-t border-white/10 mt-20 pt-10 text-center opacity-40 text-sm">
            &copy; 2026 Chaa Majhe Di. All rights reserved.
        </div>
    </footer>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Initialize Swiper for Gallery
        const swiper = new Swiper('.gallerySwiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 50,
                },
            },
        });
    </script>
</body>

</html>
```