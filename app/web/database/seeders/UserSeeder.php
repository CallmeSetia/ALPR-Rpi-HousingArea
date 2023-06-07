<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i < 10; $i++) {
            $user = User::create([
                'username' => 'penghuni'.$faker->numberBetween(0, 100),
                'password' => bcrypt('penghuni'),
                'rumah_id' => $i,
                'role' => 'Penghuni',
                'nama' => $faker->name,
            ]);
            $user->addRole('Penghuni');
        }


        User::create([
            'username' => 'penjaga'.$faker->numberBetween(0, 100),
            'password' => bcrypt('penjaga'),
            'rumah_id' => null,
            'role' => 'Penjaga',
            'nama' => $faker->name,
        ])->addRole('Penjaga');
        User::create([
            'username' => 'penjaga'.$faker->numberBetween(0, 100),
            'password' => bcrypt('penjaga'),
            'rumah_id' => null,
            'role' => 'Penjaga',
            'nama' => $faker->name,
        ])->addRole('Penjaga');

        // Tambahkan data user lainnya sesuai kebutuhan
    }
}
