<!DOCTYPE html>
<html lang="en" class="h-full bg-white">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dimsum Aditiva - {{ $title }}</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-full flex flex-col bg-gray-50">
    <!-- Sticky Navbar -->
    <x-navbar />

    <!-- Main Content -->
    <main class="flex-1">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
                <!-- Brand -->
                <div class="md:col-span-2">
                    <h3 class="text-xl font-bold text-white mb-4">Dimsum Aditiva</h3>
                    <p class="text-sm text-gray-400 mb-6 max-w-xs">Premium handmade dimsum crafted with passion and tradition.</p>
                    <div class="flex space-x-3">
                        <a href="#" class="text-gray-500 hover:text-orange-400 transition-colors">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22.675 0h-21.35..."/></svg>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-orange-400 transition-colors">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0..."/></svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-sm font-semibold text-white uppercase tracking-wider mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#home" class="hover:text-white transition-colors">Home</a></li>
                        <li><a href="#about" class="hover:text-white transition-colors">About Us</a></li>
                        <li><a href="#menu" class="hover:text-white transition-colors">Our Menu</a></li>
                        <li><a href="#contact" class="hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="text-sm font-semibold text-white uppercase tracking-wider mb-4">Contact Us</h4>
                    <ul class="space-y-3 text-sm">
                        <li class="flex items-start gap-2">
                            <svg class="h-4 w-4 mt-0.5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28..."/></svg>
                            +62 123 4567 890
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="h-4 w-4 mt-0.5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89..."/></svg>
                            order@dimsumaditiva.com
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="h-4 w-4 mt-0.5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657..."/></svg>
                            Jl. Dimsum No. 88, Jakarta
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-10 pt-6 text-center text-xs text-gray-500">
                &copy; {{ date('Y') }} Dimsum Aditiva. All Rights Reserved.
            </div>
        </div>
    </footer>
</body>
</html>