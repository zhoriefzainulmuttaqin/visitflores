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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('admin_id')->unsigned();
            $table->string('cover_picture');
            $table->string('name');
            $table->string('slug');
            $table->longText('location');
            $table->date('published_date');
            $table->string('published_time');
            $table->date('start_date');
            $table->string('start_time');
            $table->date('end_date');
            $table->string('end_time');
            $table->longText('details');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
