<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Student;  // Assuming you have a Student model
use App\Models\Teacher;  // Assuming you have a Teacher model
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class StudentsController extends Controller
{

    public function portal(){
        $id = Auth::id();
        $user = User::find($id);
        $student = Attendance::where('student_id', $id)->get();

        return view('portal', ['students' => $student, 'user' => $user]);
    }
}
