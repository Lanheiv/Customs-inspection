<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class DataTotalSeeder extends Seeder
{
    public function run(): void
    {
        $response = Http::get('https://deskplan.lv/muita/app.json');
        $data = $response->json()["total"];

        DB::table('data_totals')->insert([
            'vehicles' => $data["vehicles"],
            'parties' => $data["parties"],
            'users' => $data["users"],
            'cases'  => $data['cases'],
            'inspections' => $data["inspections"],
            'documents' => $data["documents"],
        ]);
    }
}
