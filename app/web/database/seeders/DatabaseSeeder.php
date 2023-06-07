<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Rumah;
use App\Models\PlatNomor;
use App\Models\Tamu;

class DatabaseSeeder extends Seeder
{
    public function run()
    {

//        $this->call(RumahSeeder::class);
        $this->call(LaratrustSeeder::class);
        $this->call(UserSeeder::class);
//
//        $this->call(PlatNomorSeeder::class);
//        $this->call(TamuSeeder::class);
//
//        $this->call(SensorSeeder::class);
//        $this->call(ControlSeeder::class);
    }

}

