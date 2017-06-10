<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('client');
            $table->string('stime');
            $table->string('etime');
            $table->string('image_path');
            $table->string('category');
            $table->integer('service_id');
            $table->integer('industry_id');
            $table->text('purpose');
            $table->text('challenge');
            $table->text('insight');
            $table->text('plan');
            $table->text('result');
            $table->text('award');
            $table->integer('user_id');
            $table->enum('featured',['yes','no']);
            $table->softdeletes();
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
        Schema::drop('cases');
    }
}
