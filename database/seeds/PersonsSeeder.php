<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class PersonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //perulangan 
        $faker = Faker::create('id_ID');
        for ($i=1; $i < 1000000; $i++) { 
            DB::table('persons')->insert([
                'nik'=>$faker->numberBetween(1000000000000000,3000000000000000),
                'nama_lengkap'=>$faker->name,
                'tempat_lahir'=>$faker->city,
                'ttl'=>$faker->dateTimeThisCentury()->format('Y-m-d'),
                'phone'=>$faker->phoneNumber,
                'email'=>$faker->freeEmail,
                'alamat'=>$faker->address,
                'agama'=>$faker->numberBetween(11,15),
                'pekerjaan'=>$faker->jobTitle ,
                
            ]);
        }
    }
}
