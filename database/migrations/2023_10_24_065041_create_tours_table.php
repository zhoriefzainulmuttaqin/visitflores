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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id')->unsigned();
            $table->string('city');
            $table->string('name');
            $table->string('name_en');
            $table->string('slug');
            $table->string('picture');
            $table->string('cover_picture');
            $table->longText('address');
            $table->longText('facilities');
            $table->longText('facilities_en');
            $table->longText('description');
            $table->longText('description_en');
            $table->longText('phone');
            $table->double('price');
            $table->string('link_instagram')->nullable();
            $table->string('link_facebook')->nullable();
            $table->string('link_tiktok')->nullable();
            $table->string('link_youtube')->nullable();
            $table->string('link_maps')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
