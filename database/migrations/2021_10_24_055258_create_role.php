<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD:database/migrations/2021_10_24_055258_create_role.php
            $table->string('role',50);
=======
            $table->string('NIK')->unique();
            $table->string('Nama');
            $table->string('umur');
            $table->string('kondisi');
>>>>>>> 96c294b1d62dd033bd0b477699a109ed9cb2eae6:database/migrations/2021_10_06_044001_create_tabel_detail_korban.php
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
        Schema::dropIfExists('role');
    }
}
