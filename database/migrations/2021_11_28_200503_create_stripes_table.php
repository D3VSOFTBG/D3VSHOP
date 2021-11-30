<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStripesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stripe', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('environment');
            $table->string('test_webhook_secret');
            $table->string('test_publishable_key');
            $table->string('test_secret_key');
            $table->string('live_webhook_secret');
            $table->string('live_publishable_key');
            $table->string('live_secret_key');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stripe');
    }
}
