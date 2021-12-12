<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD:database/migrations/backupmigrate/2021_10_06_043754_create_tabel_user_role.php



class CreateTabelUserRole extends Migration

=======
class CreateTabelUserRole extends Migration
>>>>>>> 96c294b1d62dd033bd0b477699a109ed9cb2eae6:database/migrations/2021_10_06_043754_create_tabel_user_role.php
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD:database/migrations/backupmigrate/2021_10_06_043754_create_tabel_user_role.php

        Schema::create('kecamatan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kecamatan',20);

        Schema::create('tabel_user_role', function (Blueprint $table) {
            $table->id();

=======
        Schema::create('tabel_user_role', function (Blueprint $table) {
            $table->id();
>>>>>>> 96c294b1d62dd033bd0b477699a109ed9cb2eae6:database/migrations/2021_10_06_043754_create_tabel_user_role.php
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
<<<<<<< HEAD:database/migrations/backupmigrate/2021_10_06_043754_create_tabel_user_role.php

       
        Schema::dropIfExists('tabel_user_role');

=======
        Schema::dropIfExists('tabel_UserRole');
>>>>>>> 96c294b1d62dd033bd0b477699a109ed9cb2eae6:database/migrations/2021_10_06_043754_create_tabel_user_role.php
    }
}
