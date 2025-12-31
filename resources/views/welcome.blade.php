<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="antialiased">
    <!-- Main Container with Soft Blue Radial Background -->
    <div class="min-h-screen w-full bg-white relative overflow-hidden">
        <!-- Soft Blue Radial Background -->
        <div
            class="absolute inset-0 z-0"
            style="
                background: #ffffff;
                background-image: radial-gradient(circle at top center, rgba(59, 130, 246, 0.5), transparent 70%);
            "
        ></div>

        <!-- Navigation Bar -->
        <nav class="relative z-20 bg-white/80 backdrop-blur-md shadow-sm">
            <div class="max-w-7xl mx-auto px-6 py-4">
                <div class="flex items-center justify-between">
                    <!-- Logo -->
                    <div class="flex items-center">
                        <a href="/" class="flex items-center space-x-2">
                            <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                                <span class="text-white font-bold text-xl">A</span>
                            </div>
                            <span class="text-xl font-bold text-gray-900">AuthDemo</span>
                        </a>
                    </div>

                    <!-- Auth Buttons -->
                    <div class="flex items-center space-x-4">
                        <a
                            href="/signin"
                            class="px-6 py-2.5 text-gray-700 font-semibold hover:text-blue-600 transition-colors"
                        >
                            Sign In
                        </a>
                        <a
                            href="/signup"
                            class="px-6 py-2.5 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-all duration-300 hover:shadow-lg hover:scale-105"
                        >
                            Sign Up
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <div class="relative z-10 max-w-7xl mx-auto px-6 py-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div class="space-y-8">
                    <div class="space-y-4">
                        <p class="text-blue-600 font-semibold text-lg uppercase tracking-wide">
                            Elevate Your Development
                        </p>
                        <h1 class="text-5xl lg:text-7xl font-bold text-gray-900 leading-tight">
                            Experience The
                            <span class="text-blue-600">Magic</span>
                            Of Laravel!
                        </h1>
                        <p class="text-xl text-gray-600 max-w-xl">
                            Build something amazing with Laravel. The PHP framework for web artisans, designed to make development a breeze.
                        </p>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a
                            href="/signup"
                            class="inline-flex items-center justify-center px-8 py-4 bg-blue-600 text-white font-semibold rounded-xl hover:bg-blue-700 transition-all duration-300 hover:shadow-xl hover:scale-105"
                        >
                            Get Started Now
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                        <a
                            href="#features"
                            class="inline-flex items-center justify-center px-8 py-4 bg-white text-blue-600 font-semibold rounded-xl border-2 border-blue-600 hover:bg-blue-50 transition-all duration-300 hover:shadow-xl hover:scale-105"
                        >
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Watch Demo
                        </a>
                    </div>

                    <!-- Stats -->
                    <div class="flex items-center space-x-8 pt-8">
                        <div class="flex -space-x-3">
                            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-400 to-blue-600 border-2 border-white"></div>
                            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-purple-400 to-purple-600 border-2 border-white"></div>
                            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-pink-400 to-pink-600 border-2 border-white"></div>
                            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-orange-400 to-orange-600 border-2 border-white"></div>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-gray-900">Join 10,000+ developers</p>
                            <p class="text-sm text-gray-600">Building amazing applications</p>
                        </div>
                    </div>
                </div>

                <!-- Right Image/Illustration -->
                <div class="relative">
                    <div class="relative bg-gradient-to-br from-blue-100 to-blue-50 rounded-3xl p-8 shadow-2xl">
                        <div class="absolute -top-4 -right-4 w-24 h-24 bg-blue-600 rounded-2xl opacity-20 blur-2xl"></div>
                        <div class="absolute -bottom-4 -left-4 w-32 h-32 bg-purple-600 rounded-2xl opacity-20 blur-2xl"></div>

                        <!-- Hero Image -->
                        <div class="relative bg-white rounded-2xl p-8 shadow-lg overflow-hidden">
                            <div class="flex items-center justify-center h-80">
                                <img
                                    src="https://i.pinimg.com/1200x/70/3c/43/703c4340446d7a139a42fa4d25925b26.jpg"
                                    alt="Hero Image"
                                    class="w-full h-full object-cover rounded-xl"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features Section -->
        <div id="features" class="relative z-10 max-w-7xl mx-auto px-6 py-20">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Why Choose Laravel?</h2>
                <p class="text-xl text-gray-600">Everything you need to build modern web applications</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border border-blue-100">
                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Fast & Modern</h3>
                    <p class="text-gray-600 leading-relaxed">Built with the latest technologies for optimal performance and developer experience.</p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border border-blue-100">
                    <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Secure</h3>
                    <p class="text-gray-600 leading-relaxed">Enterprise-grade security features to protect your application and user data.</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border border-blue-100">
                    <div class="w-14 h-14 bg-gradient-to-br from-pink-500 to-pink-600 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Customizable</h3>
                    <p class="text-gray-600 leading-relaxed">Flexible and easy to customize to fit your specific project requirements.</p>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="relative z-10 bg-gray-900 text-white mt-20">
            <div class="max-w-7xl mx-auto px-6 py-12">
                <div class="text-center">
                    <p class="text-gray-400">&copy; 2025 LaravelApp. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
