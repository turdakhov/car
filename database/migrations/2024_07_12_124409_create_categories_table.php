<?php

use App\Models\Translate;
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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('title_tr')->constrained('translates');
            // $table->foreignId('description_tr')->constrained('translates');
            // $table->foreignId('meta_description_tr')->constrained('translates');
            // $table->foreignId('image_tr')->constrained('translates');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
