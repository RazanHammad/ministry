<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeasabilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feasabilities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('project_id');
            $table->unsignedBigInteger('user_id');
            $table->string('Operationalcatagory');
            $table->string('Operationalunit');
            $table->integer('Operationalnumber');
           
            $table->float('OperationalunitCost');
            $table->string('Operationalsource');
            $table->string('toolsCatagory');
            $table->integer('toolsNumber');
            $table->float('toolsUnitCost');
            $table->string('toolsSource');
            $table->string('productCatagory');
            $table->string('productUnit');
            $table->integer('productNumber');
            $table->float('productUnitCost');
            $table->text('productGoal');
            $table->string('workerType');
            $table->integer('workerNumber');
            $table->text('notes');
            $table->float('workercost');
            $table->foreign('user_id')->references('id')->on('users')

                ->onDelete('cascade');
                $table->foreign('project_id')->references('id')->on('projects')

                ->onDelete('cascade');
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
        Schema::dropIfExists('feasabilities');
    }
}
