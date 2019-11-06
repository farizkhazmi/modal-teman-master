<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LenderCorp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lender_corp', function(Blueprint $table){
            $table->bigIncrements('id');   
            $table->string('nama');
            $table->string('alamat_ktp');
            $table->string('telphone');
            $table->string('email');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('no_ktp');
            $table->string('scan_ktp');
            $table->string('foto_diri');
            $table->string('nama_perusahaan');
            $table->string('kategori_bisnis');
            $table->string('jabatan');
            $table->date('tahun_pendirian');
            $table->string('deskripsi_perusahaan');
            $table->string('alamat_perusahaan');
            $table->string('telphone_perusahaan');
            $table->string('web_url_perusahaan');
            $table->enum('tipe_perusahaan',['PT','CV','usaha_dagang','Individual']);
            $table->string('nama_bank');
            $table->string('nomor_rekening');
            $table->string('pemilik_rekening');
            $table->string('nomor_akta_pendirian');
            $table->string('scan_akta_pendirian');
            $table->string('siup');
            $table->string('scan_siup');
            $table->string('tdp');
            $table->string('scan_tdp');
            $table->string('no_menkumham');
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
        Schema::dropIfExists('lender_corp');
    }
}
