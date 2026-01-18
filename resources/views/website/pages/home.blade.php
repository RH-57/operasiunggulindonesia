<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jasa Konsultan Manufaktur & Training/Sertifikasi Internasional - PT. Operasi Unggul Indonesia</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('website.components.header')

   <!-- resources/views/components/hero.blade.php -->
    <section class="relative pt-20 bg-gradient-to-br from-blue-800 to-blue-600 overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-15">
            <div
            class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('{{ asset('assets/website/img/hero.webp') }}');"
            ></div>

        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-28">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div class="text-center lg:text-left">
                    <!-- Badge -->
                    <div class="inline-flex items-center px-4 py-2 bg-indigo-100 text-indigo-700 rounded-full text-sm font-medium mb-6">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        Business Solution
                    </div>
                    <div class="inline-flex items-center px-4 py-2 bg-indigo-100 text-indigo-700 rounded-full text-sm font-medium mb-6">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        International Certification
                    </div>
                    <div class="inline-flex items-center px-4 py-2 bg-indigo-100 text-indigo-700 rounded-full text-sm font-medium mb-6">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        Workshop & Traning
                    </div>

                    <!-- Heading -->
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                        Transforming
                        <span class="underline decoration-yellow-400 decoration-4 underline-offset-8">
                            Operations
                        </span>,
                        Elevating
                        <span class="underline decoration-yellow-400 decoration-4 underline-offset-8">
                            Performance
                        </span>
                    </h1>


                    <!-- Subheading -->
                    <p class="text-lg sm:text-xl text-gray-200 mb-8 leading-relaxed">
                        Business often faces challenges, and that's where LeanCore comes in — delivering proactive solutions through all of our services.
                    </p>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mb-12">
                        <a href="" class="inline-flex items-center justify-center px-8 py-4 bg-indigo-600 text-white text-base font-semibold rounded-lg hover:bg-indigo-700 transition-all duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                            Our Projects
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </a>
                        <a href="" class="inline-flex items-center justify-center px-8 py-4 bg-white text-indigo-600 text-base font-semibold rounded-lg border-2 border-indigo-600 hover:bg-indigo-50 transition-all duration-200">
                            Konsultasi Gratis
                        </a>
                    </div>

                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-6 pt-8 border-t border-gray-200">
                        <div>
                            <div class="text-3xl font-bold text-white">15+</div>
                            <div class="text-sm text-gray-200 mt-1">Years Experience</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-white">500+</div>
                            <div class="text-sm text-gray-200 mt-1">Projects Completed</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-white">98%</div>
                            <div class="text-sm text-gray-200 mt-1">Client Satisfaction</div>
                        </div>
                    </div>
                </div>

                <!-- Right Image/Illustration -->
                <div class="relative lg:ml-8">
                    <!-- Main Image Container -->
                    <div class="relative">
                        <!-- Decorative Elements -->
                        <div class="absolute -top-4 -left-4 w-72 h-72 bg-indigo-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob"></div>
                        <div class="absolute -top-4 -right-4 w-72 h-72 bg-blue-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000"></div>
                        <div class="absolute -bottom-8 left-20 w-72 h-72 bg-purple-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-4000"></div>

                        <!-- Image Placeholder -->
                        <div class="relative bg-white rounded-2xl shadow-2xl p-8">
                            <div class="aspect-square bg-gradient-to-br from-indigo-100 to-blue-100 rounded-xl flex items-center justify-center overflow-hidden">
                                <img
                                    src="{{ asset('assets/website/img/sub-hero.webp') }}"
                                    alt="Sub Hero Image"
                                    class="w-full h-full object-cover"
                                />
                            </div>


                            <!-- Floating Cards -->
                            <div class="absolute -left-6 top-1/4 bg-white rounded-lg shadow-lg p-4 transform hover:scale-105 transition-transform">
                                <div class="flex items-center gap-3">
                                    <div class="bg-green-100 p-2 rounded-lg">
                                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-xs text-gray-500">Efficiency</div>
                                        <div class="text-sm font-bold text-gray-900">+45%</div>
                                    </div>
                                </div>
                            </div>

                            <div class="absolute -right-6 top-2/3 bg-white rounded-lg shadow-lg p-4 transform hover:scale-105 transition-transform">
                                <div class="flex items-center gap-3">
                                    <div class="bg-blue-100 p-2 rounded-lg">
                                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-xs text-gray-500">Cost Reduction</div>
                                        <div class="text-sm font-bold text-gray-900">-30%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Wave Separator -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 120L60 105C120 90 240 60 360 45C480 30 600 30 720 37.5C840 45 960 60 1080 67.5C1200 75 1320 75 1380 75L1440 75V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="white"/>
            </svg>
        </div>
    </section>

    <!-- resources/views/components/about-section.blade.php -->
    <section class="py-20 bg-gradient-to-b from-white to-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <!-- Left Side - Content -->
                <div>
                    <!-- Section Label -->
                    <div class="inline-flex items-center px-4 py-2 bg-indigo-50 text-indigo-700 rounded-full text-sm font-medium mb-4">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        About Us
                    </div>

                    <!-- Heading -->
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-6 leading-tight">
                        Leading the Way in <span class="text-indigo-600">Manufacturing Excellence</span>
                    </h2>

                    <!-- Description -->
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        PT Operasi Unggul Indonesia is the premier consulting, training, and research organization focused on improving productivity and quality through people.
                    </p>

                    <!-- Vision -->
                    <div class="bg-white border-l-4 border-indigo-600 p-6 rounded-r-lg shadow-sm mb-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-2 flex items-center">
                            <svg class="w-5 h-5 text-indigo-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                            Vision
                        </h3>
                        <p class="text-gray-600">
                            To become the best strategic partner in building the competitiveness of Indonesia's manufacturing industry through operational excellence.
                        </p>
                    </div>

                    <!-- Mission -->
                    <div class="bg-white border-l-4 border-blue-600 p-6 rounded-r-lg shadow-sm mb-8">
                        <h3 class="text-lg font-bold text-gray-900 mb-3 flex items-center">
                            <svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                            </svg>
                            Mission
                        </h3>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-start gap-2">
                                <span class="text-blue-600 font-bold">•</span>
                                <span>Transform industrial business processes to be more efficient, agile, and excellent.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-blue-600 font-bold">•</span>
                                <span>Empower industrial human resources through global standard training and mentoring.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-blue-600 font-bold">•</span>
                                <span>Create real impact through adaptive, collaborative, and data-driven approaches.</span>
                            </li>
                        </ul>
                    </div>

                    <!-- CTA Button -->
                    <a href="" class="inline-flex items-center px-6 py-3 bg-indigo-600 text-white font-semibold rounded-lg hover:bg-indigo-700 transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                        Learn More
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>

                <!-- Right Side - Stats Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 lg:gap-8">
                    <!-- Stat Card 2 -->
                    <div class="relative group sm:mt-12">
                        <div class="aspect-[4/3] rounded-xl overflow-hidden shadow-xl">
                            <img src="{{asset('assets/website/img/about-1.webp')}}" alt="Training & Events" class="w-full h-full object-cover" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
                            <div class="w-full h-full bg-gradient-to-br from-blue-500 to-blue-700 flex items-center justify-center" style="display: none;">
                                <svg class="w-20 h-20 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                </svg>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent rounded-2xl flex flex-col items-center justify-center text-white p-6">
                            <div class="text-5xl font-bold mb-2">2,100+</div>
                            <div class="text-lg font-medium text-center">Training & Special Events</div>
                        </div>
                    </div>
                    <div class="relative group sm:mt-12">
                        <div class="aspect-[4/3] rounded-xl overflow-hidden shadow-xl">
                            <img src="{{asset('assets/website/img/about-2.webp')}}" alt="Training & Events" class="w-full h-full object-cover" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
                            <div class="w-full h-full bg-gradient-to-br from-blue-500 to-blue-700 flex items-center justify-center" style="display: none;">
                                <svg class="w-20 h-20 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                </svg>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent rounded-2xl flex flex-col items-center justify-center text-white p-6">
                            <div class="text-5xl font-bold mb-2">2,100+</div>
                            <div class="text-lg font-medium text-center">Training & Special Events</div>
                        </div>
                    </div>

                    <!-- Stat Card 3 -->
                    <div class="relative group sm:col-span-2">
                        <div class="aspect-[2/1] rounded-xl overflow-hidden shadow-xl">
                            <img src="{{asset('assets/website/img/about-3.webp')}}" alt="Assisted Clients" class="w-full h-full object-cover" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
                            <div class="w-full h-full bg-gradient-to-br from-purple-500 to-purple-700 flex items-center justify-center" style="display: none;">
                                <svg class="w-20 h-20 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent rounded-2xl flex flex-col items-center justify-center text-white p-6">
                            <div class="text-6xl font-bold mb-2">3,000+</div>
                            <div class="text-xl font-medium">Assisted Clients</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('website.components.client')

    <!-- Training & Certification Section -->
    <section class="py-20 bg-white relative overflow-hidden">
        <!-- Decorative Gradient -->
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-indigo-100 rounded-full blur-3xl opacity-50"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-blue-100 rounded-full blur-3xl opacity-50"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-14">
                <div class="inline-flex items-center px-4 py-2 bg-indigo-50 text-indigo-700 rounded-full text-sm font-medium mb-4">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812z" clip-rule="evenodd"/>
                    </svg>
                    Training & Certification
                </div>

                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                    Professional Training &
                    <span class="text-indigo-600">International Certification</span>
                </h2>

                <p class="text-lg text-gray-600 leading-relaxed">
                    Empowering professionals and organizations through structured training programs
                    and globally recognized certifications to achieve operational excellence.
                </p>
            </div>

            <!-- Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="group relative bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden">
                    <div class="relative h-56 overflow-hidden">
                        <img src="{{ asset('assets/website/img/hero.webp') }}"
                            alt="Lean Manufacturing Training"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">

                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
                    </div>

                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">
                            Lean Manufacturing Training
                        </h3>
                        <p class="text-gray-600 leading-relaxed mb-4">
                            Comprehensive Lean training focused on waste reduction, efficiency improvement,
                            and sustainable operational performance.
                        </p>

                        <div class="flex items-center text-indigo-600 font-semibold">
                            Learn More
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="group relative bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden">
                    <div class="relative h-56 overflow-hidden">
                        <img src="{{ asset('assets/website/img/hero.webp') }}"
                            alt="International Certification"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">

                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
                    </div>

                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">
                            International Certification
                        </h3>
                        <p class="text-gray-600 leading-relaxed mb-4">
                            Globally recognized certification programs designed to validate professional
                            competence and industry expertise.
                        </p>

                        <div class="flex items-center text-indigo-600 font-semibold">
                            Learn More
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="group relative bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden">
                    <div class="relative h-56 overflow-hidden">
                        <img src="{{ asset('assets/website/img/hero.webp') }}"
                            alt="Corporate Workshop"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">

                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
                    </div>

                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">
                            Corporate Workshop & In-House Training
                        </h3>
                        <p class="text-gray-600 leading-relaxed mb-4">
                            Customized workshops tailored to organizational needs, ensuring
                            practical implementation and measurable impact.
                        </p>

                        <div class="flex items-center text-indigo-600 font-semibold">
                            Learn More
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative py-20 bg-white overflow-hidden">
        <!-- DECORATIVE GRADIENT -->
        <div class="absolute -top-32 -left-32 w-96 h-96 bg-blue-100/50 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 -right-32 w-96 h-96 bg-indigo-100/40 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-6 lg:px-12">
            <div class="grid lg:grid-cols-2 gap-14 items-center">

                <!-- LEFT CONTENT -->
                <div>
                    <span
                        class="inline-flex items-center px-4 py-1.5 text-sm font-semibold rounded-full bg-blue-50 text-blue-700 mb-5">
                        Welcome to LeanCore Consulting
                    </span>

                    <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight mb-6">
                        Building World-Class
                        <span class="text-blue-600">Supply Chain Professionals</span>
                    </h2>

                    <p class="text-gray-600 text-lg leading-relaxed mb-6">
                        At LeanCore Consulting, we specialize in empowering manufacturing companies to operate with greater efficiency, agility, and resilience.
                        Rooted in the principles of lean thinking and operational excellence, we provide strategic consulting and hands-on support to help
                         organizations unlock their full performance potential.
                    </p>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6">
                        We believe that excellence starts at the core—in the systems, people, and processes that drive value creation.
                        That’s why we partner with our clients to build lean, adaptive, and future-ready operations that lead to measurable results.
                    </p>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6">
                        With a team of experienced consultants, industry practitioners, and lean transformation experts, LeanCore is trusted by
                        manufacturers across sectors to navigate complexity, streamline operations, and sustain long-term growth.
                    </p>


                    <!-- CTA -->
                    <div class="flex flex-wrap gap-4">
                        <a href="#programs"
                            class="inline-flex items-center justify-center px-7 py-3 rounded-xl bg-blue-600 text-white font-semibold shadow-md hover:bg-blue-700 hover:shadow-lg transition">
                            View Programs
                        </a>

                        <a href="#contact"
                            class="inline-flex items-center justify-center px-7 py-3 rounded-xl border border-gray-300 text-gray-700 font-semibold hover:bg-gray-100 transition">
                            Contact Us
                        </a>
                    </div>
                </div>

                <!-- RIGHT IMAGE -->
                <div class="relative group">
                    <div
                        class="absolute inset-0 bg-gradient-to-tr from-blue-600/20 to-indigo-600/20 rounded-3xl blur-2xl opacity-0 group-hover:opacity-100 transition duration-500">
                    </div>

                    <div
                        class="relative rounded-3xl overflow-hidden shadow-xl group-hover:shadow-2xl transition duration-500">
                        <img src="{{ asset('assets/website/img/sub-hero.webp') }}"
                            alt="ISCEA Indonesia Representative"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    </div>

                    <!-- FLOATING BADGE -->
                    <div
                        class="absolute bottom-6 left-6 bg-white rounded-xl px-5 py-3 shadow-lg flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold">
                            15+
                        </div>
                        <div class="text-sm">
                            <p class="font-semibold text-gray-900">Years Experience</p>
                            <p class="text-gray-500">Global Certification</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="relative py-20 bg-white overflow-hidden">
        <!-- DECORATIVE GRADIENT -->
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-indigo-100/40 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 -right-24 w-96 h-96 bg-blue-100/40 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-6 lg:px-12">
            <div class="grid lg:grid-cols-2 gap-14 items-center">

                <!-- LEFT : EVENT GALLERY -->
                <div class="grid grid-cols-2 gap-5">
                    <!-- IMAGE 1 -->
                    <div class="group rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition">
                        <img src="{{ asset('assets/website/img/hero.webp') }}"
                            alt="ISCEA Event 1"
                            class="w-full h-48 object-cover group-hover:scale-110 transition duration-700">
                    </div>

                    <!-- IMAGE 2 -->
                    <div class="group rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition">
                        <img src="{{ asset('assets/website/img/hero.webp') }}"
                            alt="ISCEA Event 2"
                            class="w-full h-48 object-cover group-hover:scale-110 transition duration-700">
                    </div>

                    <!-- IMAGE 3 -->
                    <div class="group rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition">
                        <img src="{{ asset('assets/website/img/hero.webp') }}"
                            alt="ISCEA Event 3"
                            class="w-full h-48 object-cover group-hover:scale-110 transition duration-700">
                    </div>

                    <!-- IMAGE 4 -->
                    <div class="group rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition">
                        <img src="{{ asset('assets/website/img/hero.webp') }}"
                            alt="ISCEA Event 4"
                            class="w-full h-48 object-cover group-hover:scale-110 transition duration-700">
                    </div>
                </div>

                <!-- RIGHT : CONTENT -->
                <div>
                    <span
                        class="inline-flex items-center px-4 py-1.5 text-sm font-semibold rounded-full bg-indigo-50 text-indigo-700 mb-5">
                        Previous Events
                    </span>

                    <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight mb-6">
                        Learning Experiences
                        <span class="text-indigo-600">That Made an Impact</span>
                    </h2>

                    <p class="text-gray-600 text-lg leading-relaxed mb-6">
                        Our previous training sessions and certification programs have brought together
                        supply chain professionals from diverse industries across Indonesia.
                    </p>

                    <!-- CTA -->
                    <div class="flex flex-wrap gap-4">
                        <a href="#gallery"
                            class="inline-flex items-center justify-center px-7 py-3 rounded-xl bg-indigo-600 text-white font-semibold shadow-md hover:bg-indigo-700 hover:shadow-lg transition">
                            View Event Gallery
                        </a>

                        <a href="#upcoming-events"
                            class="inline-flex items-center justify-center px-7 py-3 rounded-xl border border-gray-300 text-gray-700 font-semibold hover:bg-gray-100 transition">
                            Upcoming Events
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="contact" class="relative py-24 bg-gradient-to-br from-indigo-50 via-white to-blue-50 overflow-hidden">
        <!-- DECORATION -->
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-indigo-200/30 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 -right-24 w-96 h-96 bg-blue-200/30 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-6 lg:px-12">
            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <!-- LEFT CONTENT -->
                <div>
                    <span
                        class="inline-flex items-center px-4 py-1.5 rounded-full text-sm font-semibold bg-indigo-100 text-indigo-700 mb-5">
                        Contact Us
                    </span>

                    <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight mb-6">
                        Let’s Start Your
                        <span class="text-indigo-600">Learning Journey</span>
                    </h2>

                    <p class="text-gray-600 text-lg leading-relaxed mb-8">
                        Interested in our training or certification programs?
                        Leave your details and our team will contact you with
                        the right solution for your professional or corporate needs.
                    </p>

                    <!-- CONTACT INFO -->
                    <div class="space-y-5">
                        <div class="flex items-center">
                            <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-indigo-600 text-white mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5h2l3 7-1.5 1.5a11.05 11.05 0 005 5L13 16l7 3v2a2 2 0 01-2 2A18 18 0 013 5z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-900">Phone / WhatsApp</p>
                                <p class="text-gray-600">+62 812-xxxx-xxxx</p>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-indigo-600 text-white mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 12H8m0 0l4-4m-4 4l4 4" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-900">Email</p>
                                <p class="text-gray-600">info@isceaindonesia.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT FORM -->
                <div class="bg-white rounded-3xl shadow-xl p-8 lg:p-10">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">
                        Request Information
                    </h3>

                    <form class="space-y-5">
                        <!-- NAME -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                Full Name
                            </label>
                            <input type="text" placeholder="Your full name"
                                class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                        </div>

                        <!-- EMAIL -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                Email Address
                            </label>
                            <input type="email" placeholder="you@email.com"
                                class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                        </div>

                        <!-- PHONE -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                Phone / WhatsApp
                            </label>
                            <input type="text" placeholder="+62 xxx xxxx xxxx"
                                class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                        </div>

                        <!-- INTEREST -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                Program of Interest
                            </label>
                            <select
                                class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                                <option selected disabled>Select program</option>
                                <option>CSCA – Certified Supply Chain Analyst</option>
                                <option>CSCM – Certified Supply Chain Manager</option>
                                <option>CPLM – Certified Professional in Logistics Management</option>
                                <option>Corporate Training</option>
                            </select>
                        </div>

                        <!-- MESSAGE -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                Message
                            </label>
                            <textarea rows="4" placeholder="Tell us your needs"
                                class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"></textarea>
                        </div>

                        <!-- SUBMIT -->
                        <button type="submit"
                            class="w-full inline-flex items-center justify-center px-6 py-3 rounded-xl bg-indigo-600 text-white font-semibold hover:bg-indigo-700 shadow-lg hover:shadow-xl transition">
                            Send Request
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>

    @include('website.components.footer ')
</body>
</html>
