<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class LenderindividuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        
    	for($i = 1; $i <= 10; $i++){
    	      // insert data ke table menggunakan Faker
    		DB::table('lender_individu')->insert([
    			'nama' => $faker->name,
    			'alamat_ktp' => $faker->state,
    			'telphone' => $faker->numberBetween(10,20),
                'email' => $faker->unique()->safeEmail,
                'tempat_lahir' => $faker->state,
                'tanggal_lahir' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'no_ktp' => $faker->numberBetween(10,20),
                'scan_ktp' => $faker->image,
                'npwp' => $faker->numberBetween(10,20),
                'scan_npwp' => $faker->image,
                'alamat_domisili' => $faker->city,
                'nama_bank' => $faker->name,
                'nomor_rekening' => $faker->numberBetween(10,20),
                'pemilik_rekening' => $faker->image,
                'pekerjaan' => $faker->jobtitle
                ]);
    
        }
    }
}

