<?php

namespace Database\Seeders;

use App\Domain\Models\role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        role::factory(3)->state(new Sequence(
            ['name' => 'guest'],
            ['name' => 'authorized'],
            ['name' => 'admin'],
        ))->create();



    }
}
