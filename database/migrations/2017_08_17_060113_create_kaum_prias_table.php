<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKaumPriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kaum_prias', function (Blueprint $table) {
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
        Schema::dropIfExists('kaum_prias');
    }
}
