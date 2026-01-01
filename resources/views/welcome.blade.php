<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TaskFlow - Transform Your Productivity</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        .float-animation {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes pulse-glow {
            0%, 100% { opacity: 0.5; }
            50% { opacity: 0.8; }
        }

        .pulse-glow {
            animation: pulse-glow 3s ease-in-out infinite;
        }
    </style>
</head>
<body class="antialiased" style="background: #000000;">
    <!-- Main Container with Dark Background -->
    <div class="min-h-screen w-full relative" style="background: #000000;">
        <!-- Dark Noise Colored Background -->
        <div
            class="absolute inset-0 z-0"
            style="
                background: #000000;
                background-image:
                    radial-gradient(circle at 1px 1px, rgba(139, 92, 246, 0.2) 1px, transparent 0),
                    radial-gradient(circle at 1px 1px, rgba(59, 130, 246, 0.18) 1px, transparent 0),
                    radial-gradient(circle at 1px 1px, rgba(236, 72, 153, 0.15) 1px, transparent 0);
                background-size: 20px 20px, 30px 30px, 25px 25px;
                background-position: 0 0, 10px 10px, 15px 5px;
            "
        ></div>

        <!-- Gradient Overlays for Depth -->
        <div class="absolute inset-0 z-0">
            <div class="absolute top-0 left-1/4 w-96 h-96 rounded-full blur-3xl pulse-glow" style="background: rgba(59, 59, 227, 0.15);"></div>
            <div class="absolute bottom-1/4 right-1/4 w-96 h-96 rounded-full blur-3xl pulse-glow" style="background: rgba(59, 59, 227, 0.12); animation-delay: 1s;"></div>
        </div>

        <!-- Navigation Bar -->
        <nav class="relative z-20 backdrop-blur-xl border-b" style="background: rgba(0, 0, 0, 0.4); border-color: rgba(255, 255, 255, 0.1);">
            <div class="max-w-7xl mx-auto px-6 py-4">
                <div class="flex items-center justify-between">
                    <!-- Logo -->
                    <div class="flex items-center">
                        <a href="/" class="flex items-center space-x-3">
                            <div class="w-10 h-10 rounded-xl flex items-center justify-center shadow-lg" style="background: #3b3be3; box-shadow: 0 10px 15px -3px rgba(59, 59, 227, 0.5);">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                                </svg>
                            </div>
                            <span class="text-2xl font-bold text-white">TaskFlow</span>
                        </a>
                    </div>

                    <!-- Auth Buttons -->
                    <div class="flex items-center space-x-4">
                        <a
                            href="/signin"
                            class="px-6 py-2.5 font-semibold transition-all duration-300" style="color: rgba(255, 255, 255, 0.7);"
                            onmouseover="this.style.color='#ffffff'"
                            onmouseout="this.style.color='rgba(255, 255, 255, 0.7)'"
                        >
                            Sign In
                        </a>
                        <a
                            href="/signup"
                            class="px-6 py-2.5 text-white font-semibold rounded-xl transition-all duration-300 hover:scale-105"
                            style="background: #3b3be3; box-shadow: 0 20px 25px -5px rgba(59, 59, 227, 0.5);"
                            onmouseover="this.style.boxShadow='0 25px 50px -12px rgba(59, 59, 227, 0.5)'"
                            onmouseout="this.style.boxShadow='0 20px 25px -5px rgba(59, 59, 227, 0.5)'"
                        >
                            Get Started Free
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
                    <div class="space-y-6">
                        <div class="inline-flex items-center space-x-2 px-4 py-2 rounded-full" style="background: rgba(59, 59, 227, 0.1); border: 1px solid rgba(59, 59, 227, 0.2);">
                            <span class="w-2 h-2 rounded-full animate-pulse" style="background: #3b3be3;"></span>
                            <p class="font-semibold text-sm uppercase tracking-wide" style="color: #3b3be3;">
                                Master Your Tasks
                            </p>
                        </div>
                        <h1 class="text-6xl lg:text-7xl font-black text-white leading-tight">
                            Organize Your
                            <span class="block" style="color: #3b3be3;">TaskFlow</span>
                            Productively.
                        </h1>
                        <p class="text-xl max-w-xl leading-relaxed" style="color: rgba(255, 255, 255, 0.6);">
                            The ultimate task management solution that adapts to your workflow. Capture, organize, and conquer your to-dos with elegant simplicity.
                        </p>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a
                            href="/signup"
                            class="group inline-flex items-center justify-center px-8 py-4 text-white font-bold rounded-xl transition-all duration-300 hover:scale-105"
                            style="background: #3b3be3; box-shadow: 0 20px 25px -5px rgba(59, 59, 227, 0.5);"
                            onmouseover="this.style.boxShadow='0 25px 50px -12px rgba(59, 59, 227, 0.5)'"
                            onmouseout="this.style.boxShadow='0 20px 25px -5px rgba(59, 59, 227, 0.5)'"
                        >
                            Get Signed Up
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                        <a
                            href="#features"
                            class="group inline-flex items-center justify-center px-8 py-4 text-white font-semibold rounded-xl border-2 transition-all duration-300 backdrop-blur-sm"
                            style="background: rgba(255, 255, 255, 0.05); border-color: rgba(255, 255, 255, 0.1);"
                            onmouseover="this.style.background='rgba(255, 255, 255, 0.1)'; this.style.borderColor='rgba(59, 59, 227, 0.5)'"
                            onmouseout="this.style.background='rgba(255, 255, 255, 0.05)'; this.style.borderColor='rgba(255, 255, 255, 0.1)'"
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
                        <div>
                            <p class="text-sm font-bold text-white">50,000+ productive users</p>
                            <p class="text-sm" style="color: rgba(255, 255, 255, 0.6);">Completing 1M+ tasks daily</p>
                        </div>
                    </div>
                </div>

                <!-- Right Illustration/Preview -->
                <div class="relative float-animation">
                    <img
                        src="{{ asset('images/task-preview.png') }}"
                        alt="Task Preview"
                        class="w-full h-auto rounded-3xl shadow-2xl"
                        style="max-width: 600px;"
                    />
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="relative z-10 backdrop-blur-xl border-t mt-20" style="background: rgba(0, 0, 0, 0.4); border-color: rgba(255, 255, 255, 0.1);">
            <div class="max-w-7xl mx-auto px-6 py-12">
                <div class="text-center">
                    <p style="color: rgba(255, 255, 255, 0.6);">&copy; 2026 TaskFlow. Elevate your productivity, one task at a time.</p>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
