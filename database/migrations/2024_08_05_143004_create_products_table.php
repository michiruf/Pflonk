<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('ean');
            $table->string('name');
            $table->string('image_path')->nullable();
            $table->json('additional_data')->nullable();
            $table->boolean('is_active');
            $table->timestamps();

            $table->unique('ean');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
