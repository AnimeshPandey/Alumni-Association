<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->integer('roll_no');
            $table->string('name');
            $table->ENUM('gender',['M','F']);
            $table->string('specialisation');
             $table->string('fb');
              $table->string('linkedIn');
               $table->integer('phone_num');

            $table->primary(['roll_no']);



            
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
