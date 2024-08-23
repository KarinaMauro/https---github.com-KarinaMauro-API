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
        Schema::create('competidor', function (Blueprint $table) {
            $table->id();
            $table->string("nome");
            $table->string("idade");
            $table->string("altura");
            $table->string("peso");
            $table->string("sexo");
            $table->string("cpf");
            $table->string("rg");
            $table->string("equipe");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('competidor');
    }
};
