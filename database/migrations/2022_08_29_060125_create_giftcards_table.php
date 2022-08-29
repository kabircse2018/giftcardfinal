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
        Schema::create('giftcards', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('outlet_id');
            $table->string('invoice_no')->nullable();
            $table->string('unique_invoice_no')->nullable();
            $table->date('order_date')->nullable();
            $table->string('order_id')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('customer_contact')->nullable();
            $table->string('order_qty')->nullable();
            $table->string('validity_month')->nullable();
            $table->decimal('order_price')->nullable();
            $table->decimal('actual_price')->nullable();
            $table->text('customer_address')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('outlet_id')->references('id')->on('outlets')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('giftcards');
    }
};
