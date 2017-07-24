<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonatesTosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donates_tos', function (Blueprint $table) {
        
            $table->integer('club_id');
            $table->integer('roll_no');
            $table->integer('amount');


            $table->primary(['roll_no','club_id']);


            $table->foreign('roll_no')->references('roll_no')->on('students')->onDelete('cascade');

             $table->foreign('club_id')->references('club_id')->on('clubs')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donates_tos');
    }
}
