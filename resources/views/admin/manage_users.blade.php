@extends('layouts.admin')
@section('content')

    @foreach ($users as $user)
        <div class="grid grid-cols-4 gap-4 py-4">
            <div class="bg-gray-200 col-span-1 p-2 rounded-lg shadow-sm">
                <h5 class="mb-2 text-xl font-medium">
                    {{ $user->name }}
                </h5>
                <span class="text-sm text-gray-500 dark:text-gray-400">Visual Designer</span>
                
            </div>
        </div>
    @endforeach

@endsection
