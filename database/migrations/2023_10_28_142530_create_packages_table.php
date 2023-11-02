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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string("picture",255)->nullable();
            $table->string("cover_picture",255)->nullable();
            $table->string("name",255);
            $table->string("name_en",255);
            $table->string("slug",255);
            $table->integer("minimum");
            $table->double("price");
            $table->string("unit",255);
            $table->string("view_file",255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
