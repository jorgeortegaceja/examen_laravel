<?php

use App\Models\UserAddress;
use Illuminate\Database\Seeder;

class user_domicilio extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_domicilios')->insert([
            'user_id' => rand(1, 100),
            'domicilio' => 'calle '.Str::random(10),
            'numero_exterior' =>  rand(1, 1000),
            'cp' => rand(0, 99999),
            'ciudad' => Str::random(10),
            'colonia' => date("Y-m-d", mt_rand(0, 500000000))
        ]);

        factory(UserAddress::class, 100)->create();
    }
}