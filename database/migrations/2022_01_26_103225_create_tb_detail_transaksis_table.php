<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbDetailTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_detail_transaksis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_transaksi');
            $table->foreign('id_transaksi')->references('id')->on('tb_transaksis');
            $table->unsignedBigInteger('id_paket');
            $table->foreign('id_paket')->references('id')->on('tb_pakets');
            $table->double('qty');
            $table->text('keterangan');
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
        Schema::dropIfExists('tb_detail_transaksis');
    }
}
