<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class UsesrSeeder extends Seeder
{
    public function run(): void
    {    
        $response = Http::get('https://deskplan.lv/muita/app.json');
        $data = $response->json();

        foreach ($data["users"] as $d) {
            DB::table('users')->insert([
                'foreignId' => $d["id"],
                'username' => $d["username"],
                'full_name' => $d["full_name"],
                'password'  => isset($d['password']) ? Hash::make($d['password']) : Hash::make('1234'),
                'role' => $d["role"] ?? "user",
                'active' => $d["active"] ?? false,
            ]);
        } 
    }
}