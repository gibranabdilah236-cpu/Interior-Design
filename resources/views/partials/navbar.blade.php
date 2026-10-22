<header class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-sm border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 lg:h-20">
            <a href="{{ route('home') }}" class="flex items-center gap-2">
                <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L2 7v10l10 5 10-5V7L12 2zm0 2.18l6 3-6 3-6-3 6-3z"/>
                    </svg>
                </div>
                <span class="text-xl font-bold text-gray-900">Luxe <span class="text-blue-600">Interiors</span></span>
            </a>

            <nav class="hidden md:flex items-center gap-8">
                <a href="{{ route('home') }}" class="text-sm font-medium {{ request()->routeIs('home') ? 'text-blue-600' : 'text-gray-600 hover:text-gray-900' }} transition">Beranda</a>
                <a href="{{ route('about') }}" class="text-sm font-medium {{ request()->routeIs('about') ? 'text-blue-600' : 'text-gray-600 hover:text-gray-900' }} transition">Tentang Kami</a>
                <a href="{{ route('services') }}" class="text-sm font-medium {{ request()->routeIs('services*') ? 'text-blue-600' : 'text-gray-600 hover:text-gray-900' }} transition">Layanan</a>
                <a href="{{ route('portfolio') }}" class="text-sm font-medium {{ request()->routeIs('portfolio*') ? 'text-blue-600' : 'text-gray-600 hover:text-gray-900' }} transition">Portofolio</a>
                <a href="{{ route('team') }}" class="text-sm font-medium {{ request()->routeIs('team') ? 'text-blue-600' : 'text-gray-600 hover:text-gray-900' }} transition">Tim</a>
                <a href="{{ route('contact') }}" class="text-sm font-medium {{ request()->routeIs('contact') ? 'text-blue-600' : 'text-gray-600 hover:text-gray-900' }} transition">Kontak</a>
            </nav>

            <a href="{{ route('contact') }}" class="hidden md:inline-flex items-center px-5 py-2.5 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 transition">
                Mulai Sekarang
            </a>

            <button type="button" class="md:hidden p-2 text-gray-600" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </div>

    <div id="mobile-menu" class="hidden md:hidden border-t border-gray-100 bg-white">
        <div class="px-4 py-4 space-y-3">
            <a href="{{ route('home') }}" class="block text-sm font-medium text-gray-600 hover:text-blue-600">Beranda</a>
            <a href="{{ route('about') }}" class="block text-sm font-medium text-gray-600 hover:text-blue-600">Tentang Kami</a>
            <a href="{{ route('services') }}" class="block text-sm font-medium text-gray-600 hover:text-blue-600">Layanan</a>
            <a href="{{ route('portfolio') }}" class="block text-sm font-medium text-gray-600 hover:text-blue-600">Portofolio</a>
            <a href="{{ route('team') }}" class="block text-sm font-medium text-gray-600 hover:text-blue-600">Tim</a>
            <a href="{{ route('contact') }}" class="block text-sm font-medium text-gray-600 hover:text-blue-600">Kontak</a>
            <a href="{{ route('contact') }}" class="block text-center px-5 py-2.5 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 transition">Mulai Sekarang</a>
        </div>
    </div>
</header>
