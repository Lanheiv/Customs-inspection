<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class VehicleSeeder extends Seeder
{
    public function run(): void
    {
        $response = Http::get('https://deskplan.lv/muita/app.json');
        $data = $response->json();

        foreach ($data["vehicles"] as $d) {
            DB::table('vehicles')->insert([
                'id' => $d["id"],
                'plate_no' => $d["plate_no"],
                'country' => $d["country"],
                'make' => $d["make"],
                'country' => $d["country"],
                'model' => $d["model"],
                'vin' => $d["vin"],
            ]);
        } 
    }
}
