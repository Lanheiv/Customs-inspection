<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('data_totals', function (Blueprint $table) {
            $table->string("vehicles");
            $table->string("parties");
            $table->string("users");
            $table->string("cases");
            $table->string("inspections");
            $table->string("documents");
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('data_totals');
    }
};
