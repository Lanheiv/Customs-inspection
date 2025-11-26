<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            CaseSeeder::class,
            DocumentSeeder::class,
            InspectionSeeder::class,
            PartieSeeder::class,
            UsesrSeeder::class,
            VehicleSeeder::class,
            DataTotalSeeder::class
        ]);
    }
}
