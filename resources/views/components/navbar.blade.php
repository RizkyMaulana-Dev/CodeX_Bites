<nav x-data="{ open: false, cartOpen: false }" class="bg-white shadow-sm border-b border-gray-100 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ url('/') }}" class="flex-shrink-0">
                    <img class="h-10 w-auto" src="{{ asset('images/CodeX_Bites_logo/CodeX_Bites-removebg-preview.png') }}"
                         alt="CodeX Bites Logo">
                </a>
            </div>

            <!-- Menu Desktop -->
            <div class="hidden md:flex items-center space-x-6">
                <a href="/" class="text-gray-600 hover:text-orange-600 text-sm font-medium transition-colors">Beranda</a>
                <a href="#" class="text-gray-600 hover:text-orange-600 text-sm font-medium transition-colors">Tentang Kami</a>
                @if (Auth::check())
                    <a href="/profile" class="text-gray-600 hover:text-orange-600 text-sm font-medium transition-colors">Profile</a>
                @else
                    <a href="/auth" class="text-gray-600 hover:text-orange-600 text-sm font-medium transition-colors">Login</a>
                @endif
            </div>

            <!-- Icon Kanan -->
            <div class="flex items-center space-x-1">
                <!-- Cart -->
                <button @click="cartOpen = !cartOpen"
                        class="p-2 rounded-full text-gray-500 hover:text-orange-600 hover:bg-gray-100 transition-colors">
                    <span class="sr-only">Keranjang</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </button>

                <!-- Hamburger Mobile -->
                <button @click="open = !open"
                        class="md:hidden p-2 rounded-full text-gray-500 hover:text-orange-600 hover:bg-gray-100 transition-colors">
                    <span class="sr-only">Buka menu</span>
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div x-show="open" @click.away="open = false" class="md:hidden bg-white border-t border-gray-100 shadow-md"
         x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-2">
        <div class="px-4 py-3 space-y-2">
            <a href="/" class="block text-gray-700 hover:text-orange-600 text-sm font-medium py-2">Beranda</a>
            <a href="#" class="block text-gray-700 hover:text-orange-600 text-sm font-medium py-2">Tentang Kami</a>
            @if (Auth::check())
                <a href="/profile" class="block text-gray-700 hover:text-orange-600 text-sm font-medium py-2">Profile</a>
            @else
                <a href="/auth" class="block text-gray-700 hover:text-orange-600 text-sm font-medium py-2">Login</a>
            @endif
        </div>
    </div>

    <!-- Dropdown Cart -->
    <div x-show="cartOpen" @click.away="cartOpen = false"
         class="absolute right-4 top-full mt-2 w-60 bg-white rounded-xl shadow-xl border border-gray-100 py-4 px-4 z-50"
         x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">
        @if (Auth::check())
            <p class="text-sm text-gray-500 mb-3">Keranjangmu masih kosong.</p>
            <a href="/keranjang" class="block w-full text-center text-sm bg-orange-500 text-white py-2 rounded-lg hover:bg-orange-600 transition-colors">Lihat Keranjang</a>
        @else
            <p class="text-sm text-gray-500 mb-3">Silakan login untuk melihat keranjang.</p>
            <a href="/auth" class="block w-full text-center text-sm border border-orange-500 text-orange-600 py-2 rounded-lg hover:bg-orange-50 transition-colors">Login</a>
        @endif
    </div>
</nav>