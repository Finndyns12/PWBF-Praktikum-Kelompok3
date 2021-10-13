<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD
class CreateKecamatan extends Migration
=======
class CreateTabelUserRole extends Migration
>>>>>>> aedf973499edf6a392d9377c949408b25cd97230
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD
        Schema::create('kecamatan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kecamatan',20);
=======
        Schema::create('tabel_user_role', function (Blueprint $table) {
            $table->id();
>>>>>>> aedf973499edf6a392d9377c949408b25cd97230
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
<<<<<<< HEAD
        Schema::dropIfExists('kecamatan');
=======
        Schema::dropIfExists('tabel_user_role');
>>>>>>> aedf973499edf6a392d9377c949408b25cd97230
    }
}
