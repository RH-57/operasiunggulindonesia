<!-- resources/views/components/clients-section.blade.php -->
    <section class="py-10 bg-white border-y border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">
                    Trusted by <span class="text-indigo-600">Industry Leaders</span>
                </h2>
            </div>

            <!-- Logo Carousel Container -->
            <div class="relative overflow-hidden">
                <!-- Gradient Overlays -->
                <div class="absolute left-0 top-0 bottom-0 w-32 bg-gradient-to-r from-white to-transparent z-10"></div>
                <div class="absolute right-0 top-0 bottom-0 w-32 bg-gradient-to-l from-white to-transparent z-10"></div>

                <!-- Scrolling Logos -->
                <div class="logo-scroll flex items-center gap-12">
                    <!-- First Set of Logos -->
                    <div class="flex items-center gap-12 animate-scroll">
                        <div class="flex-shrink-0 w-40 h-24 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-300">
                            <img src="{{ asset('assets/website/img/clients/bootstrap.png') }}" alt="Client 1" class="max-w-full max-h-full object-contain">
                        </div>
                        <div class="flex-shrink-0 w-40 h-24 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-300">
                            <img src="{{ asset('assets/website/img/clients/cloudflare.png') }}" alt="Client 2" class="max-w-full max-h-full object-contain">
                        </div>
                        <div class="flex-shrink-0 w-40 h-24 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-300">
                            <img src="{{ asset('assets/website/img/clients/cpanel.png') }}" alt="Client 3" class="max-w-full max-h-full object-contain">
                        </div>
                        <div class="flex-shrink-0 w-40 h-24 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-300">
                            <img src="{{ asset('assets/website/img/clients/laravel.png') }}" alt="Client 4" class="max-w-full max-h-full object-contain">
                        </div>
                        <div class="flex-shrink-0 w-40 h-24 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-300">
                            <img src="{{ asset('assets/website/img/clients/mysql.png') }}" alt="Client 5" class="max-w-full max-h-full object-contain">
                        </div>
                        <div class="flex-shrink-0 w-40 h-24 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-300">
                            <img src="{{ asset('assets/website/img/clients/php.png') }}" alt="Client 6" class="max-w-full max-h-full object-contain">
                        </div>
                        <div class="flex-shrink-0 w-40 h-24 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-300">
                            <img src="{{ asset('assets/website/img/clients/tailwind.png') }}" alt="Client 7" class="max-w-full max-h-full object-contain">
                        </div>
                        <div class="flex-shrink-0 w-40 h-24 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-300">
                            <img src="{{ asset('assets/website/img/clients/javascript.png') }}" alt="Client 8" class="max-w-full max-h-full object-contain">
                        </div>
                    </div>

                    <!-- Duplicate Set for Seamless Loop -->
                    <div class="flex items-center gap-12 animate-scroll" aria-hidden="true">
                        <div class="flex-shrink-0 w-40 h-24 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-300">
                            <img src="{{ asset('assets/website/img/clients/bootstrap.png') }}" alt="Client 1" class="max-w-full max-h-full object-contain">
                        </div>
                        <div class="flex-shrink-0 w-40 h-24 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-300">
                            <img src="{{ asset('assets/website/img/clients/cloudflare.png') }}" alt="Client 2" class="max-w-full max-h-full object-contain">
                        </div>
                        <div class="flex-shrink-0 w-40 h-24 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-300">
                            <img src="{{ asset('assets/website/img/clients/cpanel.png') }}" alt="Client 3" class="max-w-full max-h-full object-contain">
                        </div>
                        <div class="flex-shrink-0 w-40 h-24 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-300">
                            <img src="{{ asset('assets/website/img/clients/javascript.png') }}" alt="Client 4" class="max-w-full max-h-full object-contain">
                        </div>
                        <div class="flex-shrink-0 w-40 h-24 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-300">
                            <img src="{{ asset('assets/website/img/clients/laravel.png') }}" alt="Client 5" class="max-w-full max-h-full object-contain">
                        </div>
                        <div class="flex-shrink-0 w-40 h-24 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-300">
                            <img src="{{ asset('assets/website/img/clients/mysql.png') }}" alt="Client 6" class="max-w-full max-h-full object-contain">
                        </div>
                        <div class="flex-shrink-0 w-40 h-24 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-300">
                            <img src="{{ asset('assets/website/img/clients/php.png') }}" alt="Client 7" class="max-w-full max-h-full object-contain">
                        </div>
                        <div class="flex-shrink-0 w-40 h-24 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-300">
                            <img src="{{ asset('assets/website/img/clients/tailwind.png') }}" alt="Client 8" class="max-w-full max-h-full object-contain">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
