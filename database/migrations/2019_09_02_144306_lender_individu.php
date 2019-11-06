<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LenderIndividu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lender_individu', function(Blueprint $table){
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
            $table->string('npwp');
            $table->string('scan_npwp');
            $table->string('alamat_domisili');
            $table->string('nama_bank');
            $table->string('nomor_rekening');
            $table->string('pemilik_rekening');
            $table->string('pekerjaan');
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
        Schema::dropIfExists('lender_individu');
    }
}
