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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("azienda", 100);
            $table->string("stazione_partenza", 100);
            $table->string("stazione_arrivo", 100);
            $table->dateTime("orario_partenza");
            $table->dateTime("orario_arrivo");
            $table->integer("codice_treno")->unsigned();
            $table->tinyInteger("numero_carrozze")->unsigned();
            $table->boolean("puntuale");
            $table->boolean("cancellato");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
