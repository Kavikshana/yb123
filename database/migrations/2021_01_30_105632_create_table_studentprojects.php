<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableStudentprojects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentprojects', function (Blueprint $table) {
            $table->id();
            $table->string('Destination');
            $table->string('StudentID');
            $table->string('projectID');
            $table->string('Titleoftheproject');
            $table->string('Description');
            $table->string('ProjectType');
            $table->string('Technologies');
            $table->timestamps();
        });
    

        $sql = "INSERT INTO descriptions(description)\n"

        . "SELECT Description FROM studentprojects";
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studentprojects');
    }
}
