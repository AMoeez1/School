@extends('layouts.pages')
@section('content')
    <!-- Hero Section -->
    <section class="bg-blue-800 text-white text-center py-20" id="home">
        <div class="max-w-2xl mx-auto">
            <h2 class="text-4xl font-extrabold">Welcome to the School Management System</h2>
            <p class="mt-4 text-lg">Empowering schools to manage students, staff, and data efficiently.</p>
            <a href="#services"
                class="mt-6 inline-block bg-yellow-500 text-blue-800 px-8 py-3 rounded-full hover:bg-yellow-600">Explore
                Services</a>
                <!-- <x-bladewind::button>Save User</x-bladewind::button> -->
        </div>
    </section>

    <!-- About Section -->
    <section class="py-20" id="about">
        <div class="max-w-7xl mx-auto text-center px-6">
            <h3 class="text-3xl font-bold text-blue-800">About Us</h3>
            <p class="mt-4 text-lg text-gray-700">We provide a comprehensive platform for managing school operations such as
                student records, timetable management, communication between staff and parents, and much more.</p>
        </div>
    </section>

    <!-- Services Section -->
    <section class="bg-gray-50 py-20" id="services">
        <div class="max-w-7xl mx-auto text-center px-6">
            <h3 class="text-3xl font-bold text-blue-800">Our Services</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 mt-10">
                <div class="bg-white shadow-lg p-6 rounded-lg">
                    <h4 class="text-xl font-semibold text-blue-700">Student Management</h4>
                    <p class="mt-4 text-gray-600">Manage student records, attendance, and grades in one place.</p>
                </div>
                <div class="bg-white shadow-lg p-6 rounded-lg">
                    <h4 class="text-xl font-semibold text-blue-700">Timetable Management</h4>
                    <p class="mt-4 text-gray-600">Efficiently schedule and manage class timings for teachers and students.</p>
                </div>
                <div class="bg-white shadow-lg p-6 rounded-lg">
                    <h4 class="text-xl font-semibold text-blue-700">Staff Management</h4>
                    <p class="mt-4 text-gray-600">Track staff schedules, payroll, and performance.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-20" id="contact">
        <div class="max-w-7xl mx-auto text-center px-6">
            <h3 class="text-3xl font-bold text-blue-800">Contact Us</h3>
            <p class="mt-4 text-lg text-gray-700">Have any questions? Get in touch with us!</p>
            <div class="mt-8">
                <a href="mailto:info@schoolmanagement.com"
                    class="bg-yellow-500 text-blue-800 px-6 py-3 rounded-full hover:bg-yellow-600">Email Us</a>
            </div>
        </div>
    </section>

@endsection