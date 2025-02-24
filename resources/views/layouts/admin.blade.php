<!-- resources/views/admin/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>
    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <div class="flex">
        <!-- Sidebar -->
        <div class="bg-gray-800 w-64 min-h-screen p-4">
            <h2 class="text-white text-2xl mb-6">Admin Panel</h2>
            <ul class="text-white space-y-4">
                <li><a href="{{ route('admin') }}" class="hover:bg-gray-700 px-4 py-2 rounded">Dashboard</a></li>
                @if(Auth::guard('teacher')->user() && Auth::guard('teacher')->user()->is_admin)
                    <li><a href="{{route('add_teacher_form')}}" class="hover:bg-gray-700 px-4 py-2 rounded">Add Teachers</a></li>
                @endif

                <li><a href="{{ route('manage_users') }}" class="hover:bg-gray-700 px-4 py-2 rounded">Manage Users</a></li>
                <li><a href="{{ route('attendances') }}" class="hover:bg-gray-700 px-4 py-2 rounded">Manage Attendance</a></li>
                <li><a href="{{route('logout')}}" class="hover:bg-gray-700 px-4 py-2 rounded">Logout</a></li>
            </ul>
        </div>

        <!-- Content Area -->
        <div class="flex-1 p-6">
            @yield('content')
        </div>
    </div>

</body>

</html>