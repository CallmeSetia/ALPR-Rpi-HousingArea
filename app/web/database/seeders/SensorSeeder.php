<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sensor;
class SensorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $currentDateTime = Carbon::now();

        for($i = 0; $i < 50; $i++) {
            // Mengatur rentang waktu satu minggu terakhir
            $oneWeekAgo = $currentDateTime->subWeek();

            // Menghasilkan tanggal dan jam dalam rentang satu minggu terakhir
            $createdDateTime = $faker->dateTimeBetween($oneWeekAgo, $currentDateTime);

            // Format tanggal dan jam sesuai kebutuhan Anda
            $formattedDateTime = $createdDateTime->format('Y-m-d H:i:s');
            Sensor::create([
                'prox_masuk' => 0,
                'prox_keluar' => 0,
                'gate' => 0,
                'created_at' => $formattedDateTime,
            ]);
        }
    }
}
