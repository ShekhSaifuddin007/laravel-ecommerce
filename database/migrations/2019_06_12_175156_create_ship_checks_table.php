<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShipChecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ship_checks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('billing_name');
            $table->string('billing_email');
            $table->string('billing_no');
            $table->string('billing_alt_no');
            $table->string('billing_company_name')->nullable();
            $table->text('billing_address');
            $table->unsignedBigInteger('billing_country')->nullable();
            $table->string('billing_city')->nullable();
            $table->string('billing_state')->nullable();
            $table->string('billing_zip')->nullable();
            //===================>>>>>>>>>>
            $table->string('shipping_name');
            $table->string('shipping_email');
            $table->string('shipping_no');
            $table->string('shipping_alt_no');
            $table->string('shipping_company_name')->nullable();
            $table->text('shipping_address');
            $table->unsignedBigInteger('shipping_country')->nullable();
            $table->string('shipping_city')->nullable();
            $table->string('shipping_state')->nullable();
            $table->string('shipping_zip')->nullable();
            $table->string('payment_method');
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
        Schema::dropIfExists('ship_checks');
    }
}
