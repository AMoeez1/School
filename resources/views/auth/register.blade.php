<!-- resources/views/auth/register.blade.php -->
@extends('layouts.auth')

@section('content')
    <div class="flex justify-center items-center h-screen bg-gray-100">
        <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-6 text-center">Register</h2>
            @if($errors->any())
            @foreach ($errors->all() as $error)
            {{ $error }}
            @endforeach
            @endif
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <x-bladewind::input name="name" label="Full Name" required="true" />
                </div>

                <div class="mb-4">
                    <x-bladewind::input name="email" label="Email" required="true" />
                </div>

                <div class="mb-4">
                    <x-bladewind::input type="password" label="Password" name="password" viewable="true" required="true" />
                </div>

                <div class="mb-4">
                    <x-bladewind::input type="password" label="Confrim Password" name="confrim_password" viewable="true" required="true" />
                </div>
                <div class="mb-4">
                    <x-bladewind::input name="contact" label="Contact Number" required="true" />
                </div>
                <div class="mb-4">
                    <x-bladewind::textarea name="address" label="Address" required="true" />
                </div>
                <input type="file" name="profile_img">
                <div class="mb-4">
                    <button type="submit" class="w-full py-3 bg-blue-600 text-white rounded-md">Register</button>
                </div>

                <div class="text-center">
                    <p>Already have an account? <a href="{{ route('register_form') }}"
                            class="text-blue-600 hover:text-blue-800">Login</a></p>
                </div>
            </form>
        </div>
    </div>
@endsection