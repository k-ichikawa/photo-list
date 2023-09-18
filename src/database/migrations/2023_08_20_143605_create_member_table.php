<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('member', function (Blueprint $table) {
            $table->increments('id')->autoIncrement();
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->unsignedTinyInteger('term');
            $table->boolean('graduated')->default(false);
            $table->datetime('created_at');
            $table->datetime('updated_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('member');
    }
};
