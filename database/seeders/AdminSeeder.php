<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name' => 'Super Admin',
            'phone' => '01764366127',
            'email' => 'admin'.rand(1000,9999).'@example.com',
            'otp' => rand(1000, 9999),
            'email_verified_at' => now(),
            'phone_verified_at' => now(),
            'password' => Hash::make('12345'),
        ]);
    }
}
