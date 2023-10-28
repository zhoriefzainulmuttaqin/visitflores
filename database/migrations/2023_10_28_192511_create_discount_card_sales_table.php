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
        Schema::create('discount_card_sales', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("user_id")->unsigned();
            $table->bigInteger("payment_id")->unsigned()->nullable();
            $table->bigInteger("admin_confirm_id")->unsigned()->nullable();
            $table->integer("quantity");
            $table->date("date_carted");
            $table->string("time_carted",25);
            $table->string("paid_confirmation_file",255)->nullable();
            $table->date("date_paid")->nullable();
            $table->string("time_paid",25)->nullable();
            $table->date("date_confirmed")->nullable();
            $table->string("time_confirmed",25)->nullable();
            $table->integer("status")->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discount_card_sales');
    }
};
