<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Executa a migration — cria a tabela de turbinas eólicas.
     * Cada registro representa um produto listado no marketplace.
     */
    public function up(): void
    {
        Schema::create('turbinas', function (Blueprint $table) {
            $table->id();                                     // Chave primária auto-incremento
            $table->string('nome');                           // Nome/modelo da turbina
            $table->text('descricao');                        // Descrição técnica detalhada
            $table->decimal('potencia_kw', 8, 2);             // Potência em kilowatts
            $table->decimal('preco', 10, 2);                  // Preço em R$
            $table->string('fabricante');                     // Nome do fabricante
            $table->string('imagem')->nullable();             // Caminho da imagem (opcional)
            $table->boolean('disponivel')->default(true);     // Disponível para venda
            $table->timestamps();                             // created_at e updated_at
        });
    }

    /**
     * Desfaz a migration — remove a tabela completamente.
     */
    public function down(): void
    {
        Schema::dropIfExists('turbinas');
    }
};
