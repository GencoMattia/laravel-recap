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
        Schema::create('cardcolor_magiccard', function (Blueprint $table) {
            $table->unsignedBigInteger("cardcolor_id");
            $table->unsignedBigInteger("magiccard_id");

            $table->primary(["cardcolor_id", "magiccard_id"]);

            $table->foreign("cardcolor_id")->references("id")->on("card_colors")->onUpdate("cascade")->onDelete("cascade");
            $table->foreign("magiccard_id")->references("id")->on("magic_cards")->onUpdate("cascade")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cardcolor_magiccard');
    }
};
