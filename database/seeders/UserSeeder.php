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
            'email' => 'kingsetto@gmail.com',
            'password' => Hash::make('dawid122'),
            'remember_token' => Str::random(10),
        ]);

        user::factory(10)->create();
    }
}
