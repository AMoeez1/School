<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')</title>
    <link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans">
    <!-- Header -->
    <header class="bg-blue-600 text-white">
        <div class="max-w-7xl mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <h1 class="text-3xl font-bold"><a href="{{ route('home') }}"> School Management</a></h1>
                <nav>
                    <ul class="flex space-x-6">
                        <li><a href="{{ route('home') }}" class="hover:text-yellow-400">Home</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-yellow-400">About</a></li>
                        <li><a href="{{ route('service') }}" class="hover:text-yellow-400">Services</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-yellow-400">Contact</a></li>
                        @if (!auth()->user())
                            <!-- User is not logged in -->
                            <li><a href="{{ route('register_form') }}" class="hover:text-yellow-400">Register</a></li>
                        @elseif(auth()->user() && auth()->user()->is_admin) 
                            <!-- User is logged in and is an admin -->
                            <li><a href="{{ route('admin') }}" class="hover:text-yellow-400">Admin</a></li>
                        @elseif(auth()->user()) 
                            <!-- User is logged in as a regular user -->
                            <li><a href="{{ route('portal') }}" class="hover:text-yellow-400">Portal Student</a>
                            </li>
                        @endif


                        <li><a href="{{ route('logout') }}" class="hover:text-yellow-400">Logout</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    @yield('content')

    <!-- Footer -->
    <footer class="bg-blue-600 text-white py-4">
        <div class="max-w-7xl mx-auto text-center">
            <p>&copy; 2025 School Management System. All Rights Reserved.</p>
        </div>
    </footer>

</body>

</html>