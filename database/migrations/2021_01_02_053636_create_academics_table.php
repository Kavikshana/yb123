<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academics', function (Blueprint $table) {
            $table->id();
            $table->String('EmployeeID')->unique()->nullable();
            $table->String('Photo')->nullable();
            $table->Text('Title')->nullable();
            $table->Text('FirstName');
            $table->Text('LastName');
            $table->Text('Gender')->nullable();
            $table->Date('DateOfBirth')->nullable();
            $table->String('Designation')->nullable();
            $table->Text('AdminRole')->nullable();
            $table->String('EmailID')->unique();
            $table->String('LinkedIn')->unique()->nullable();
            $table->Integer('ContactNumber')->nullable();
            $table->Text('Faculty')->nullable();
            $table->Text('Department')->nullable();
            $table->String('OfficialWebsite')->nullable();
            $table->Text('ResearchInterest')->nullable();
            $table->Text('FieldOfSpecialization')->nullable();
            $table->String('ResearchID')->nullable();

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
        Schema::dropIfExists('academics');
    }
}
