<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Loan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('loan', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->biginteger('id_borower');
            $table->biginteger('id_lender_p');
            $table->biginteger('id_lender_i');
            $table->string('invoice_number');
            $table->string('invoice_scan');
            $table->date('invoice_date');
            $table->string('origination');
            $table->string('destination');
            $table->date('shipment_date');
            $table->double('loan_amount');
            $table->integer('loan_length');
            $table->enum('status_checker',['aproved','reject']);
            $table->enum('status_maker',['aproved','reject']);
            $table->string('keterangan');
            $table->enum('status',['under_writing','active']);
            $table->enum('status_pembayaran',['unpaid','paid']);
            $table->double('bunga');
            $table->date('date_start');
            $table->date('date_end');
            $table->date('date_payment');
            $table->timestamps(); 
        });
        
        // Schema::table('loan', function(Blueprint $table) {
        //     $table->foreign('id_borower', 'loan_fk_1')->references('id')->on('borower')->onUpdate('CASCADE')->onDelete('CASCADE');
        //     $table->foreign('id_lender_corp', 'loan_fk_2')->references('id')->on('lender_corp')->onUpdate('CASCADE')->onDelete('CASCADE');
        //     $table->foreign('id_lender_individu', 'loan_fk_3')->references('id')->on('lender_individu')->onUpdate('CASCADE')->onDelete('CASCADE');
        // });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('loan');
    }
}
