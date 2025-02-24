<!-- resources/views/home.blade.php -->
@extends('layouts.admin')

@section('content')
    <div class="text-center mt-12">
        <h1 class="text-4xl font-bold text-gray-800">Welcome to Our Homepage</h1>
        <p class="mt-4 text-xl text-gray-600">We are glad to have you here. Explore our site and discover amazing features.</p>
        
        <!-- Example Section -->
        <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 shadow-lg rounded-lg">
                <h3 class="text-2xl font-semibold">Our Services</h3>
                <p class="mt-4 text-gray-500">Explore the wide variety of services we offer to make your experience even better.</p>
            </div>
            <div class="bg-white p-6 shadow-lg rounded-lg">
                <h3 class="text-2xl font-semibold">About Us</h3>
                <p class="mt-4 text-gray-500">Learn more about our mission, values, and the team behind the platform.</p>
            </div>
            <div class="bg-white p-6 shadow-lg rounded-lg">
                <h3 class="text-2xl font-semibold">Contact Us</h3>
                <p class="mt-4 text-gray-500">Have questions? Get in touch with our support team for assistance.</p>
            </div>
        </div>
    </div>
@endsection
