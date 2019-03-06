<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_film',25);
            $table->string('nama_peminjaman',50);
            $table->string('no_ktp',20);
            $table->blob('foto_ktp'),20);
            $table->string('tgl_pinjam',25);
            $table->string('tgl_kembali',25);
            $table->double('harga_sewa',20);
            $table->string('status',20);
            $table->string('tgl_input_data',20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}
