<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rumah;
use Faker\Factory as Faker;

class RumahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for($i = 1; $i <10; $i++) {
            Rumah::create([
                'nama_pemilik' => $faker->name,
                'alamat' => $faker->address
            ]);
        }

    }
}
