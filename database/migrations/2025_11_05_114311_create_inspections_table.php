<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('inspections', function (Blueprint $table) {
            $table->id();
            $table->string("foreignId")->unique();
            $table->string("case_id");
            $table->string("type");
            $table->string("requested_by");
            $table->string("start_ts");
            $table->string("location");
            $table->json("checks")->nullable();
            $table->string("assigned_to");
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('inspections');
    }
};
