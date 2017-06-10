<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailcampaingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emailcampaing', function (Blueprint $table) {
            $table->increments('id');
            $table->string('receivers');
            $table->string('subject');
            $table->string('from_email');
            $table->integer('user_id');
            $table->enum('status',['success','failed','pending']);
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
        Schema::drop('emailcampaing');
    }
}
