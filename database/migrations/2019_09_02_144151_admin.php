<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Admin extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('alamat');
            $table->enum('jenis_kelamin', ['pria','wanita']);
            $table->enum('status',['belum menikah','sudah menikah']);
            $table->enum('role', ['chacker','maker','owner']);
            $table->rememberToken();
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
        Schema::dropIfExists('admin');
    }
}
