<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_members', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 200);
            $table->text('alamat');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('tlp', 15);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_members');
    }
}