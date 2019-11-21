<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PengembalianTrans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('pengembalian_trans', function (Blueprint $table)
      {
        $table->bigIncrements('id');
        $table->char('kode_tarnsaksi', 5)->nullable();
        $table->integer('id_petugas')->nullable();
        $table->date('tgl_pengembalian')->nullable();
        $table->text('keterangan')->nullable();
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
