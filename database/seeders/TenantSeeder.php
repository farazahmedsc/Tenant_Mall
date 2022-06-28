<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Tenants;

class TenantSeeder extends Seeder
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
            $tenant = new Tenants();

            $tenant->first_name = $faker->firstName;
            $tenant->last_name =  $faker->lastName;
            $tenant->phone_number =  $faker->phoneNumber;
            $tenant->business_name = $faker->company;
            $tenant->area_alloted = 3;
            $tenant->acquiring_date = $faker->date;
            $tenant->rent = 5000;
            $tenant->maintenance = 300;


            $tenant->save();
        }
    }
}
