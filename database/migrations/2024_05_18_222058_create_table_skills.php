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
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->integer('years', false, true); // 0 means "current" - - - > CURRENT_YEAR - 2010 | column_name, auto_increment, unsigned
            $table->integer('level', false, true)->unsigned(); // USED FOR KNOWLEDGE PERCENTAGE | column_name, auto_increment, unsigned
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skills');
    }
};
