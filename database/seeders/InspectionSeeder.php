<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class InspectionSeeder extends Seeder
{
    public function run(): void
    {
        $response = Http::get('https://deskplan.lv/muita/app.json');
        $data = $response->json();

        foreach ($data["inspections"] as $d) {
            DB::table('inspections')->insert([
                'id' => $d["id"],
                'case_id' => $d["case_id"],
                'type' => $d["type"],
                'requested_by' => $d["requested_by"],
                'start_ts' => $d["start_ts"],
                'location' => $d["location"],
                'checks' => json_encode($d["checks"]), 
                'assigned_to' => $d["assigned_to"],
            ]);
        } 
    }
}
