<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('masterchief', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('designation', 50);
            $table->string('image', 50)->nullable();
            $table->timestamps(); // This line adds created_at and updated_at columns
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masterchief');
    }
};
