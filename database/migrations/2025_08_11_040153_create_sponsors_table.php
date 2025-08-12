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
        Schema::create('sponsors', function (Blueprint $table) {
            $table->id();
            $table->string("sponsor_brand");
            $table->timestamps();

        });

        Schema::create('grid_sponsor', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Grid::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Sponsor::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sponsors');
        Schema::dropIfExists('grid_sponsor');
    }
};
