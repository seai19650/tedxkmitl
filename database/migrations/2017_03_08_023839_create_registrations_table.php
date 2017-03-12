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
            $table->string('mobile');
            $table->string('email');
            $table->string('gender');
            $table->string('occupation');
            $table->string('ticket_type');
            $table->string('token');
            $table->boolean('is_approved')->default(false);
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
