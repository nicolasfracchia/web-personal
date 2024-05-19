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
        Schema::create('experience_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('experience_id')->constrained(table: 'experience'); // Direct foreign key with `experience`.`id`
            $table->text('item');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experience_items');
    }
};
