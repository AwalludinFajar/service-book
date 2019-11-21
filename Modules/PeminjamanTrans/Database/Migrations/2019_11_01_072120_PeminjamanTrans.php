<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PeminjamanTrans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('peminjaman_trans', function (Blueprint $table)
      {
        $table->bigIncrements('id');
        $table->char('kode_tarnsaksi', 5)->nullable();
        $table->integer('id_buku')->nullable();
        $table->integer('id_petugas')->nullable();
        $table->integer('id_anggota')->nullable();
        $table->date('tgl_pinjam')->nullable();
        $table->date('tgl_kembali')->nullable();
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
