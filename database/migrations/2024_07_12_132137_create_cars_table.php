<?php

use App\Models\Category;
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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignIdFor(Category::class);
            $table->boolean('is_active')->default(0);
            $table->foreignId('page_title_tr')->nullable()->constrained('translates');
            $table->foreignId('description_tr')->nullable()->constrained('translates');
            $table->string('main_image');
            $table->string('manual')->nullable();
            $table->string('price')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
