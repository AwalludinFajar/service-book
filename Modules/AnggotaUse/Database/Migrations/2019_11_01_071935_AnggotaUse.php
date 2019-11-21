<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AnggotaUse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('anggota_uses', function (Blueprint $table)
      {
        $table->bigIncrements('id');
        $table->string('nip_nik_npm_anggota')->nullable();
        $table->integer('id_user')->nullable();
        $table->string('nama_anggota')->nullable();
        $table->text('alamat_anggota')->nullable();
        $table->string('email_anggota')->nullable();
        $table->string('tel_anggota')->nullable();
        $table->text('foto_anggota')->nullable();
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
        //
    }
}
