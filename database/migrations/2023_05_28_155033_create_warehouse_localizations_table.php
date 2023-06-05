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
        Schema::create('warehouse_localizations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('warehouse_region_id');
            $table->unsignedTinyInteger('address_1');
            $table->unsignedTinyInteger('address_2');
            $table->unsignedTinyInteger('address_3');
            $table->string('full_address');
            $table->boolean('is_active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('warehouse_localizations');
    }
};
