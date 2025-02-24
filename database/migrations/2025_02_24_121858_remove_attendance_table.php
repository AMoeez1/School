<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::dropIfExists('attendances');
    }

    public function down()
    {
        // This is just in case you need to rollback the migration
        // If you want to recreate the table during rollback
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('teacher_id');
            $table->date('date');
            $table->string('status')->default('Present');
            $table->timestamps();
        });
    }
};
