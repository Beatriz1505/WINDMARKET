<?php

namespace App\Http\Controllers;

use App\Models\Turbina;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Exibe a página inicial do marketplace com as turbinas disponíveis.
     *
     * Algoritmo de listagem:
     * 1. Filtra apenas turbinas com 'disponivel = true'
     * 2. Ordena por preço crescente (ORDER BY preco ASC)
     * 3. Pagina os resultados em grupos de 6 itens por página
     *
     * Complexidade: O(n log n) determinada pelo ORDER BY do banco.
     * Para grandes volumes, recomenda-se adicionar índice na coluna 'preco'.
     */
    public function index()
    {
        /*
         * paginate(6): divide os resultados em páginas de 6 itens,
         * evitando carregar todos os registros de uma vez na memória.
         * O Laravel gera automaticamente os links de paginação.
         */
        $turbinas = Turbina::where('disponivel', true)
                           ->orderBy('preco', 'asc')
                           ->paginate(6);

        return view('home', compact('turbinas'));
    }
}
