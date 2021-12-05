<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStripeSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stripe_sessions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('customer_id');
            $table->unsignedBigInteger('currency_id');
            $table->string('customer');
            $table->string('phone');
            $table->string('email');
            $table->string('country');
            $table->string('city');
            $table->string('address_1');
            $table->string('address_2');
            $table->string('postal_code');
            $table->float('tax_rate');
            $table->float('shipping_price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stripe_sessions');
    }
}
