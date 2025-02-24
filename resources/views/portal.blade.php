@extends('layouts.pages')
@section('content')
<x-bladewind::table>
            <x-slot name="header">
                <th>Name</th>
                <th>Date</th>
                <th>Email</th>
                <th>Status</th>
            </x-slot>
            
            @foreach ($students as $student)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ now()->toDateString() }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        {{ $student->status }}
                    </td>
                </tr>
            @endforeach
        </x-bladewind::table>
@endsection