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
            $table->string('Operationalnumber');
           
            $table->string('OperationalunitCost');
            $table->string('Operationalsource');
            $table->string('toolsCatagory');
            $table->string('toolsNumber');
            $table->string('toolsUnitCost');
            $table->string('toolsSource');
            $table->string('productCatagory');
            $table->string('productUnit');
            $table->string('productNumber');
            $table->string('productUnitCost');
            $table->text('productGoal');
            $table->string('workerType');
            $table->string('workerNumber');
            $table->text('notes');
            $table->string('workercost');
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
