<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
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
            $table->String('StudentID')->nullable();
            $table->string('photo')->nullable();
            $table->Text('FirstName');
            $table->Text('LastName');
            $table->Text('Gender')->nullable();
            $table->Date('DateOfBirth')->nullable();
            $table->String('HomeAddress')->nullable();
            $table->String('EmailID')->unique();
            $table->String('LinkedIn')->unique()->nullable();
            $table->Integer('ContactNumber')->nullable();
            $table->String('YearOfStudy')->nullable();
            $table->Text('StudyProgramme')->nullable();
            $table->Text('SubjectsOffered')->nullable();
            

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
}
