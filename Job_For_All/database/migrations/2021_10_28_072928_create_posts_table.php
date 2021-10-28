<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('Post_id');
            $table->string('Post_Title',150);
            $table->string('Post_Description',300);
            $table->string('Job_Requirement',300);
            $table->string('Responsibilities',3000);
            $table->string('Salary',50);
            $table->string('Vacancy',50);
            $table->string('Employment_Status',70);
            $table->string('Workplace',50);
            $table->string('Compensation',200);
            $table->string('Job_Location',200);
            $table->string('Deadline',50);
            $table->string('Posted_By',50);
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
        Schema::dropIfExists('posts');
    }
}
