<?php

namespace Database\Seeders;

use App\Domain\Models\warehouse_region;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class WarehouseRegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        warehouse_region::factory()->count(6)->sequence(
            [
                'warehouse_id' => 1,
                'code' => 'RAC',
                'description' => 'Racks',
            ],
            [
                'warehouse_id' => 1,
                'code' => 'EP1',
                'description' => 'Entresol - first part',
            ],
            [
            'warehouse_id' => 1,
                'code' => 'PAC',
                'description' => 'Packing',
            ],
            [
            'warehouse_id' => 2,
                'code' => 'RAC',
                'description' => 'Racks',
            ],
            [
                'warehouse_id' => 2,
                'code' => 'EP1',
                'description' => 'Entresol - first part',
            ],
            [
                'warehouse_id' => 2,
                'code' => 'PAC',
                'description' => 'Packing',
            ]

        )->create();
    }
}
