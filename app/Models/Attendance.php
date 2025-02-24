<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    // Specify the table if it's not automatically inferred
    protected $table = 'attendances';

    protected $fillable = ['student_id', 'teacher_id', 'date', 'status'];

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    /**
     * The teacher who marked this attendance record.
     */
    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }

    /**
     * Get the formatted attendance status.
     */
    public function getStatusAttribute($value)
    {
        return ucfirst(strtolower($value));  
    }
}
