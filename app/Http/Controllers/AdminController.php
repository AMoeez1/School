<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function add_teacher_form()
    {
        return view("admin.add_teacher");
    }

    public function add_teacher(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:teachers,email',
            // 'password' => 'required|string|min:8|confirmed', // confirmed if you add a confirmation field
            'contact_number' => 'required|string|max:20',
            'address' => 'required|string',
        ]);

        Teacher::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'contact_number' => $request->contact_number,
            'address' => $request->address,
        ]);

        return redirect()->route('admin.admin')->with('success', 'Teacher added successfully!');
    }

    public function attendances()
    {
        $user = User::all();
        return view('admin.attendance', ['users' => $user]);
    }

    /**
     * Update the attendance records.
     */
    public function updateAttendance(Request $request)
    {
        $request->validate([
            'attendance.*.status' => 'required|in:Present,Absent,Late',
            'attendance.*.student_id' => 'required|exists:users,id', 
            'teacher_id' => 'required|exists:teachers,id'  
        ]);

        $teacherId = auth('teacher')->user()->id;

        $teacher = Teacher::find($teacherId);
        if (!$teacher) {
            return redirect()->route('home')->with('error', 'Teacher not found');
        }

        $attendanceData = $request->input('attendance');

        foreach ($attendanceData as $data) {
            $studentId = $data['student_id'];
            $status = $data['status'];

            Attendance::updateOrCreate(
                [
                    'student_id' => $studentId,
                    'teacher_id' => $teacherId,
                    'date' => now()->toDateString(),
                ],
                [
                    'status' => $status,
                ]
            );
        }

        return redirect()->route('admin')
            ->with('success', 'Attendance updated successfully!');
    }

    public function manage_users(){
        $users = User::all();
        return view('admin.manage_users', ['users' => $users]);
    }
}
