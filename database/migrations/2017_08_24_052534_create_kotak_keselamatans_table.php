<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKotakKeselamatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kotak_keselamatans', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nama');
            $table->string('email');
            $table->integer('notelp');
            $table->string('informasi');
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
        Schema::dropIfExists('kotak_keselamatans');
    }
}
