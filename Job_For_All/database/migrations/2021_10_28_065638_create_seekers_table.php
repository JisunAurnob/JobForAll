<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeekersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seekers', function (Blueprint $table) {
            $table->bigIncrements('Seeker_id');
            $table->string('Name',150);
            $table->string('Email',100);
            $table->string('Phone',20);
            $table->string('Username',50);
            $table->string('Password',100);
            $table->string('Dob',15);
            $table->string('Gender',6);
            $table->string('NID',50);
            $table->string('Picture',300);
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
        Schema::dropIfExists('seekers');
    }
}
