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
        Schema::create('discount_cards', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("user_id")->unsigned();
            $table->bigInteger("sale_id")->unsigned();
            $table->string("code",255);
            $table->string("owner_name",255)->nullable();
            $table->string("owner_phone",255)->nullable();
            $table->string("owner_email",255)->nullable();
            $table->date("date_created");
            $table->string("time_created",25);
            $table->date("date_activated")->nullable();
            $table->string("time_activated",25)->nullable();
            $table->date("date_expired")->nullable();
            $table->string("time_expired",25)->nullable();
            $table->integer("status")->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discount_cards');
    }
};
