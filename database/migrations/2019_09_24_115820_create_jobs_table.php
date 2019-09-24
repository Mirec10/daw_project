<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_sk', 255);
            $table->string('name_de', 255)->nullable();
            $table->text('description_sk')->nullable();
            $table->text('description_de')->nullable();
            $table->text('offer_sk')->nullable();
            $table->text('offer_de')->nullable();
            $table->text('requirements_sk')->nullable();
            $table->text('requirements_de')->nullable();
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
        Schema::dropIfExists('jobs');
    }
}
