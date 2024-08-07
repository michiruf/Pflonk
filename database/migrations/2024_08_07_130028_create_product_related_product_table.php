<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_related_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained();
            $table->foreignId('related_id')->constrained('products', indexName: 'b');
            $table->timestamps();

            $table->unique(['product_id', 'related_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_related_product');
    }
};
