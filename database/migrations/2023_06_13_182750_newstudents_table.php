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
        Schema::create('newstudents', function (Blueprint $table) {
        $table->id();
        $table->string('student_fname');
        $table->string('student_mname')->nullable();
        $table->string('student_lname');
        $table->string('student_email');
        $table->string('student_tel');
        $table->string('student_gender');
        $table->date('student_dob');
        $table->string('application_level');
        $table->string('guardian_name'); // Ensure this line is present
        $table->string('guardian_tel');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('newstudents');
    }
};
