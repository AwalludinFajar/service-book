<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DendaTrans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('denda_trans', function (Blueprint $table)
      {
        $table->bigIncrements('id');
        $table->char('kode_tarnsaksi', 5)->nullable();
        $table->integer('jumlah_denda')->nullable();
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
