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
        Schema::create('photo', function (Blueprint $table) {
            $table->increments('id')->autoIncrement();
            $table->integer('member_id')->unsigned();
            $table->integer('photo_series_id')->unsigned();
            $table->enum('pose', [1, 2, 3, 4]);
            $table->text('image_url');
            $table->timestamps();

            $table->foreign('member_id')->references('id')->on('member');
            $table->foreign('photo_series_id')->references('id')->on('photo_series');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photo');
    }
};
