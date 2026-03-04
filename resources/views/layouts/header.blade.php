<nav class="fixed top-0 left-0 right-0 z-50 bg-navy">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
        <a href="/" class="flex items-center gap-3">
            <img src="{{ asset('images/logo.png') }}" alt="Meerkats Logo" class="h-8 w-auto">
            <span class="text-white font-semibold text-sm tracking-wide">Meerkats Flexipack Indonesia</span>
        </a>
        <div class="hidden md:flex items-center gap-8">
            <a href="#home" class="text-white text-sm font-medium hover:text-blue-300 transition-colors">Home</a>
            <a href="#about" class="text-white text-sm font-medium hover:text-blue-300 transition-colors">About</a>
            <a href="#products" class="text-white text-sm font-medium hover:text-blue-300 transition-colors">Products</a>
            <a href="#machinery" class="text-white text-sm font-medium hover:text-blue-300 transition-colors">Machinery</a>
            <a href="#contact" class="text-white text-sm font-medium hover:text-blue-300 transition-colors">Contact</a>
        </div>
        {{-- Mobile hamburger --}}
        <button class="md:hidden text-white" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </div>
    {{-- Mobile menu --}}
    <div id="mobile-menu" class="hidden md:hidden bg-navy-dark px-6 pb-4 space-y-3">
        <a href="#home" class="block text-white text-sm font-medium hover:text-blue-300">Home</a>
        <a href="#about" class="block text-white text-sm font-medium hover:text-blue-300">About</a>
        <a href="#products" class="block text-white text-sm font-medium hover:text-blue-300">Products</a>
        <a href="#machinery" class="block text-white text-sm font-medium hover:text-blue-300">Machinery</a>
        <a href="#contact" class="block text-white text-sm font-medium hover:text-blue-300">Contact</a>
    </div>
</nav>