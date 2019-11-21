<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MasterBook extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_books', function (Blueprint $table)
        {
          $table->bigIncrements('id');
          $table->integer('idkategori')->unsigned();
          $table->integer('idpenerbit')->unsigned();
          $table->string('judul_buku')->nullable();
          $table->longText('sinopsis')->nullable();
          $table->string('pengarang')->nullable();
          $table->char('thn_terbit', 4)->nullable();
          $table->longText('cover_buku')->nullable();
          $table->enum('status',['0','1'])->default('1');
          $table->integer('idjumlah')->unsigned();
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
