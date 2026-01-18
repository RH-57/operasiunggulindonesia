<header id="site-header" class="fixed top-0 w-full z-50 transition-all duration-300 bg-transparent">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="#home" class="flex items-center group">
                    <div class="w-25 h-15 bg-white rounded-lg flex items-center justify-center mr-3 group-hover:scale-110 transition-transform duration-300">
                        <img
                            src="{{ asset('assets/website/img/logo.png') }}"
                            alt="Operasi Unggul Indonesia"
                            class="w-full h-full object-contain"
                        >
                    </div>
                    <!--
                    <span class="logo-text text-xl font-bold text-white transition-colors duration-300">
                        Operasi Unggul Indonesia
                    </span> -->
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex lg:items-center lg:space-x-1">
                <a href="" class="nav-link active px-4 py-2 text-sm font-medium text-white rounded-lg hover:bg-white/10 transition-all duration-300">
                    Home
                </a>
                <a href="" class="nav-link px-4 py-2 text-sm font-medium text-white rounded-lg hover:bg-white/10 transition-all duration-300">
                    About
                </a>
                <a href="" class="nav-link px-4 py-2 text-sm font-medium text-white rounded-lg hover:bg-white/10 transition-all duration-300">
                    Services
                </a>
                <a href="" class="nav-link px-4 py-2 text-sm font-medium text-white rounded-lg hover:bg-white/10 transition-all duration-300">
                    Projects
                </a>
                <a href="" class="nav-link px-4 py-2 text-sm font-medium text-white rounded-lg hover:bg-white/10 transition-all duration-300">
                    FAQ
                </a>
                <a href="" class="nav-link px-4 py-2 text-sm font-medium text-white rounded-lg hover:bg-white/10 transition-all duration-300">
                    Contact
                </a>
            </div>

            <!-- CTA Button (Desktop) -->
            <div class="hidden lg:block">
                <a href="" class="cta-button inline-flex items-center px-6 py-2.5 bg-white text-indigo-600 rounded-lg text-sm font-semibold hover:bg-indigo-50 shadow-lg">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                    </svg>
                    Konsultasi Gratis
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="lg:hidden">
                <button id="mobile-menu-button" type="button" class="mobile-menu-btn p-2 rounded-lg text-white hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-white/20 transition-all duration-300" aria-label="Toggle menu">
                    <svg id="menu-icon" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg id="close-icon" class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="mobile-menu lg:hidden overflow-hidden">
            <div class="py-4 space-y-1 bg-white/95 backdrop-blur-lg rounded-2xl shadow-xl mt-2 border border-gray-100">
                <a href="" class="mobile-nav-item block px-6 py-3 text-base font-medium text-gray-900 hover:bg-indigo-50 hover:text-indigo-600 transition-colors duration-200 border-l-4 border-transparent hover:border-indigo-600">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                        Home
                    </div>
                </a>
                <a href="" class="mobile-nav-item block px-6 py-3 text-base font-medium text-gray-900 hover:bg-indigo-50 hover:text-indigo-600 transition-colors duration-200 border-l-4 border-transparent hover:border-indigo-600">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        About
                    </div>
                </a>
                <a href="" class="mobile-nav-item block px-6 py-3 text-base font-medium text-gray-900 hover:bg-indigo-50 hover:text-indigo-600 transition-colors duration-200 border-l-4 border-transparent hover:border-indigo-600">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        Services
                    </div>
                </a>
                <a href="" class="mobile-nav-item block px-6 py-3 text-base font-medium text-gray-900 hover:bg-indigo-50 hover:text-indigo-600 transition-colors duration-200 border-l-4 border-transparent hover:border-indigo-600">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                        </svg>
                        Projects
                    </div>
                </a>
                <a href="" class="mobile-nav-item block px-6 py-3 text-base font-medium text-gray-900 hover:bg-indigo-50 hover:text-indigo-600 transition-colors duration-200 border-l-4 border-transparent hover:border-indigo-600">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        Contact
                    </div>
                </a>
                <div class="mobile-nav-item px-6 pt-4 pb-3 border-t border-gray-200 mt-2">
                    <a href="#consultation" class="flex items-center justify-center px-6 py-3 bg-gradient-to-r from-indigo-600 to-blue-600 text-white rounded-lg text-base font-semibold hover:from-indigo-700 hover:to-blue-700 shadow-lg hover:shadow-xl transition-all duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                        </svg>
                        Konsultasi Gratis
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>
