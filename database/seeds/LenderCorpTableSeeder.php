<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class LenderCorpTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        
    	for($i = 1; $i <= 20; $i++){
    	      // insert data ke table menggunakan Faker
    		DB::table('lender_corp')->insert([

                'nama'                  => $faker->name,
                'alamat_ktp'            => $faker->state,
                'telphone'              => $faker->numberBetween(10,20),
                'email'                 => $faker->unique()->safeEmail,
                'tempat_lahir'          => $faker->numberBetween(10,20),
                'tanggal_lahir'         => $faker->date($format = 'Y-m-d', $max = 'now'),
                'no_ktp'                => $faker->numberBetween(10,20),
                'scan_ktp'              => $faker->image,
                'foto_diri'             => $faker->image,
                'nama_perusahaan'       => $faker->name,
                'kategori_bisnis'       => $faker->name,
                'jabatan'               => $faker->name,
                'tahun_pendirian'       => $faker->date($format = 'Y-m-d', $max = 'now'),
                'deskripsi_perusahaan'  => $faker->name,
                'alamat_perusahaan'     => $faker->city,
                'telphone_perusahaan'   => $faker->numberBetween(10,20),
                'web_url_perusahaan'    => $faker->company,
                'tipe_perusahaan'       => $faker->randomElement(['PT','CV','Usaha_dagang','Individual']), 
                'nama_bank'             => $faker->company,
                'nomor_rekening'        => $faker->numberBetween(10,20),
                'pemilik_rekening'      => $faker->name,
                'nomor_akta_pendirian'  => $faker->numberBetween(10,20),
                'scan_akta_pendirian'   => $faker->image,
                'siup'                  => $faker->numberBetween(10,20),
                'scan_siup'             => $faker->image,
                'tdp'                   => $faker->numberBetween(10,20),
                'scan_tdp'              => $faker->image,
                'no_menkumham'          => $faker->numberBetween(10,20),
                ]);
            }

    }
}
