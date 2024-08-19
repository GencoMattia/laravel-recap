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
        Schema::create('magic_cards', function (Blueprint $table) {
            $table->id();
            $table->string("name")->unique();
            $table->string("type");
            $table->string("artist");
            $table->text("art_url");
            $table->text("description");
            $table->smallInteger("attack");
            $table->smallInteger("defence");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('magic_cards');
    }
};
