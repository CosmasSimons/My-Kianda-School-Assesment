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
        Schema::create('student_profiles', function (Blueprint $table) {
            $table->id();
            //foreighn key
            $table->unsignedBigInteger('user_id');
            
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('dob')->nullable();
            $table->string('address')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->string('parent_name')->nullable();
            $table->string('parent_phone')->nullable();
            $table->string('parent_email')->nullable();
            $table->string('image')->nullable();
            $table->json('class')->nullable();
            $table->json('subject1')->nullable();
            $table->json('subject2')->nullable();
            $table->json('subject3')->nullable();
            $table->json('subject4')->nullable();
            $table->json('subject5')->nullable();
            $table->json('subject6')->nullable();
            $table->json('subject7')->nullable();
            $table->json('subject8')->nullable();
            $table->json('subject9')->nullable();
            $table->json('subject10')->nullable();
            $table->json('subject11')->nullable();
            $table->json('subject12')->nullable();

            $table->timestamps();

            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_profiles');
    }
};
