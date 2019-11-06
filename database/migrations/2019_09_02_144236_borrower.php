<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Borrower extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borower', function (Blueprint $table){
            $table->bigIncrements('id'); 
            $table->biginteger('id_bank')->unsigned()->index();
            $table->string('nama');
            $table->enum('jenis_kelamin', ['pria','wanita']);
            $table->string('alamat_ktp');
            $table->string('alamat_domisili');
            $table->string('telphone');
            $table->string('email');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('no_rekening');
            $table->enum('status_checker',['aproved','reject']);
            $table->enum('status_maker',['aproved','reject']);
            $table->string('no_ktp');
            $table->string('scan_ktp');
            $table->string('npwp');
            $table->string('scan_npwp');
            $table->string('siup');
            $table->string('no_akta_pendirian');
            $table->string('scan_akta_pendirian');
            $table->string('scan_siup');
            $table->string('tdp');
            $table->string('scan_tdp'); 
            $table->string('nama_bank');
            $table->string('nomor_rekening');
            $table->string('pemilik_rekening');
            $table->string('keterangan');
            $table->string('status');
            $table->timestamps();

    });
    Schema::table('borower', function(Blueprint $table) {
        $table->foreign('id_bank', 'borower_fk_1')
              ->references('id')
              ->on('bank')
              ->onUpdate('CASCADE')
              ->onDelete('CASCADE');
        });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('borower', function(Blueprint $table)
        
    {
        $table->dropForeign('borower_fk_1');
        });
        Schema::drop('borower');
    }
}
    


