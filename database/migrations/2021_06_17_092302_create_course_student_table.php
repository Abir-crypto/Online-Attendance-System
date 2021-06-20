<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_student', function (Blueprint $table) {
            $table->id();
            $table->integer('course_id');
            $table->integer('student_id');
            $table->boolean('registered')->default(false);
            $table->boolean('class1')->default(false)->comment('False = absent, True = present');
            $table->boolean('class2')->default(false)->comment('False = absent, True = present');
            $table->boolean('class3')->default(false)->comment('False = absent, True = present');
            $table->boolean('class4')->default(false)->comment('False = absent, True = present');
            $table->boolean('class5')->default(false)->comment('False = absent, True = present');
            $table->boolean('class6')->default(false)->comment('False = absent, True = present');
            $table->boolean('class7')->default(false)->comment('False = absent, True = present');
            $table->boolean('class8')->default(false)->comment('False = absent, True = present');
            $table->boolean('class9')->default(false)->comment('False = absent, True = present');
            $table->boolean('class10')->default(false)->comment('False = absent, True = present');
            $table->boolean('class11')->default(false)->comment('False = absent, True = present');
            $table->boolean('class12')->default(false)->comment('False = absent, True = present');
            $table->boolean('class13')->default(false)->comment('False = absent, True = present');
            $table->boolean('class14')->default(false)->comment('False = absent, True = present');
            $table->boolean('class15')->default(false)->comment('False = absent, True = present');
            $table->boolean('class16')->default(false)->comment('False = absent, True = present');
            $table->boolean('class17')->default(false)->comment('False = absent, True = present');
            $table->boolean('class18')->default(false)->comment('False = absent, True = present');
            $table->boolean('class19')->default(false)->comment('False = absent, True = present');
            $table->boolean('class20')->default(false)->comment('False = absent, True = present');
            $table->boolean('class21')->default(false)->comment('False = absent, True = present');
            $table->boolean('class22')->default(false)->comment('False = absent, True = present');
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
        Schema::dropIfExists('course_student');
    }
}
