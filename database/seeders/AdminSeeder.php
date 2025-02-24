<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teacher::create([
            "full_name"=> "Admin",
            "email"=> "admin@example.com",
            "password"=> bcrypt("passW0rd!"),
            'contact_number' => "1234567890",
            "address" => "Karachi",
            "is_admin" => true,
        ]);
    }
}
