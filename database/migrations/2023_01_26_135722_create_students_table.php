<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('profile_image')->nullable();
            $table->unsignedBigInteger('gender_id');
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->string('nationality')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('grade_ten_school')->nullable();
            $table->string('grade_ten_marks')->nullable();
            $table->string('grade_ten_plus_two_inst')->nullable();
            $table->string('grade_ten_plus_two_marks')->nullable();
            $table->string('bachelor_inst')->nullable();
            $table->string('bachelor_marks')->nullable();
            $table->string('master_inst')->nullable();
            $table->string('master_marks')->nullable();
            $table->unsignedBigInteger('contact_mode_id');
            $table->foreign('gender_id')->references('id')->on('gender')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('contact_mode_id')->references('id')->on('contact_mode')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
