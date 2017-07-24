<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsOnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts_ons', function (Blueprint $table) {
            
            $table->integer('roll_no');
            $table->integer('post_id');
            $table->timestamps('time');

             $table->primary(['roll_no','post_id']);


            $table->foreign('roll_no')->references('roll_no')->on('students')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts_ons');
    }
}
