<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cases', function (Blueprint $table) {
            $table->string("id");
            $table->string("external_ref");
            $table->string("status");
            $table->string("priority");
            $table->string("arrival_ts");
            $table->string("checkpoint_id");
            $table->string("origin_country");
            $table->string("destination_country");
            $table->json("risk_flags")->nullable();
            $table->string("declarant_id");
            $table->string("consignee_id");
            $table->string("vehicle_id");
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cases');
    }
};