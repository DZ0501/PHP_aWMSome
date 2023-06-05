<?php

namespace Database\Seeders;

use App\Domain\Models\warehouse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        warehouse::factory()->count(2)->sequence(
            [
                'code' => 'SKW',
                'description' => 'Warehouse located in Skawina',
                'is_active' => '1',

            ],
            [
                'code' => 'KRK',
                'description' => 'Warehouse located in Cracow',
                'is_active' => '0',
            ]
        )->create();
    }
}
