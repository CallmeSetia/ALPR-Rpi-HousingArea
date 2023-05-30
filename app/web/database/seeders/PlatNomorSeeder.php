<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PlatNomor;

use Faker\Factory as Faker;
use Illuminate\Support\Str;

class PlatNomorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $generatedPlatNomors = [];




        for($i=0; $i<20;$i++) {
            $platNomor = generatePlatNomor($faker);

            while (in_array($platNomor, $generatedPlatNomors)) {
                $platNomor = generatePlatNomor($faker);
            }

            PlatNomor::create([
                'nomor_plat' => $platNomor ,
                'rumah_id' => $faker->numberBetween(1, 9)
            ]);
        }
    }
}
