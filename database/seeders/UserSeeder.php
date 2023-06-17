<?php

namespace Database\Seeders;

use App\Domain\Models\user;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        user::factory()->create([
            'name' => 'Admin',
            'role_id' => 2,
            'warehouse_id' => 1,
            'email' => 'Admin@gmail.com',
            'password' => Hash::make('Admin'),
            'remember_token' => Str::random(10),
        ]);

        user::factory(10)->create();
    }
}
