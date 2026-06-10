@extends('layouts.app')

@section('title', '404 — WindMarket')

@section('content')

<div class="flex flex-col items-center justify-center text-center py-24">

    {{-- Número 404 — elemento signature MCR: enorme, escuro, com glow vermelho --}}
    <div class="font-display font-black text-abyss leading-none select-none mb-4"
         style="font-size: clamp(7rem, 22vw, 14rem);
                text-shadow: 0 0 60px rgba(204,0,0,0.12), 3px 3px 0 #3a0000;">
        404
    </div>

    <h2 class="font-display font-bold text-blood text-2xl mb-3 tracking-wide">
        Página não encontrada
    </h2>

    <p class="text-coal text-sm leading-relaxed max-w-xs mb-10">
        O vento levou essa página. Ela não existe ou foi removida.<br>
        Volte ao marketplace e continue sua busca por energia limpa.
    </p>

    <a href="{{ route('home') }}"
       class="text-blood text-[0.75rem] uppercase tracking-[0.18em] font-semibold
              border-b border-[#660000] pb-0.5 hover:text-crimson hover:border-crimson transition-colors">
        ← Voltar ao marketplace
    </a>
</div>

@endsection
