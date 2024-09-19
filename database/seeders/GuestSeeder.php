<?php

namespace Database\Seeders;

use App\Models\Guest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guest::create([
            'fullname' => 'Ria',
            'institution_id' => 1,
            'from' => 'PT BIM',
            'phonenumber' => '089756287',
            'email' => 'ria@gmail.com',
            'note' => 'Test',
        ]);
    }
}
