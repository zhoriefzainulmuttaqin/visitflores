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
        Schema::create('discount_card_useds', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("partner_id")->unsigned();
            $table->string("partner_type",100);
            $table->bigInteger("company_id")->unsigned();
            $table->bigInteger("user_id")->unsigned();
            $table->bigInteger("card_id")->unsigned();
            $table->date("date_used");
            $table->string("time_used",50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discount_card_useds');
    }
};
