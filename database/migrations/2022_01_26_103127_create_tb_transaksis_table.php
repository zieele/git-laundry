<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_transaksis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_outlet');
            $table->foreign('id_outlet')->references('id')->on('tb_outlets');
            $table->string('kode_invoice', 100);
            $table->unsignedBigInteger('id_member');
            $table->foreign('id_member')->references('id')->on('tb_members');
            $table->dateTime('tgl');
            $table->dateTime('batas_waktu');
            $table->dateTime('tgl_bayar');
            $table->integer('biaya_tambahan');
            $table->double('diskon');
            $table->integer('pajak');
            $table->enum('status', ['baru', 'proses', 'selesai', 'diambil']);
            $table->enum('dibayar', ['dibayar', 'belum_dibayar']);
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('tb_users');
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
        Schema::dropIfExists('tb_transaksis');
    }
}
