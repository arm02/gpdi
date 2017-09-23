<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRemajasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remajas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ketua');
            $table->string('wakil');
            $table->string('seketaris');
            $table->string('bendahara');
            $table->string('seksiacara');
            $table->string('seksimusik');
            $table->string('seksikonselingdoa');
            $table->string('motto');
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
        Schema::dropIfExists('remajas');
    }
}
