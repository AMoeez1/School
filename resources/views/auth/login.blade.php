<!-- resources/views/auth/login.blade.php -->
@extends('layouts.auth')

@section('content')
    <div class="flex justify-center items-center h-screen bg-gray-100">
        <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                @if($errors->any())
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                @endif
                <div class="mb-4">
                    <x-bladewind::input name="email" label="Email" required="true" />
                </div>

                <div class="mb-4">
                    <x-bladewind::input type="password" label="Password" name="password" viewable="true" required="true" />
                </div>

                <div class="mb-4 flex justify-between items-center">
                    <label for="remember_me" class="flex items-center">
                        <input type="checkbox" name="remember" id="remember_me" class="mr-2">
                        Remember me
                    </label>

                    <a href="" class="text-blue-600 hover:text-blue-800">Forgot Password?</a>
                </div>

                <div class="mb-4">
                    <button type="submit" class="w-full py-3 bg-blue-600 text-white rounded-md">Login</button>
                </div>

                <div class="text-center">
                    <p>Don't have an account? <a href="{{ route('register') }}" class="text-blue-600 hover:text-blue-800">Register</a></p>
                </div>
            </form>
        </div>
    </div>
@endsection