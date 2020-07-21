<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlamatPaket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alamat_paket', function (Blueprint $table) {
            $table->increments('idalamat');
            $table->string('nama');
            $table->integer('id_provinsi');
            $table->integer('id_kabupaten');
            $table->integer('id_kecamatan');
            $table->char('kode_pos');
            $table->string('alamat');
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
        Schema::dropIfExists('alamat_paket');
    }
}
