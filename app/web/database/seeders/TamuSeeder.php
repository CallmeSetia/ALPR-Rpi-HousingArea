<?php

namespace Database\Seeders;

use App\Models\Tamu;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class TamuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        // Mendapatkan tanggal dan waktu saat ini
        $currentDateTime = Carbon::now();

       for($i = 0; $i < 100; $i++) {
           // Mengatur rentang waktu satu minggu terakhir
           $oneWeekAgo = $currentDateTime->subWeek();

           // Menghasilkan tanggal dan jam dalam rentang satu minggu terakhir
           $createdDateTime = $faker->dateTimeBetween($oneWeekAgo, $currentDateTime);

           // Format tanggal dan jam sesuai kebutuhan Anda
           $formattedDateTime = $createdDateTime->format('Y-m-d H:i:s');
           $tujuan = $faker->numberBetween(1, 9);
           $approved_by = $faker->numberBetween(37, 45);
           Tamu::create([
               'nama' => $faker->name,
               'rumah_id' => $tujuan,
               'plat' => generatePlatNomor($faker),
               'approved_by' => $approved_by,
               'created_at' => $createdDateTime,
           ]);
       }
    }
}
