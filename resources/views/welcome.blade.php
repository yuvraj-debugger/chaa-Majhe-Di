<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chaa Majhe Di - Authentic Taste of Tradition</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&family=Playfair+Display:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-chaa-cream text-chaa-brown font-['Outfit'] antialiased">
    <!-- Navigation Bar -->
    <nav class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-chaa-yellow/20 py-4 px-6 shadow-sm">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <!-- Logo -->
            <a href="/" class="flex items-center gap-3">
                <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="w-12 h-12 rounded-full border-2 border-chaa-maroon shadow-sm">
                <span class="font-['Playfair_Display'] text-xl font-bold text-chaa-maroon transition-colors hover:text-chaa-warm tracking-tight">Chaa Majhe Di</span>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-8 font-semibold">
                <a href="/" class="text-chaa-maroon border-b-2 border-chaa-maroon pb-1">Home</a>
                <a href="#menu" class="hover:text-chaa-maroon transition-colors pb-1 border-b-2 border-transparent hover:border-chaa-maroon/30">Menu</a>
                <a href="#gallery" class="hover:text-chaa-maroon transition-colors pb-1 border-b-2 border-transparent hover:border-chaa-maroon/30">Gallery</a>
                <a href="#contact" class="hover:text-chaa-maroon transition-colors pb-1 border-b-2 border-transparent hover:border-chaa-maroon/30">Contact</a>
                <a href="#franchise" class="hover:text-chaa-maroon transition-colors pb-1 border-b-2 border-transparent hover:border-chaa-maroon/30">Franchise</a>
            </div>

            <!-- Login/Register Actions -->
            <div class="flex items-center gap-4">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="bg-chaa-warm text-white px-5 py-2.5 rounded-full font-bold hover:bg-chaa-maroon transition-all shadow-md transform hover:-translate-y-0.5">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-chaa-maroon font-bold hover:underline">Login</a>
                        <a href="{{ route('register') }}" class="bg-chaa-maroon text-white px-6 py-2.5 rounded-full font-bold hover:bg-chaa-warm transition-all shadow-md transform hover:-translate-y-0.5">Join Now</a>
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
                    Experience the richness of traditional masala chaa made with passion and secret spices. Sourced with care, brewed with love, and served in our signature clay cups.
                </p>
                <div class="flex flex-col sm:flex-row items-center gap-4 justify-center md:justify-start">
                    <a href="#menu" class="group bg-chaa-maroon text-white px-10 py-4 rounded-full font-bold text-lg hover:bg-chaa-warm transition-all shadow-xl flex items-center gap-2 transform hover:scale-105">
                        Our Menu
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                    <a href="#franchise" class="px-10 py-4 rounded-full font-bold text-lg border-2 border-chaa-maroon text-chaa-maroon hover:bg-chaa-cream transition-all hover:shadow-lg">
                        Become a Franchise
                    </a>
                </div>
            </div>

            <!-- Image/Visual -->
            <div class="w-full md:w-1/2 relative">
                <div class="relative z-10 rounded-[3rem] overflow-hidden shadow-2xl transform rotate-3 hover:rotate-0 transition-all duration-700">
                    <!-- Since I can't generate the image right now, I'll use a warm colored gradient as a placeholder or a royalty-free image -->
                    <img src="https://images.unsplash.com/photo-1544787210-2283dc98276f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Authentic Chai" class="w-full h-full object-cover grayscale-0 hover:grayscale-0 transition-opacity">
                    <div class="absolute inset-0 bg-gradient-to-tr from-chaa-maroon/20 to-transparent"></div>
                </div>
                <!-- Decorative Circle -->
                <div class="absolute -z-10 -bottom-10 -left-10 w-full h-full border-4 border-dashed border-chaa-yellow rounded-[4rem] transform -rotate-6"></div>
            </div>
        </div>
    </section>

    <!-- Quick Features -->
    <section class="bg-white py-20 px-6 border-y border-chaa-yellow/10">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="text-center group p-8 rounded-3xl hover:bg-chaa-cream transition-colors duration-500">
                <div class="w-16 h-16 bg-chaa-yellow/20 rounded-2xl flex items-center justify-center mx-auto mb-6 text-chaa-maroon group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="font-bold text-2xl mb-4">Energizing Taste</h3>
                <p class="text-chaa-brown/70">A perfect blend of spices that awakens your soul every morning.</p>
            </div>
            <div class="text-center group p-8 rounded-3xl hover:bg-chaa-cream transition-colors duration-500">
                <div class="w-16 h-16 bg-chaa-yellow/20 rounded-2xl flex items-center justify-center mx-auto mb-6 text-chaa-maroon group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                </div>
                <h3 class="font-bold text-2xl mb-4">Pure Tradition</h3>
                <p class="text-chaa-brown/70">Served in traditional clay cups (Kulhads) for that earthy authentic aroma.</p>
            </div>
            <div class="text-center group p-8 rounded-3xl hover:bg-chaa-cream transition-colors duration-500">
                <div class="w-16 h-16 bg-chaa-yellow/20 rounded-2xl flex items-center justify-center mx-auto mb-6 text-chaa-maroon group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
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
                    <img src="https://images.unsplash.com/photo-1594631252845-29fc458631b6?auto=format&fit=crop&w=400&q=80" alt="Masala Chaa" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <h4 class="font-bold text-xl mb-2">Kulhad Masala Chaa</h4>
                <p class="text-chaa-brown/60 mb-4 text-sm">Classic blend with ginger, cardamom, and clove.</p>
                <div class="flex items-center justify-between">
                    <span class="text-chaa-maroon font-extrabold text-lg">₹25</span>
                    <button class="bg-chaa-maroon/10 text-chaa-maroon py-1.5 px-4 rounded-full text-sm font-bold hover:bg-chaa-maroon hover:text-white transition-all">+</button>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="bg-white p-6 rounded-3xl shadow-lg border border-chaa-yellow/10 group overflow-hidden">
                <div class="h-48 rounded-2xl overflow-hidden mb-6 bg-chaa-cream">
                    <img src="https://images.unsplash.com/photo-1571934811356-5cc061b6821f?auto=format&fit=crop&w=400&q=80" alt="Gud Wali Chaa" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <h4 class="font-bold text-xl mb-2">Gud (Jaggery) Chaa</h4>
                <p class="text-chaa-brown/60 mb-4 text-sm">Naturally sweetened with premium organic jaggery.</p>
                <div class="flex items-center justify-between">
                    <span class="text-chaa-maroon font-extrabold text-lg">₹30</span>
                    <button class="bg-chaa-maroon/10 text-chaa-maroon py-1.5 px-4 rounded-full text-sm font-bold hover:bg-chaa-maroon hover:text-white transition-all">+</button>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="bg-white p-6 rounded-3xl shadow-lg border border-chaa-yellow/10 group overflow-hidden">
                <div class="h-48 rounded-2xl overflow-hidden mb-6 bg-chaa-cream">
                    <img src="https://images.unsplash.com/photo-1544333323-5db7b4439977?auto=format&fit=crop&w=400&q=80" alt="Adrak Elaichi Chaa" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <h4 class="font-bold text-xl mb-2">Adrak Elaichi Special</h4>
                <p class="text-chaa-brown/60 mb-4 text-sm">Freshly crushed ginger and bold cardamom flavor.</p>
                <div class="flex items-center justify-between">
                    <span class="text-chaa-maroon font-extrabold text-lg">₹20</span>
                    <button class="bg-chaa-maroon/10 text-chaa-maroon py-1.5 px-4 rounded-full text-sm font-bold hover:bg-chaa-maroon hover:text-white transition-all">+</button>
                </div>
            </div>
            <!-- Item 4 -->
            <div class="bg-white p-6 rounded-3xl shadow-lg border border-chaa-yellow/10 group overflow-hidden">
                <div class="h-48 rounded-2xl overflow-hidden mb-6 bg-chaa-cream">
                    <img src="https://images.unsplash.com/photo-1596464839103-605156a00f2e?auto=format&fit=crop&w=400&q=80" alt="Rose Chaa" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <h4 class="font-bold text-xl mb-2">Rose Tea</h4>
                <p class="text-chaa-brown/60 mb-4 text-sm">Gentle infusion of dried organic rose petals.</p>
                <div class="flex items-center justify-between">
                    <span class="text-chaa-maroon font-extrabold text-lg">₹35</span>
                    <button class="bg-chaa-maroon/10 text-chaa-maroon py-1.5 px-4 rounded-full text-sm font-bold hover:bg-chaa-maroon hover:text-white transition-all">+</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Franchise Section -->
    <section id="franchise" class="bg-chaa-maroon py-24 px-6 text-white text-center">
        <div class="max-w-4xl mx-auto">
            <h2 class="font-['Playfair_Display'] text-5xl mb-6 font-bold">Start Your Own <br> Chaa Revolution</h2>
            <p class="text-xl mb-12 font-light opacity-90">Join our growing family and bring authentic taste to your city. Low investment, high returns, and full support.</p>
            <div class="flex justify-center gap-6 flex-wrap">
                <a href="#contact" class="bg-chaa-yellow text-chaa-brown px-12 py-5 rounded-full font-bold text-xl hover:shadow-2xl hover:scale-105 transition-all">Enquire Now</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-chaa-brown text-white py-20 px-6">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between gap-12">
            <div>
                <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="w-16 h-16 rounded-full mb-6 border-2 border-chaa-yellow">
                <p class="text-2xl font-['Playfair_Display'] font-bold mb-4">Chaa Majhe Di</p>
                <p class="max-w-xs opacity-70">Experience the soul of authentic Indian tea in every Kulhad. Visit us today.</p>
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
                <p class="opacity-80 mb-2">123 Chaa Street, Spice Market</p>
                <p class="opacity-80 mb-6">New Delhi, India</p>
                <p class="font-bold text-xl">hello@chaamajhedi.com</p>
            </div>
            <div>
                <h5 class="font-bold mb-6 text-chaa-yellow uppercase tracking-widest text-sm">Connect</h5>
                <div class="flex gap-4">
                    <span class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-chaa-maroon cursor-pointer transition-colors">FB</span>
                    <span class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-chaa-maroon cursor-pointer transition-colors">IG</span>
                    <span class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-chaa-maroon cursor-pointer transition-colors">TW</span>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto border-t border-white/10 mt-20 pt-10 text-center opacity-40 text-sm">
            &copy; 2026 Chaa Majhe Di. All rights reserved.
        </div>
    </footer>

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
    </script>
</body>
</html>
