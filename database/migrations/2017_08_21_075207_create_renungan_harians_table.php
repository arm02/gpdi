<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRenunganHariansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('renungan_harians', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul');
            $table->string('ayat');
            $table->string('sumber');
            $table->string('isi');
            $table->text('sampul');
            $table->integer('id_user');
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
        Schema::dropIfExists('renungan_harians');
    }
}
