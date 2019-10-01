<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('projectName');
            $table->string('projectField');
            $table->string('projectType');
            $table->string('projectTitle');
            $table->text('projectDetails');
            $table->text('projectNeeds');
            $table->text('projectReason');
            $table->string('projetStatus');
            $table->integer('projectNoPerson');
            $table->date('projectStartDate');
            $table->integer('projectCost');
            $table->integer('projectThingsCost');
             $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('projects');
    }
}
