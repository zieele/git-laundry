<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_users', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 200);
            $table->string('username', 30);
            $table->text('password');
            $table->unsignedBigInteger('id_outlet');
            $table->foreign('id_outlet')->references('id')->on('tb_outlets');
            $table->enum('role', ['admin', 'kasir', 'owner']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_users');
    }
}
