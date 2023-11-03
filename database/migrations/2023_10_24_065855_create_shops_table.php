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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('city');
            $table->string('picture');
            $table->string('cover_picture');
            $table->string('name');
            $table->string('name_en');
            $table->string('slug');
            $table->longText('details');
            $table->longText('details_en');
            $table->longText('address');
            $table->longText('facilities');
            $table->longText('facilities_en');
            $table->longText('phone');
            $table->longText('price');
            $table->string('link_instagram')->nullable();
            $table->string('link_facebook')->nullable();
            $table->string('link_tiktok')->nullable();
            $table->string('link_youtube')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shops');
    }
};
