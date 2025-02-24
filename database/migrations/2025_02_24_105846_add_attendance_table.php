<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if(!schema::hasTable("attendances")){
            Schema::create('attendances', function (Blueprint $table) {
                $table->id(); // Auto-increment ID for the attendance table
    
                // Ensure student_id is unsigned big integer and set a foreign key constraint
                $table->unsignedBigInteger('student_id');
                $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
    
                // Ensure teacher_id is unsigned big integer and set a foreign key constraint
                $table->unsignedBigInteger('teacher_id');
                $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');
    
                // Attendance date and status
                $table->date('date');
                $table->enum('status', ['Present', 'Absent', 'Late'])->default('Present');
    
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        if(schema::hasTable('attendances')){
            Schema::dropIfExists('attendances');
        }
    }
}

?>