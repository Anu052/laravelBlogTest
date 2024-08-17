<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/create.css">
    <link rel="stylesheet" href="/index.css">
    <link rel="stylesheet" href="/home.css">
    <link rel="stylesheet" href="/posts.css">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">

        <!-- Navigation Links -->
        <nav class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between">
                <div>
                    <a href="{{ route('home') }}" class="text-gray-700 dark:text-gray-300 px-3">Home</a>
                    <a href="{{ route('posts.create') }}" class="text-gray-700 dark:text-gray-300 px-3">Create Post</a>
                    <a href="{{ route('posts.index') }}" class="text-gray-700 dark:text-gray-300 px-3">My Posts</a>
                </div>
                <div>
                    <!-- Auth Links -->
                    @auth
                        <a href="{{ route('dashboard') }}" class="text-gray-700 dark:text-gray-300 px-3">Dashboard</a>
                        <a href="{{ route('profile') }}" class="text-gray-700 dark:text-gray-300 px-3">Profile</a>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="text-gray-700 dark:text-gray-300 px-3">Logout</button>
                        </form>
                        
                    @else
                        <a href="{{ route('login') }}" class="text-gray-700 dark:text-gray-300 px-3">Login</a>
                        <a href="{{ route('register') }}" class="text-gray-700 dark:text-gray-300 px-3">Register</a>
                    @endauth
                </div>
            </div>
        </nav>

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>
    </div>
</body>

</html>
