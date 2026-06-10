<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Cria a tabela de contatos enviados pelo formulário do site.
     * Armazena os leads gerados pelo marketplace.
     */
    public function up(): void
    {
        Schema::create('contatos', function (Blueprint $table) {
            $table->id();                          // Chave primária
            $table->string('nome');                // Nome do remetente
            $table->string('email');               // E-mail para retorno
            $table->string('telefone')->nullable();// Telefone (campo opcional)
            $table->text('mensagem');              // Corpo da mensagem
            $table->timestamps();                  // created_at e updated_at
        });
    }

    /**
     * Remove a tabela de contatos.
     */
    public function down(): void
    {
        Schema::dropIfExists('contatos');
    }
};
