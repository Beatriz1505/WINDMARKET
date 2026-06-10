@extends('layouts.app')

@section('title', 'WindMarket — Marketplace de Energia Eólica')

@section('content')

{{-- HERO --}}
<div class="text-center py-20 border-b border-abyss mb-12">
    <p class="text-[0.7rem] uppercase tracking-[0.3em] text-blood font-semibold mb-6">
        ⚡ Marketplace de Energia Limpa
    </p>
    <h1 class="font-display font-black text-white leading-tight mb-5"
        style="font-size: clamp(2.2rem, 6vw, 4rem);">
        O mercado de<br>
        <em class="not-italic text-blood">energia eólica</em><br>
        que você precisava.
    </h1>
    <p class="text-ash text-sm max-w-md mx-auto leading-relaxed mb-8">
        Turbinas, projetos e soluções para geração de energia limpa.
        Compre, venda e conecte-se com fabricantes e distribuidores.
    </p>
    <a href="{{ route('contato') }}"
       class="inline-block border border-blood text-blood text-[0.72rem] uppercase tracking-[0.15em] font-semibold
              px-6 py-3 rounded-sm hover:bg-blood hover:text-white transition-all duration-200">
        Anuncie aqui
    </a>
</div>

{{-- LABEL DE SEÇÃO --}}
<p class="text-[0.7rem] uppercase tracking-[0.2em] text-coal font-semibold mb-6 border-l-2 border-blood pl-3">
    Turbinas disponíveis
</p>

{{-- GRID --}}
@if($turbinas->isEmpty())
    <div class="text-center py-20 text-coal">
        <p class="text-sm">Nenhuma turbina disponível no momento. Volte em breve.</p>
    </div>
@else
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
        @foreach($turbinas as $turbina)
        <div class="bg-pit border border-ember rounded-sm p-6 flex flex-col
                    transition-all duration-200 hover:border-blood hover:-translate-y-1">

            <p class="text-[0.67rem] uppercase tracking-[0.18em] text-blood font-semibold mb-1">
                {{ $turbina->fabricante }}
            </p>

            <h2 class="font-display font-bold text-white text-[1.05rem] leading-snug mb-3">
                {{ $turbina->nome }}
            </h2>

            <p class="text-ash text-[0.85rem] leading-relaxed flex-1 mb-4">
                {{ Str::limit($turbina->descricao, 130) }}
            </p>

            <p class="font-display font-bold text-blood text-xl mb-3">
                R$ {{ number_format($turbina->preco, 2, ',', '.') }}
            </p>

            <div class="flex items-center justify-between border-t border-ember pt-3 text-[0.73rem]">
                <span class="text-ash">
                    ⚡ {{ number_format($turbina->potencia_kw, 2, ',', '.') }} kW
                </span>
                @if($turbina->disponivel)
                    <span class="bg-[#0a1a0a] text-green-500 border border-[#1a3a1a]
                                 text-[0.65rem] uppercase tracking-wider font-semibold px-2 py-0.5 rounded-sm">
                        Disponível
                    </span>
                @else
                    <span class="bg-abyss text-blood border border-[#3a0000]
                                 text-[0.65rem] uppercase tracking-wider font-semibold px-2 py-0.5 rounded-sm">
                        Indisponível
                    </span>
                @endif
            </div>
        </div>
        @endforeach
    </div>

    {{-- PAGINAÇÃO --}}
    <div class="mt-12 flex justify-center">
        {{ $turbinas->links() }}
    </div>
@endif

@endsection
