<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('websiter-logs', function (Blueprint $table) {
            $table->id();
            $table->string("foreignId")->unique();
            $table->string("user_id");
            $table->string("tabel");
            $table->string("tabel_id");
            $table->string("description");
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('websiter-logs');
    }
};
