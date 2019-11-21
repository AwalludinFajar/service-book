<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PenerbitBook extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('penerbit_books', function (Blueprint $table)
      {
        $table->bigIncrements('id');
        $table->string('nama_penerbit')->nullable();
        $table->text('alamat_penerbit')->nullable();
        $table->string('kontak')->nullable();
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
