<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class PartieSeeder extends Seeder
{
    public function run(): void
    {
        $response = Http::get('https://deskplan.lv/muita/app.json');
        $data = $response->json();

        foreach ($data["parties"] as $d) {
            DB::table('parties')->insert([
                'id' => $d["id"],
                'type' => $d["type"],
                'name' => $d["name"],
                'reg_code' => $d["reg_code"],
                'vat' => $d["vat"],
                'country' => $d["country"],
                'email' => $d["email"],
                'phone' => $d["phone"],
            ]);
        } 
    }
}
