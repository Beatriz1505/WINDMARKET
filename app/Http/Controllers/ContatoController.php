<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    /**
     * Exibe o formulário de contato.
     */
    public function create()
    {
        return view('contato');
    }

    /**
     * Processa e armazena o contato enviado pelo formulário.
     *
     * Proteção CSRF:
     * O Laravel valida automaticamente o token _token via middleware 'web'.
     * Qualquer requisição POST sem o token válido retorna erro 419 (Page Expired).
     * A diretiva @csrf na view insere esse token no formulário.
     *
     * Algoritmo de validação:
     * 1. Verifica presença dos campos obrigatórios (nome, email, mensagem)
     * 2. Valida formato do e-mail com regex padrão RFC 5322
     * 3. Limita tamanho dos campos para prevenir overflow e spam
     * 4. Se inválido: redireciona de volta com erros e dados antigos (old())
     * 5. Se válido: persiste no banco e redireciona com mensagem de sucesso
     */
    public function store(Request $request)
    {
        // Passo 1-3: Validação — o Laravel interrompe aqui se houver erro
        $validated = $request->validate([
            'nome'     => 'required|string|max:100',
            'email'    => 'required|email|max:150',
            'telefone' => 'nullable|string|max:20',
            'mensagem' => 'required|string|max:1000',
        ]);

        // Passo 5: Persiste o contato validado no banco de dados
        Contato::create($validated);

        // Redireciona para o formulário com mensagem de sucesso na sessão
        return redirect()
            ->route('contato')
            ->with('sucesso', 'Mensagem enviada! Entraremos em contato em breve.');
    }
}
