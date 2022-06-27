<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Area;
use Faker\Factory as Faker;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=0 ; $i<25 ; $i++){
            $area = new Area();
            $area->name = $faker->name;
            $area->dimension = $faker->address;
            $area->type = 'Shop';
            $area->type_detail = 'Front Shop';
            $area->save();
        }
        
    }
}
