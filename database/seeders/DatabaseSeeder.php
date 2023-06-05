<?php

namespace Database\Seeders;

use App\Domain\Models\user;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            WarehouseSeeder::class,
            WarehouseRegionSeeder::class,
            WarehouseLocalizationSeeder::class,
        ]);
    }
}
