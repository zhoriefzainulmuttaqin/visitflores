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
        Schema::create('accomodations', function (Blueprint $table) {
            $table->id();
            $table->string('city');
            $table->string('name');
            $table->string('slug');
            $table->string('picture');
            $table->string('cover_picture');
            $table->longText('details');
            $table->longText('address');
            $table->integer('star');
            $table->double('price_start_from');
            $table->longText('facilities');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accomodations');
    }
};
