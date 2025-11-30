<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('relatorios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('veiculo'); // placa
            $table->text('descricao');
            $table->decimal('valor', 10, 2);
            $table->date('data');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('relatorios');
    }
};
