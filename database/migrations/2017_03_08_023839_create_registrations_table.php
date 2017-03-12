<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('th_firstname')->nullable();
            $table->string('th_lastname')->nullable();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('nickname');
            $table->string('age');
            $table->string('phone');
            $table->string('email');
            $table->string('occupation');
            $table->string('ticket');
            $table->string('token');
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
        Schema::dropIfExists('registrations');
    }
}
