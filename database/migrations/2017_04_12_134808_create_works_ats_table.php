<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorksAtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works_ats', function (Blueprint $table) {
            
            $table->integer('emp_id');
            $table->integer('roll_no');
            $table->char('position');
             

             $table->primary(['roll_no','emp_id']);


            $table->foreign('roll_no')->references('roll_no')->on('students')->onDelete('cascade');
             $table->foreign('emp_id')->references('emp_id')->on('employees')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('works_ats');
    }
}
