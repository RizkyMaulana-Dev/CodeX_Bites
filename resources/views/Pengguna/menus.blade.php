<style>
    /* Hilangkan spinner number input */
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    input[type=number] {
        -moz-appearance: textfield;
    }
</style>

<x-layout>
    <x-slot:title>Daftar Menu</x-slot:title>

    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
        @foreach ($menus as $menu)
            {{-- Versi Desktop/Tablet --}}
            <div class="hidden md:flex flex-col bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden h-full">
                {{-- Gambar --}}
                <a href="{{ url('/menu/' . $menu->id) }}" class="block relative aspect-square w-full overflow-hidden">
                    @if ($menu->gambar)
                        <img class="w-full h-full object-cover" src="{{ asset('storage/' . $menu->gambar) }}" alt="{{ $menu->nama }}">
                    @else
                        <div class="w-full h-full bg-gray-100 flex items-center justify-center text-sm text-gray-400">
                            Tidak ada gambar
                        </div>
                    @endif
                </a>

                {{-- Konten --}}
                <div class="p-4 flex flex-col justify-between flex-1">
                    <a href="{{ url('/menu/' . $menu->id) }}" class="block space-y-1.5">
                        <h2 class="text-sm font-semibold text-gray-900 truncate hover:text-orange-600 transition-colors">
                            {{ $menu->nama }}
                        </h2>
                        <p class="text-sm font-medium text-gray-700">Rp {{ number_format($menu->harga, 0, ',', '.') }}</p>

                        {{-- Info ringkas stok & rating --}}
                        <div class="flex items-center justify-between text-xs text-gray-500">
                            <div class="flex items-center gap-2">
                                <span>Stok: {{ $menu->stock }}</span>
                                <span>•</span>
                                <span>Terjual: {{ $menu->jumlah_terjual }}</span>
                            </div>
                            @if ($menu->rating)
                                <span class="flex items-center text-yellow-500">
                                    <svg class="w-3.5 h-3.5 mr-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.957a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.37 2.448a1 1 0 00-.364 1.118l1.287 3.957c.3.921-.755 1.688-1.54 1.118l-3.37-2.448a1 1 0 00-1.176 0l-3.37 2.448c-.784.57-1.838-.197-1.539-1.118l1.287-3.957a1 1 0 00-.364-1.118L2.045 9.384c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69l1.284-3.957z"/>
                                    </svg>
                                    {{ number_format($menu->rating, 1) }}
                                </span>
                            @endif
                        </div>
                    </a>

                    {{-- Form pesan dengan counter --}}
                    <div class="mt-4 flex items-center justify-between gap-2">
                        <div class="flex items-center border border-gray-200 rounded-lg divide-x divide-gray-200"
                             onclick="event.stopPropagation()">
                            <button type="button"
                                    class="counter-button px-2 py-1 text-gray-600 hover:text-orange-600 transition-colors"
                                    onclick="event.preventDefault(); decrement(this)">−</button>
                            <input type="number" min="1" max="10" value="1"
                                   class="w-10 text-center text-sm outline-none text-gray-700 bg-gray-50"
                                   onblur="validateNumber(this)">
                            <button type="button"
                                    class="counter-button px-2 py-1 text-gray-600 hover:text-orange-600 transition-colors"
                                    onclick="event.preventDefault(); increment(this)">+</button>
                        </div>
                        <form action="{{ url('/keranjang') }}" method="POST" class="flex-1"
                              onsubmit="syncJumlahInput(this)">
                            @csrf
                            <input type="hidden" name="menu_id" value="{{ $menu->id }}">
                            <input type="hidden" name="jumlah" value="1" class="jumlah-input">

                            <button type="submit"
                                    class="w-full bg-orange-500 hover:bg-orange-600 text-white text-sm py-2 px-4 rounded-lg transition-colors duration-200 font-medium">
                                Pesan
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            {{-- Versi Mobile --}}
            <div class="flex flex-col md:hidden bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden h-full">
                <a href="{{ url('/menu/' . $menu->id) }}" class="block relative aspect-square w-full overflow-hidden">
                    @if ($menu->gambar)
                        <img class="w-full h-full object-cover" src="{{ asset('storage/' . $menu->gambar) }}" alt="{{ $menu->nama }}">
                    @else
                        <div class="w-full h-full bg-gray-100 flex items-center justify-center text-sm text-gray-400">
                            Tidak ada gambar
                        </div>
                    @endif
                    {{-- Badge stok tetap di pojok kiri atas --}}
                    <span class="absolute top-2 left-2 px-2 py-0.5 rounded-full text-xs font-medium bg-white/80 backdrop-blur text-gray-700">
                        Stok: {{ $menu->stock }}
                    </span>
                </a>

                <div class="p-3 flex flex-col justify-between flex-1">
                    <a href="{{ url('/menu/' . $menu->id) }}" class="block space-y-1">
                        <h2 class="text-sm font-semibold text-gray-900 truncate hover:text-orange-600 transition-colors">
                            {{ $menu->nama }}
                        </h2>
                        <p class="text-sm font-medium text-gray-700">Rp {{ number_format($menu->harga, 0, ',', '.') }}</p>
                        @if ($menu->rating)
                            <span class="flex items-center text-xs text-yellow-500">
                                <svg class="w-3.5 h-3.5 mr-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.957a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.37 2.448a1 1 0 00-.364 1.118l1.287 3.957c.3.921-.755 1.688-1.54 1.118l-3.37-2.448a1 1 0 00-1.176 0l-3.37 2.448c-.784.57-1.838-.197-1.539-1.118l1.287-3.957a1 1 0 00-.364-1.118L2.045 9.384c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69l1.284-3.957z"/>
                                </svg>
                                {{ number_format($menu->rating, 1) }}
                            </span>
                        @endif
                    </a>
                    <div class="mt-3">
                        <a href="{{ url('/menu/' . $menu->id) }}"
                           class="block text-center bg-gray-50 hover:bg-orange-50 text-gray-700 hover:text-orange-600 border border-gray-200 text-sm py-1.5 rounded-lg transition-colors duration-200">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- Script Counter (sama) --}}
    <script>
        function increment(el) {
            const input = el.parentElement.querySelector('input[type=number]');
            let value = parseInt(input.value || 1);
            if (value < 10) input.value = value + 1;
            updateHiddenInput(input);
        }
        function decrement(el) {
            const input = el.parentElement.querySelector('input[type=number]');
            let value = parseInt(input.value || 1);
            if (value > 1) input.value = value - 1;
            updateHiddenInput(input);
        }
        function validateNumber(el) {
            setTimeout(() => {
                let val = parseInt(el.value);
                if (isNaN(val) || val < 1) el.value = 1;
                if (val > 10) el.value = 10;
                updateHiddenInput(el);
            }, 100);
        }
        function updateHiddenInput(numberInput) {
            const jumlahInput = numberInput.closest('form').querySelector('.jumlah-input');
            jumlahInput.value = numberInput.value;
        }
        function syncJumlahInput(form) {
            const numberInput = form.closest('.flex').querySelector('input[type=number]');
            const hiddenInput = form.querySelector('.jumlah-input');
            hiddenInput.value = numberInput.value;
        }
    </script>
</x-layout>