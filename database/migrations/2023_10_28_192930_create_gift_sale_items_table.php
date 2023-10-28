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
        Schema::create('gift_sale_items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("sale_id")->unsigned();
            $table->bigInteger("gift_id")->unsigned();
            $table->integer("quantity");
            $table->string("snapshot_name",255);
            $table->string("snapshot_unit",255);
            $table->double("snapshot_price");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gift_sale_items');
    }
};
