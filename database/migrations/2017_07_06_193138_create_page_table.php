<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('short_desc');

            $table->string('long_desc');
            $table->string('long_desc_raw');
            $table->string('logo');
            $table->string('image1');
            $table->enum('publish',['yes','no']);
            $table->string('category');
            $table->integer('user_id')->unsigned();
            $table->timestamps();
            $table->softdeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('page');
    }
}
