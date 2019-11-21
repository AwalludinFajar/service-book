<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PetugasUse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('petugas_uses', function (Blueprint $table)
      {
        $table->bigIncrements('id');
        $table->integer('id_user')->nullable();
        $table->string('nama_petugas')->nullable();
        $table->string('telepon_petugas')->nullable();
        $table->string('email_petugas')->nullable();
        $table->text('alamat_petugas')->nullable();
        $table->text('foto_petugas')->nullable();
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
