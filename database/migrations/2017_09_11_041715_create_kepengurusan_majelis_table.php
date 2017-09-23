<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKepengurusanMajelisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kepengurusan_majelis', function (Blueprint $table) {

            $table->increments('id');
            $table->string('gembala');
            $table->string('wakilgembala');
            $table->string('seketaris1');
            $table->string('seketaris2');
            $table->string('bendahara1');
            $table->string('bendahara2');
            $table->string('tataibadah');
            $table->string('wakiltataibadah');
            $table->string('rumahtangga');
            $table->string('wakilrumahtangga');
            $table->string('pengembangan');
            $table->string('wakilpengembangan');
            $table->string('diakonia');
            $table->string('wakildiakonia');
            $table->string('konseling');
            $table->string('wakilkonseling');
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
        Schema::dropIfExists('kepengurusan_majelis');
    }
}