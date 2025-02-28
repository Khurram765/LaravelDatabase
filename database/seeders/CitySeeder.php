<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\city;


class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('./database/json/cities.json');
        $cities = json_decode($json);

        foreach($cities as $city){
            city::create([
                'CityName'=>$city->CityName
            ]);
        }
    }
}
