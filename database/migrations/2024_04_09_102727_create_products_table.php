<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('products', function (Blueprint $table): void {
            $table->id()->comment('編號');
            $table->integer('category')->comment('商品類別');
            $table->integer('sub_category')->nullable()->comment('商品次類別');
            $table->string('sku')->unique()->comment('商品 SKU');
            $table->string('name')->comment('商品品名');
            $table->string('sub_name')->nullable()->comment('商品附品名');
            $table->string('specification')->nullable()->comment('商品規格');
            $table->decimal('price', 10, 2)->comment('商品價格');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('products');
    }
};
