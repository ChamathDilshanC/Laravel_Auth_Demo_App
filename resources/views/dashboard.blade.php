<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="antialiased bg-gray-50">
    <!-- Navigation Bar -->
    <nav class="bg-white shadow-sm border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <a href="/dashboard" class="flex items-center space-x-2">
                        <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                            <span class="text-white font-bold text-xl">T</span>
                        </div>
                        <span class="text-xl font-bold text-gray-900">TodoApp</span>
                    </a>
                    <div class="flex items-center space-x-1 ml-4">
                        <a href="/dashboard" class="px-4 py-2 text-blue-600 font-semibold bg-blue-50 rounded-lg">
                            Dashboard
                        </a>
                        <a href="/todos" class="px-4 py-2 text-gray-600 hover:text-gray-900 rounded-lg hover:bg-gray-100 transition-all">
                            Todos
                        </a>
                    </div>
                </div>

                <!-- User Menu -->
                <div class="flex items-center space-x-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                            <span class="text-blue-600 font-bold text-sm">
                                {{ strtoupper(substr(Session::get('user_name', 'U'), 0, 1)) }}
                            </span>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-gray-900">{{ Session::get('user_name', 'User') }}</p>
                            <p class="text-xs text-gray-500">{{ Session::get('user_email', '') }}</p>
                        </div>
                    </div>
                    <a
                        href="/logout"
                        class="px-4 py-2 bg-red-600 text-white text-sm font-semibold rounded-lg hover:bg-red-700 transition-all duration-300"
                    >
                        Logout
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-6 py-12">
        <!-- Welcome Section -->
        @if(session('success'))
            <div class="mb-6 bg-green-50 border border-green-200 text-green-800 px-6 py-4 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        <div class="mb-8">
            <h1 class="text-4xl font-bold text-gray-900 mb-2">
                Welcome, {{ Session::get('user_name', 'User') }}! 👋
            </h1>
            <p class="text-xl text-gray-600">
                This is your dashboard. You're successfully logged in!
            </p>
        </div>

        <!-- Dashboard Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <!-- Card 1 -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-lg transition-all">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-1">Profile</h3>
                <p class="text-gray-600 text-sm">View and edit your profile information</p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-lg transition-all">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-1">Settings</h3>
                <p class="text-gray-600 text-sm">Manage your account settings</p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-lg transition-all">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-1">Activity</h3>
                <p class="text-gray-600 text-sm">View your recent activity</p>
            </div>
        </div>

        <!-- Delete Account Section - Account එක delete කරන්න form එකක් use කරනවා -->
        <div class="mb-4">
            <form action="{{ route('delete-user') }}" method="POST" onsubmit="return confirm('Are you sure you want to delete your account? This will permanently delete all your todos as well. This action cannot be undone!');">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-4 py-2 bg-red-600 text-white text-sm font-semibold rounded-lg hover:bg-red-700 transition-all duration-300">
                    Delete Account {{ Session::get('user_name', 'User') }}
                </button>
            </form>
        </div>

        <!-- Info Section -->
        <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-xl p-8 border border-blue-100">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">Account Information</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <p class="text-sm font-semibold text-gray-600 mb-1">Name</p>
                    <p class="text-lg text-gray-900">{{ Session::get('user_name', 'N/A') }}</p>
                </div>
                <div>
                    <p class="text-sm font-semibold text-gray-600 mb-1">Email</p>
                    <p class="text-lg text-gray-900">{{ Session::get('user_email', 'N/A') }}</p>
                </div>
                <div>
                    <p class="text-sm font-semibold text-gray-600 mb-1">User ID</p>
                    <p class="text-lg text-gray-900">#{{ Session::get('user_id', 'N/A') }}</p>
                </div>
                <div>
                    <p class="text-sm font-semibold text-gray-600 mb-1">Status</p>
                    <div class="flex items-center space-x-2">
                        <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                        <p class="text-lg text-gray-900">Active</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
