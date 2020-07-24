<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // dummy
        $faker = Faker::create('id_ID');
        for ($i=1; $i < 100000; $i++) { 
          //insert DB
          DB::table('siswa')->insert([
              'nis'=>$faker->numberBetween(1000000,3000000),
              'nama_siswa'=>$faker->name,
              'email'=>$faker->freeEmail,
              'phone'=>$faker->phoneNumber,
              'ttl'=>$faker->dateTimeThisCentury()->format('Y-m-d'),
              'kelas'=>$faker->numberBetween(10,12),
              'alamat'=>$faker->address,
          ]);
        }
    }
}
