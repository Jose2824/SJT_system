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
        Schema::create('motoristas', function (Blueprint $table) {
            $table->id();
            
            $table->string('nome', 100);       // Nome completo do motorista
            $table->date('datanasc');          // Data de nascimento
            
            $table->string('cpf', 20)->unique();      // CPF com máscara (14 caracteres) ou mais
            $table->string('cnh', 20)->unique();      // CNH com pontos (ex: 111.1111.1111.)
            $table->string('numcont', 20);           // Número de contato com formatação (+55 (88) 9 9924-4044)
            
            $table->timestamps();             // created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motoristas');
    }
};
