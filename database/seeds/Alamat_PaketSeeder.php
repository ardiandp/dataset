<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class Alamat_PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert data
        $faker as Faker::create(id_ID);
        
        for ($i=1; $i < 200 ; $i++) { 

            DB::table('alamat_paket')->insert([
                'nama'=>$faker->name,
                'id_provinsi'=>$faker->numberBetween(10,99),
                'id_kabupaten'=>$faker->numberBetween(100,900),
                'id_kecamatan'=>$faker->numberBetween(1000,4000),
                'kode_pos'=>$faker->postcode,
                'alamat'=>$faker->address

            ]);
        }
      
    }
}
