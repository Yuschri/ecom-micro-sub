<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $merk = [];
        foreach(range(0,20) as $merk_id)
        {
            $merk[] = $faker->unique()->company;
        }
        //
        

        foreach(range(0,20) as $dt){
            $data=[];
            foreach(range(0,1000) as $dt2){
                $data[]=[
                'merk' => $merk[rand(0,20)],
                'produk' => $faker->safeColorName,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                ];
            }

            DB::table('stats')->insert($data);
        }
    
    }
}
