<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class CaseSeeder extends Seeder
{
    public function run(): void
    {
        $response = Http::get('https://deskplan.lv/muita/app.json');
        $data = $response->json();

        foreach ($data["cases"] as $d) {
            DB::table('cases')->insert([
                'id' => $d["id"],
                'external_ref' => $d["external_ref"],
                'status' => $d["status"],
                'priority' => $d["priority"],
                'arrival_ts' => $d["arrival_ts"],
                'checkpoint_id' => $d["checkpoint_id"],
                'origin_country' => $d["origin_country"],
                'destination_country' => $d["destination_country"],
                'risk_flags' => json_encode($d["risk_flags"]),
                'declarant_id' => $d["declarant_id"],
                'consignee_id' => $d["consignee_id"],
                'vehicle_id' => $d["vehicle_id"],
            ]);
        } 
    }
}
