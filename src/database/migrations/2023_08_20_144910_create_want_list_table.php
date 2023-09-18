<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('want_list', function (Blueprint $table) {
            $table->increments('id')->autoIncrement();
            $table->integer('user_id')->unsigned();
            $table->integer('photo_id')->unsigned();
            $table->datetime('created_at');
            $table->datetime('updated_at');
            
            $table->foreign('user_id')->references('id')->on('user');
            $table->foreign('photo_id')->references('id')->on('photo');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('want_list');
    }
};
