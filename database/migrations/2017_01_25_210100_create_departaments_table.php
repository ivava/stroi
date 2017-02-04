<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departaments', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('city')->unsigned();
            $table->integer('region')->unsigned();
            $table->integer('lead')->unsigned();
            $table->integer('workman_count');
            $table->timestamps();

            $table->foreign('city')->references('id')->on('cities');
            $table->foreign('region')->references('id')->on('regions');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departaments');
    }
}
