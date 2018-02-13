<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CustomerOrdersProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_orders_products', function (Blueprint $table) {
            $table->integer('customer_order_id')->unsigned();

            $table->integer('product_id')->unsigned() ; 

            $table->foreign('customer_order_id')->references('customer_order_id')->on('customer_orders');

            $table->foreign('product_id')->references('id')->on('medicine_dosages');

            $table->integer('quantity'); 
            
            $table->string('comments');     

            $table->primary(['customer_order_id', 'product_id']); 

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders_products');
    }
}
