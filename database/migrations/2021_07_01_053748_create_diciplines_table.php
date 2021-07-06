<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiciplinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diciplines', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->String('name');
            $table->String('description');
            $table->String('img');
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
        Schema::dropIfExists('diciplines');
    }
}
