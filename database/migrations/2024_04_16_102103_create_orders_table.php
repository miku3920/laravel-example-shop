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
        Schema::create('orders', function (Blueprint $table): void {
            $table->id();
            $table->unsignedBigInteger('user_id')->comment('訂購人ID');
            $table->json('items')->comment('商品明細');
            $table->decimal('total_amount', 10, 2)->comment('總金額');
            $table->unsignedTinyInteger('payment_method')->comment('付款方式');
            $table->unsignedTinyInteger('shipping_method')->comment('物流方式');
            $table->json('customer_info')->comment('訂購人資料');
            $table->json('recipient_info')->comment('收件人資料');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('orders');
    }
};
