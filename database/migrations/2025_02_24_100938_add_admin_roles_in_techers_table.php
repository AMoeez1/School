<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('teachers', function (Blueprint $table) {
            $table->boolean('is_admin')->default(false)->change();
            $table->boolean('is_sub_admin')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('techers', function (Blueprint $table) {
            $table->dropColumn('is_admin');
            $table->dropColumn('is_sub_admin');
        });
    }
};
