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
        Schema::create('vouchers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sale_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('compay_id')->unsigned();
            $table->string('number');
            $table->date('purchased_date');
            $table->date('expired_date');
            $table->longText('details');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vouchers');
    }
};
