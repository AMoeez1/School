@extends('layouts.admin')

@section('content')
    <form method="POST" action="{{ route('updateAttendance') }}">
        @csrf
        <input type="hidden" name="teacher_id" value="{{ auth('teacher')->user()->id }}"> <!-- Teacher ID from the custom guard -->
        
        <x-bladewind::table>
            <x-slot name="header">
                <th>Name</th>
                <th>Date</th>
                <th>Email</th>
                <th>Status</th>
            </x-slot>
            
            @foreach ($users as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ now()->toDateString() }}</td>
                    <td>{{ $student->email }}</td>
                    <td>
                        <div class="relative inline-block text-left">
                            <label class="block text-gray-700">Status Today:</label>
                            <div class="mt-2">
                                <!-- Radio Buttons for each student -->
                                <input type="radio" name="attendance[{{ $student->id }}][status]" value="Present" id="present_{{ $student->id }}" class="mr-2">
                                <label for="present_{{ $student->id }}" class="text-gray-700">Present</label>

                                <input type="radio" name="attendance[{{ $student->id }}][status]" value="Absent" id="absent_{{ $student->id }}" class="ml-4 mr-2">
                                <label for="absent_{{ $student->id }}" class="text-gray-700">Absent</label>

                                <input type="radio" name="attendance[{{ $student->id }}][status]" value="Late" id="late_{{ $student->id }}" class="ml-4 mr-2">
                                <label for="late_{{ $student->id }}" class="text-gray-700">Late</label>

                                <!-- Hidden student_id field for each student -->
                                <input type="hidden" name="attendance[{{ $student->id }}][student_id]" value="{{ $student->id }}">
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </x-bladewind::table>

        <!-- Submit button -->
        <div class="mt-4">
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Update Attendance</button>
        </div>
    </form>
@endsection
