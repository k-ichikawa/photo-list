<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->autoIncrement();
            $table->string('nickname', 100);
            $table->datetime('created_at');
            $table->datetime('updated_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
