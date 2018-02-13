<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('delivery_status_codes', function (Blueprint $table) {
            $table->integer('status_code')->unsigned()->primary() ; 
            $table->string('title');
            $table->string('description');
        });


        Schema::create('order_status_codes', function (Blueprint $table) {
            $table->integer('status_code')->unsigned()->primary() ; 
            $table->string('title');
            $table->string('description');
        });


        Schema::create('customer_orders', function (Blueprint $table) {
            $table->increments('customer_order_id');
            $table->integer('senior_citizen_id')->unsigned();

            $table->integer('order_status_code')->unsigned() ; 
            
            $table->foreign('senior_citizen_id')->references('id')->on('senior_citizens');
            
            $table->foreign('order_status_code')->references('status_code')->on('order_status_codes');

            $table->timestamp('placed_on');  

            $table->decimal('total_amount', 5, 2);    

            $table->string('comments');

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
        Schema::dropIfExists('customer_orders');
    }
}
