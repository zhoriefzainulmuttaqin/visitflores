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
        Schema::create('sale_package_items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("sale_id")->unsigned();
            $table->bigInteger("package_id")->unsigned();
            $table->string("snapshot_name",255);
            $table->integer("snapshot_minimum");
            $table->string("snapshot_unit",255);
            $table->double("snapshot_price");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale_package_items');
    }
};
