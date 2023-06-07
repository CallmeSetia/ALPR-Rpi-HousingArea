<?php

namespace Database\Seeders;

use App\Models\Control;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ControlSeeder extends Seeder
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
            Control::create([
                'gate' => 0,
                'relay' => 0,
                'created_at' => $formattedDateTime,
            ]);
        }
    }
}
