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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number', 150);
            // $table->bigInteger('user_id');
            $table->double('sub_total');
            // $table->bigInteger('shipping_id');
            // $table->string('coupon');
            $table->double('total_amount');
            $table->string('productName');
            $table->integer('quantity');
            // $table->string('payment_method');
            // $table->string('payment_status');
            // $table->string('status');
            $table->string('customerName');
            $table->string('customer_id');
            $table->string('email');
            $table->string('phone');
            $table->string('country');
            // $table->string('post_code');
            $table->string('address');
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
