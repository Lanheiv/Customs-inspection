<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('data_totals', function (Blueprint $table) {
            $table->id();
            $table->integer("vehicles");
            $table->integer("parties");
            $table->integer("users");
            $table->integer("cases");
            $table->integer("inspections");
            $table->integer("documents");
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('data_totals');
    }
};
