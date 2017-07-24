<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudiesAtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studies_ats', function (Blueprint $table) {
        
            $table->integer('roll_no');
            $table->integer('ins_id');
            $table->char('programme');
            $table->char('branch');


             $table->primary(['roll_no','ins_id','programme']);

             $table->foreign('roll_no')->references('roll_no')->on('students')->onDelete('cascade');

             $table->foreign('ins_id')->references('insti_id')->on('institutes')->onDelete('cascade');
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studies_ats');
    }
}
