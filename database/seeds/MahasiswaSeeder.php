<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert kedalam table mahasiswa
        /*DB::table('mahasiswa')->insert([
            'nama'=>'Andi',
            'nim'=>'20190991',
            'alamat'=>'jakarta utara',
        ]);*/

        $faker = Faker::create('id_ID');
        for($i=1; $i<=50000; $i++)
        {
            DB::table('mahasiswa')->insert([
            'nama'=>$faker->name,
            'nim'=>$faker->numberBetween(110000000,150000000),
            'email'=>$faker->freeEmail,
            'phone'=>$faker->phoneNumber,
            'id_jurusan'=>$faker->numberBetween(10,15),
            'alamat'=>$faker->address,
        ]);
        }
    }
}
