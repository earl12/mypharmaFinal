<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrdersDeliveryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('customer_orders_delivery', function (Blueprint $table) {

            $table->integer('customer_order_id')->unsigned();
            
            $table->date('date_reported'); 


            $table->integer('delivery_status_code') ;

            $table->foreign('customer_order_id')
            ->references('customer_order_id')->on('customer_orders')
            ->onDelete('cascade');

            $table->foreign('delivery_status_code')->references('status_code')->on('delivery_status_codes')->onDelete('cascade');

        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_orders_delivery');
    }
}
