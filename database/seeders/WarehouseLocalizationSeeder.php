<?php

namespace Database\Seeders;

use App\Domain\Models\warehouse_localization;
use App\Domain\Models\warehouse_region;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class WarehouseLocalizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        warehouse_localization::factory()->count(3)->sequence(
            [
                'warehouse_region_id' => 2,
                'address_1' => 1,
                'address_2' => 1,
                'address_3' => 1,
                'full_address' => 'EP1-001-001-001',
                'is_active' => '1',
            ],
            [
                'warehouse_region_id' => 2,
                'address_1' => 1,
                'address_2' => 1,
                'address_3' => 2,
                'full_address' => 'EP1-001-001-002',
                'is_active' => '1',
            ],
            [
                'warehouse_region_id' => 2,
                'address_1' => 1,
                'address_2' => 1,
                'address_3' => 3,
                'full_address' => 'EP1-001-001-003',
                'is_active' => '1',
            ],
        )->create();
    }
}
