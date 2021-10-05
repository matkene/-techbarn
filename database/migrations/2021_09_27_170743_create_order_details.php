<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('order_id')->nullable();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('product_name')->nullable();
            $table->string('orderno')->nullable();
            $table->string('color')->nullable();
            $table->decimal('shipping_fee')->nullable();
            $table->string('size')->nullable();
            $table->string('brand_id')->nullable();
            $table->string('status')->default('pending')->nullable();
            $table->mediumText('image')->nullable();
            $table->mediumText('description')->nullable();
            $table->integer('quantity_ordered')->nullable();
            $table->boolean('delivered')->default(false);
            $table->decimal('unit_price')->nullable();
            $table->string('payment_status')->default('pending')->nullable();
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders_details');
    }
}
