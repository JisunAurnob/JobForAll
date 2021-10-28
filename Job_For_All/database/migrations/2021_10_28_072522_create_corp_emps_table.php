<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorpEmpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corp_emps', function (Blueprint $table) {
            $table->bigIncrements('Corporate_id');
            $table->string('CompanyName',150);
            $table->string('CompanyAddress',150);
            $table->string('TradeLicense',150);
            $table->string('Email',100);
            $table->string('Phone',20);
            $table->string('Username',50);
            $table->string('Password',100);
            $table->string('Website',150);
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
        Schema::dropIfExists('corp_emps');
    }
}
