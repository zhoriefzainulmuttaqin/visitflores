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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("user_id")->unsigned();
            $table->bigInteger("payment_id")->unsigned();
            $table->bigInteger("admin_confirm_id")->unsigned();
            $table->string("code",255);
            $table->date("date");
            $table->string("buyer_name",255);
            $table->string("buyer_phone",255);
            $table->string("buyer_address",255);
            $table->date("date_carted");
            $table->string("time_carted",25);
            $table->date("date_paid");
            $table->string("time_paid",25);
            $table->date("date_confirmed");
            $table->string("time_confirmed",25);
            $table->date("date_delivered");
            $table->string("time_delivered",25);
            $table->date("date_finished");
            $table->string("time_finished",25);
            $table->integer("status");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
