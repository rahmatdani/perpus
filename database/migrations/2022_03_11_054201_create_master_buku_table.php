<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_buku', function (Blueprint $table) {
            $table->id();
            $table->string('isbn');
            $table->string('judulbuku');
            $table->string('nomorpunggung');
            $table->string('kdbukupenerbit');
            $table->string('penerbit');
            $table->string('tahunterbit');
            $table->string('penulis');
            $table->string('jumlahhalaman');
            $table->string('jeniskoleksi');
            $table->string('fiksinonfiksi');
            $table->string('jenjang');
            $table->string('tipebuku');
            $table->string('kategori');
            $table->text('gambar');
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
        Schema::dropIfExists('master_buku');
    }
}
