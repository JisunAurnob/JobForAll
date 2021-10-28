<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFEmpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('f_emps', function (Blueprint $table) {
            $table->bigIncrements('Freelance_id');
            $table->string('Name',150);
            $table->string('Email',100);
            $table->string('Phone',20);
            $table->string('Username',50);
            $table->string('Password',100);
            $table->string('Address',150);
            $table->string('JobType',50);
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
        Schema::dropIfExists('f_emps');
    }
}
