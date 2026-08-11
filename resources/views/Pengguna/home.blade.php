<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <!-- Modern Clean Layout -->
    <main class="bg-white">

        <!-- Hero -->
        <section id="home" class="py-24 md:py-36 px-6">
            <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center gap-16">
                <div class="md:w-1/2 text-center md:text-left space-y-6">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight tracking-tight">
                        Authentic Dimsum <br class="hidden md:block" /> Experience
                    </h1>
                    <p class="text-lg text-gray-500 max-w-xl">
                        Premium dimsum from the freshest ingredients, handcrafted with traditional techniques for exceptional flavor.
                    </p>
                    <div class="flex flex-wrap gap-4 justify-center md:justify-start">
                        <a href="#"
                           class="inline-block bg-orange-500 hover:bg-orange-600 text-white font-semibold py-3.5 px-10 rounded-full transition-all duration-300 shadow-sm hover:shadow-md">
                            Order Now
                        </a>
                        <a href="/menus"
                           class="inline-block border-2 border-orange-500 text-orange-500 hover:bg-orange-50 font-semibold py-3.5 px-10 rounded-full transition-all duration-300">
                            Our Menu
                        </a>
                    </div>
                </div>
                <div class="md:w-1/2 flex justify-center">
                    <img src="images/Produk/image.png" alt="Dimsum Aditiva"
                         class="w-full max-w-md rounded-3xl shadow-2xl">
                </div>
            </div>
        </section>

        <!-- About / Why Choose Us -->
        <section id="about" class="py-24 bg-gray-50">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-16 space-y-3">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Why Choose Our Dimsum?</h2>
                    <p class="text-gray-500 max-w-2xl mx-auto">
                        Only premium chicken, shrimp, and vegetables processed with strict hygiene for the best quality.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Card 1 -->
                    <div class="bg-white p-10 rounded-2xl shadow-sm hover:shadow-md transition-shadow duration-300 text-center">
                        <div class="inline-flex items-center justify-center w-14 h-14 rounded-full bg-orange-50 text-orange-500 mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Authentic Taste</h3>
                        <p class="text-gray-500">Traditional recipes passed down for generations with authentic oriental flavors.</p>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-white p-10 rounded-2xl shadow-sm hover:shadow-md transition-shadow duration-300 text-center">
                        <div class="inline-flex items-center justify-center w-14 h-14 rounded-full bg-orange-50 text-orange-500 mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Premium Ingredients</h3>
                        <p class="text-gray-500">Only the freshest, highest quality ingredients with no artificial preservatives.</p>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-white p-10 rounded-2xl shadow-sm hover:shadow-md transition-shadow duration-300 text-center">
                        <div class="inline-flex items-center justify-center w-14 h-14 rounded-full bg-orange-50 text-orange-500 mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Handcrafted</h3>
                        <p class="text-gray-500">Each piece is carefully handmade by our expert dimsum chefs.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Specialties -->
        <section id="features" class="py-24">
            <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row items-center gap-16">
                <div class="md:w-1/2">
                    <img src="images/Produk/image3.png" alt="Dimsum preparation"
                         class="rounded-3xl shadow-lg w-full object-cover h-96">
                </div>
                <div class="md:w-1/2 space-y-8">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Our Specialties</h2>
                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <span class="flex-shrink-0 w-8 h-8 rounded-full bg-orange-50 text-orange-500 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">Signature Har Gao</h3>
                                <p class="text-gray-500">Delicate shrimp dumplings with translucent wrappers, a customer favorite.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <span class="flex-shrink-0 w-8 h-8 rounded-full bg-orange-50 text-orange-500 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">Siu Mai Perfection</h3>
                                <p class="text-gray-500">Juicy pork and shrimp dumplings topped with orange fish roe.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <span class="flex-shrink-0 w-8 h-8 rounded-full bg-orange-50 text-orange-500 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">Vegetarian Options</h3>
                                <p class="text-gray-500">Delicious mushroom and vegetable dumplings for plant-based diets.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <section class="py-24 bg-gray-50">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">What Our Customers Say</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Testimonial 1 -->
                    <div class="bg-white p-8 rounded-2xl shadow-sm">
                        <div class="flex text-yellow-400 mb-4">
                            ★★★★★
                        </div>
                        <p class="text-gray-600 mb-6">"The best dimsum I've had outside of Hong Kong! The shrimp dumplings are perfectly textured."</p>
                        <div class="flex items-center gap-3">
                            <img src="https://randomuser.me/api/portraits/women/43.jpg" alt="Sarah" class="w-10 h-10 rounded-full object-cover">
                            <div>
                                <h4 class="font-semibold text-gray-900">Sarah L.</h4>
                                <p class="text-sm text-gray-400">Regular Customer</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="bg-white p-8 rounded-2xl shadow-sm">
                        <div class="flex text-yellow-400 mb-4">
                            ★★★★★
                        </div>
                        <p class="text-gray-600 mb-6">"I order for my office meetings every week. Quality is consistently excellent."</p>
                        <div class="flex items-center gap-3">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Michael" class="w-10 h-10 rounded-full object-cover">
                            <div>
                                <h4 class="font-semibold text-gray-900">Michael T.</h4>
                                <p class="text-sm text-gray-400">Corporate Client</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="bg-white p-8 rounded-2xl shadow-sm">
                        <div class="flex text-yellow-400 mb-4">
                            ★★★★★
                        </div>
                        <p class="text-gray-600 mb-6">"As someone from Guangzhou, Aditiva's dimsum brings me right back home – authentic and delicious!"</p>
                        <div class="flex items-center gap-3">
                            <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Wei" class="w-10 h-10 rounded-full object-cover">
                            <div>
                                <h4 class="font-semibold text-gray-900">Wei C.</h4>
                                <p class="text-sm text-gray-400">Food Blogger</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-24 bg-orange-500 text-white">
            <div class="max-w-3xl mx-auto px-6 text-center space-y-6">
                <h2 class="text-3xl md:text-4xl font-bold">Ready to Taste the Difference?</h2>
                <p class="text-lg text-orange-50 max-w-xl mx-auto">Order now and experience authentic dimsum delivered to your door.</p>
                <a href="#"
                   class="inline-block bg-white text-orange-600 hover:bg-gray-100 font-semibold py-4 px-12 rounded-full transition-all duration-300 shadow-md hover:shadow-lg">
                    Order Online
                </a>
            </div>
        </section>

    </main>
</x-layout>