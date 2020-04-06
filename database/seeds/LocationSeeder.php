<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $path = resource_path('sql/lokality.csv');
        $data = array_map('str_getcsv', file($path));
        
        $new = [];
        foreach ($data as $d) {
            array_pop($d);
            DB::table('locations')->insert([
                'id' => $d[0],
                'parent' => $d[1],
                'name' => $d[2],
                'cool_name' => $d[3],
            ]);
        }


        $this->command->info('Location table seeded!');
    }
}
