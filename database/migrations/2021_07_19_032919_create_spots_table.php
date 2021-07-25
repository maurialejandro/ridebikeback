<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spots', function (Blueprint $table) {
            $table->id();
            $table->Integer('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->Integer('id_dicipline');
            $table->foreign('id_dicipline')->references('id')->on('diciplines');
            $table->String('name');
            $table->Float('lat');
            $table->Float('lng');
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
        Schema::dropIfExists('spots');
    }
}
