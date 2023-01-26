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
            $table->string('name',255);
            $table->string('profile_image')->nullable();
            $table->integer('gender')->nullable();
            $table->string('phone',15)->nullable();
            $table->string('email')->unique();
            $table->string('nationality')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('grade_ten')->nullable();
            $table->string('grade_twelve')->nullable();
            $table->string('grade_bachelor')->nullable();
            $table->string('grade_master')->nullable();
            $table->string('contact_mode')->nullable();
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
