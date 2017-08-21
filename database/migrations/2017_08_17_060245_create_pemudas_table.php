<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemudasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemudas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ketua');
            $table->string('wakil');
            $table->string('seketaris');
            $table->string('bendahara');
            $table->string('foto');
            $table->string('event');
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
        Schema::dropIfExists('pemudas');
    }
}
