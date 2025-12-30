<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class DocumentSeeder extends Seeder
{
    public function run(): void
    {
        $response = Http::get('https://deskplan.lv/muita/app.json');
        $data = $response->json();

        foreach ($data["documents"] as $d) {
            DB::table('documents')->insert([
                'foreignId' => $d["id"],
                'case_id' => $d["case_id"],
                'filename' => $d["filename"],
                'mime_type' => $d["mime_type"],
                'category' => $d["category"],
                'pages' => $d["pages"],
                'uploaded_by' => $d["uploaded_by"],
            ]);
        } 
    }
}
