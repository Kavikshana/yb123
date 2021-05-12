<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndustrialistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('industrialists', function (Blueprint $table) {
            $table->id();
            $table->String('Photo')->nullable();
            $table->String('CompanyPersonalEmailID')->unique();
            $table->String('NameWithInitials');
            $table->String('Designation')->nullable();
            $table->String('LinkedIn')->unique()->nullable();
            $table->String('FieldOfInterests')->nullable();
            $table->Integer('ContactNumber')->nullable();
            $table->String('CompanyName')->nullable();
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
        Schema::dropIfExists('industrialists');
    }
}
