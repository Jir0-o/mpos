<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_service_returns', function (Blueprint $table) {
            $table->bigIncrements('service_return_id');
            $table->integer('consumer_id')->nullable();
            $table->string('consumer_name')->nullable();
            $table->text('consumer_address')->nullable();
            $table->string('job_number')->nullable();
            $table->string('imei')->nullable();
            $table->integer('cart_id')->nullable();
            $table->string('model_no')->nullable();
            $table->string('warranty_card_no')->nullable();
            $table->string('cart_item_id')->nullable();
            $table->string('quantity')->nullable();
            $table->text('reason_of_return')->nullable();
            $table->string('purchase_date')->nullable();
            $table->string('sending_date')->nullable();
            $table->string('estimated_delivery_date')->nullable();
            $table->string('delivery_date')->nullable();
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
        Schema::dropIfExists('cart_service_returns');
    }
};
