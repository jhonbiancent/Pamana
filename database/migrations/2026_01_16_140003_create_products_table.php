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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('product_name');
            $table->string('product_price');
            $table->string('product_sold');
            $table->integer('product_stocks');
            $table->boolean('product_sale');
            $table->integer('product_sale_percent');
            $table->integer('product_sale_off');
            $table->boolean('product_near');
            $table->boolean('product_free_shipping');
            $table->string('product_image');
            $table->foreignId('seller_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
